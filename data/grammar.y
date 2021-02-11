%pure_parser
%expect 2


%token  IDENTIFIER I_CONSTANT F_CONSTANT STRING_LITERAL FUNC_NAME SIZEOF
%token  PTR_OP INC_OP DEC_OP LEFT_OP RIGHT_OP LE_OP GE_OP EQ_OP NE_OP
%token  AND_OP OR_OP MUL_ASSIGN DIV_ASSIGN MOD_ASSIGN ADD_ASSIGN
%token  SUB_ASSIGN LEFT_ASSIGN RIGHT_ASSIGN AND_ASSIGN
%token  XOR_ASSIGN OR_ASSIGN
%token  TYPEDEF_NAME ENUMERATION_CONSTANT

%token  TYPEDEF EXTERN STATIC AUTO REGISTER INLINE
%token  CONST RESTRICT VOLATILE
%token  BOOL CHAR SHORT INT LONG SIGNED UNSIGNED FLOAT DOUBLE VOID
%token  COMPLEX IMAGINARY 
%token  STRUCT UNION ENUM ELLIPSIS

%token  CASE DEFAULT IF ELSE SWITCH WHILE DO FOR GOTO CONTINUE BREAK RETURN

%token  ALIGNAS ALIGNOF ATOMIC GENERIC NORETURN STATIC_ASSERT THREAD_LOCAL

%start translation_unit
%%

primary_expression
    : IDENTIFIER            { $$ = new Expr\DeclRefExpr($this->semStack[$1], null, $this->startAttributeStack[$1] + $this->endAttributes); }
    | constant              { $$ = $this->semStack[$1]; }
    | string                { $$ = $this->semStack[$1]; }
    | '(' expression ')'    { $$ = $this->semStack[$2]; }
    | generic_selection     { $$ = $this->semStack[$1]; }
    ;

constant
    : I_CONSTANT            { $$ = new Node\Stmt\ValueStmt\Expr\IntegerLiteral($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); } /* includes character_constant */
    | F_CONSTANT            { $$ = new Node\Stmt\ValueStmt\Expr\FloatLiteral($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | ENUMERATION_CONSTANT  { $$ = new Node\Stmt\ValueStmt\Expr\DeclRefExpr($this->semStack[$1], $this->scope->enum($this->semStack[$1]), $this->startAttributeStack[$1] + $this->endAttributes); }  /* after it has been defined as such */
    ;

enumeration_constant        /* before it has been defined as such */
    : IDENTIFIER            { $$ = $this->semStack[$1]; }
    ;

string
    : STRING_LITERAL        { throw new Error('string_literal not implemented'); }
    | FUNC_NAME             { throw new Error('func name not implemented'); }
    ;

generic_selection
    : GENERIC '(' assignment_expression ',' generic_assoc_list ')'  { throw new Error('generic not implemented'); }
    ;

generic_assoc_list
    : generic_association                           { $$ = array($this->semStack[$1]); }
    | generic_assoc_list ',' generic_association    { $this->semStack[$1][] = $this->semStack[$3]; $$ = $this->semStack[$1]; }
    ;

generic_association
    : type_name ':' assignment_expression           { throw new Error('generic association typename not implemented'); }
    | DEFAULT ':' assignment_expression             { throw new Error('generic association default not implemented'); }
    ;

postfix_expression
    : primary_expression                                   { $$ = $this->semStack[$1]; }
    | postfix_expression '[' expression ']'                { throw new Error('dim fetch not implemented'); }
    | postfix_expression '(' ')'                           { $$ = new Expr\CallExpr($this->semStack[$1], [], $this->startAttributeStack[$1] + $this->endAttributes); }
    | postfix_expression '(' argument_expression_list ')'  { $$ = new Expr\CallExpr($this->semStack[$1], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes); }
    | postfix_expression '.' IDENTIFIER                    { throw new Error('.identifier not implemented'); }
    | postfix_expression PTR_OP IDENTIFIER                 { throw new Error('->identifier not implemented'); }
    | postfix_expression INC_OP                            { $$ = new Expr\UnaryOperator($this->semStack[$2], Expr\UnaryOperator::KIND_POSTINC, $this->startAttributeStack[$1] + $this->endAttributes); }
    | postfix_expression DEC_OP                            { $$ = new Expr\UnaryOperator($this->semStack[$2], Expr\UnaryOperator::KIND_POSTDEC, $this->startAttributeStack[$1] + $this->endAttributes); }
    | '(' type_name ')' '{' initializer_list '}'           { throw new Error('initializer list no trailing not implemented'); }
    | '(' type_name ')' '{' initializer_list ',' '}'       { throw new Error('initializer list trailing not implemented'); }
    ;

argument_expression_list
    : assignment_expression                                { $$ = array($this->semStack[$1]); }
    | argument_expression_list ',' assignment_expression   { $this->semStack[$1][] = $this->semStack[$3]; $$ = $this->semStack[$1]; }
    ;

unary_expression
    : postfix_expression                { $$ = $this->semStack[$1]; }
    | INC_OP unary_expression           { $$ = new Expr\UnaryOperator($this->semStack[$2], Expr\UnaryOperator::KIND_PREINC, $this->startAttributeStack[$1] + $this->endAttributes); }
    | DEC_OP unary_expression           { $$ = new Expr\UnaryOperator($this->semStack[$2], Expr\UnaryOperator::KIND_PREDEC, $this->startAttributeStack[$1] + $this->endAttributes); }
    | unary_operator cast_expression    { $$ = new Expr\UnaryOperator($this->semStack[$2], $this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | SIZEOF unary_expression           { $$ = new Expr\UnaryOperator($this->semStack[$2], Expr\UnaryOperator::KIND_SIZEOF, $this->startAttributeStack[$1] + $this->endAttributes); }
    | SIZEOF '(' type_name ')'          { $$ = new Expr\UnaryOperator($this->semStack[$3], Expr\UnaryOperator::KIND_SIZEOF, $this->startAttributeStack[$1] + $this->endAttributes); }
    | ALIGNOF '(' type_name ')'         { $$ = new Expr\UnaryOperator($this->semStack[$3], Expr\UnaryOperator::KIND_ALIGNOF, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

unary_operator
    : '&'       { $$ = Expr\UnaryOperator::KIND_ADDRESS_OF; }
    | '*'       { $$ = Expr\UnaryOperator::KIND_DEREF; }
    | '+'       { $$ = Expr\UnaryOperator::KIND_PLUS; }
    | '-'       { $$ = Expr\UnaryOperator::KIND_MINUS; }
    | '~'       { $$ = Expr\UnaryOperator::KIND_BITWISE_NOT; }
    | '!'       { $$ = Expr\UnaryOperator::KIND_LOGICAL_NOT; }
    ;

cast_expression
    : unary_expression                      { $$ = $this->semStack[$1]; }
    | '(' type_name ')' cast_expression     { $$ = new Expr\CastExpr($this->semStack[$4], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

multiplicative_expression
    : cast_expression                                   { $$ = $this->semStack[$1]; }
    | multiplicative_expression '*' cast_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_MUL, $this->startAttributeStack[$1] + $this->endAttributes); }
    | multiplicative_expression '/' cast_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_DIV, $this->startAttributeStack[$1] + $this->endAttributes); }
    | multiplicative_expression '%' cast_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_REM, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

additive_expression
    : multiplicative_expression                             { $$ = $this->semStack[$1]; }
    | additive_expression '+' multiplicative_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_ADD, $this->startAttributeStack[$1] + $this->endAttributes); }
    | additive_expression '-' multiplicative_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_SUB, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

shift_expression
    : additive_expression                               { $$ = $this->semStack[$1]; }
    | shift_expression LEFT_OP additive_expression      { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_SHL, $this->startAttributeStack[$1] + $this->endAttributes); }
    | shift_expression RIGHT_OP additive_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_SHR, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

relational_expression
    : shift_expression                                  { $$ = $this->semStack[$1]; }
    | relational_expression '<' shift_expression        { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_LT, $this->startAttributeStack[$1] + $this->endAttributes); }
    | relational_expression '>' shift_expression        { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_GT, $this->startAttributeStack[$1] + $this->endAttributes); }
    | relational_expression LE_OP shift_expression      { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_LE, $this->startAttributeStack[$1] + $this->endAttributes); }
    | relational_expression GE_OP shift_expression      { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_GE, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

equality_expression
    : relational_expression                             { $$ = $this->semStack[$1]; }
    | equality_expression EQ_OP relational_expression   { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_EQ, $this->startAttributeStack[$1] + $this->endAttributes); }
    | equality_expression NE_OP relational_expression   { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_NE, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

and_expression
    : equality_expression                       { $$ = $this->semStack[$1]; }
    | and_expression '&' equality_expression    { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_BITWISE_AND, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

exclusive_or_expression
    : and_expression                                { $$ = $this->semStack[$1]; }
    | exclusive_or_expression '^' and_expression    { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_BITWISE_XOR, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

inclusive_or_expression
    : exclusive_or_expression                               { $$ = $this->semStack[$1]; }
    | inclusive_or_expression '|' exclusive_or_expression   { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_BITWISE_OR, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

logical_and_expression
    : inclusive_or_expression                                   { $$ = $this->semStack[$1]; }
    | logical_and_expression AND_OP inclusive_or_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_LOGICAL_AND, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

logical_or_expression
    : logical_and_expression                                { $$ = $this->semStack[$1]; }
    | logical_or_expression OR_OP logical_and_expression    { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_LOGICAL_OR, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

conditional_expression
    : logical_or_expression                                             { $$ = $this->semStack[$1]; }
    | logical_or_expression '?' expression ':' conditional_expression   { $$ = new Expr\AbstractConditionalOperator\ConditionalOperator($this->semStack[$1], $this->semStack[$3], $this->semStack[$5], $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

assignment_expression
    : conditional_expression                                        { $$ = $this->semStack[$1]; }
    | unary_expression assignment_operator assignment_expression    { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

assignment_operator
    : '='           { $$ = Expr\BinaryOperator::KIND_ASSIGN; }
    | MUL_ASSIGN    { $$ = Expr\BinaryOperator::KIND_MUL_ASSIGN; }
    | DIV_ASSIGN    { $$ = Expr\BinaryOperator::KIND_DIV_ASSIGN; }
    | MOD_ASSIGN    { $$ = Expr\BinaryOperator::KIND_REM_ASSIGN; }
    | ADD_ASSIGN    { $$ = Expr\BinaryOperator::KIND_ADD_ASSIGN; }
    | SUB_ASSIGN    { $$ = Expr\BinaryOperator::KIND_SUB_ASSIGN; }
    | LEFT_ASSIGN   { $$ = Expr\BinaryOperator::KIND_SHL_ASSIGN; }
    | RIGHT_ASSIGN  { $$ = Expr\BinaryOperator::KIND_SHR_ASSIGN; }
    | AND_ASSIGN    { $$ = Expr\BinaryOperator::KIND_AND_ASSIGN; }
    | XOR_ASSIGN    { $$ = Expr\BinaryOperator::KIND_XOR_ASSIGN; }
    | OR_ASSIGN     { $$ = Expr\BinaryOperator::KIND_OR_ASSIGN; }
    ;

expression
    : assignment_expression                     { $$ = $this->semStack[$1]; }
    | expression ',' assignment_expression      { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_COMMA, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

constant_expression
    : conditional_expression    { $$ = $this->semStack[$1]; }  /* with constraints */
    ;

declaration
    : declaration_specifiers ';'                        { $$ = new IR\Declaration($this->semStack[$1][0], $this->semStack[$1][1], [], $this->startAttributeStack[$1] + $this->endAttributes); }
    | declaration_specifiers init_declarator_list ';'   { $$ = new IR\Declaration($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    | static_assert_declaration                         
    ;

declaration_specifiers
    : storage_class_specifier declaration_specifiers    { $$ = $this->semStack[$2]; $$[0] |= $this->semStack[$1]; }
    | storage_class_specifier                           { $$ = [$this->semStack[$1], []]; }
    | type_specifier declaration_specifiers             { $$ = $this->semStack[$2]; array_unshift($$[1], $this->semStack[$1]); }
    | type_specifier                                    { $$ = [0, [$this->semStack[$1]]]; }
    | type_qualifier declaration_specifiers             { $$ = $this->semStack[$2]; $$[0] |= $this->semStack[$1]; }
    | type_qualifier                                    { $$ = [$this->semStack[$1], []]; }
    | function_specifier declaration_specifiers         { $$ = $this->semStack[$2]; $$[0] |= $this->semStack[$1]; }
    | function_specifier                                { $$ = [$this->semStack[$1], []]; }
    | alignment_specifier declaration_specifiers        { $$ = $this->semStack[$2]; $$[0] |= $this->semStack[$1]; }
    | alignment_specifier                               { $$ = [$this->semStack[$1], []]; }
    ;

init_declarator_list
    : init_declarator                               { $$ = array($this->semStack[$1]); }
    | init_declarator_list ',' init_declarator      { $this->semStack[$1][] = $this->semStack[$3]; $$ = $this->semStack[$1]; }
    ;

init_declarator
    : declarator '=' initializer                    { $$ = new IR\InitDeclarator($this->semStack[$1], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes); }
    | declarator                                    { $$ = new IR\InitDeclarator($this->semStack[$1], null, $this->startAttributeStack[$1] + $this->endAttributes); }
    ; 

storage_class_specifier
    : TYPEDEF               { $$ = Node\Decl::KIND_TYPEDEF; } /* identifiers must be flagged as TYPEDEF_NAME */
    | EXTERN                { $$ = Node\Decl::KIND_EXTERN; }
    | STATIC                { $$ = Node\Decl::KIND_STATIC; }
    | THREAD_LOCAL          { $$ = Node\Decl::KIND_THREAD_LOCAL; }
    | AUTO                  { $$ = Node\Decl::KIND_AUTO; }
    | REGISTER              { $$ = Node\Decl::KIND_REGISTER; }
    ;

type_specifier
    : VOID                          { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | CHAR                          { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | SHORT                         { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | INT                           { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | LONG                          { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | FLOAT                         { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | DOUBLE                        { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | SIGNED                        { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | UNSIGNED                      { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | BOOL                          { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | COMPLEX                       { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | IMAGINARY                     { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); } /* non-mandated extension */
    | atomic_type_specifier         { $$ = $this->semStack[$1]; }
    | struct_or_union_specifier     { $$ = new Node\Type\TagType\RecordType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | enum_specifier                { $$ = new Node\Type\TagType\EnumType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | TYPEDEF_NAME                  { $$ = new Node\Type\TypedefType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); } /* after it has been defined as such */
    ;

struct_or_union_specifier
    : struct_or_union '{' struct_declaration_list '}'               { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$1], null, $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes); }
    | struct_or_union IDENTIFIER '{' struct_declaration_list '}'    { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$1], $this->semStack[$2], $this->semStack[$4], $this->startAttributeStack[$1] + $this->endAttributes); }
    | struct_or_union IDENTIFIER                                    { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$1], $this->semStack[$2], null, $this->startAttributeStack[$1] + $this->endAttributes); }
    | struct_or_union TYPEDEF_NAME '{' struct_declaration_list '}'  { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$1], $this->semStack[$2], $this->semStack[$4], $this->startAttributeStack[$1] + $this->endAttributes); }
    | struct_or_union TYPEDEF_NAME                                  { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$1], $this->semStack[$2], null, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;






struct_or_union
    : STRUCT        { $$ = Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl::KIND_STRUCT; }
    | UNION         { $$ = Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl::KIND_UNION; }
    ;

struct_declaration_list
    : struct_declaration                            { $$ = $this->semStack[$1]; }
    | struct_declaration_list struct_declaration    { $$ = array_merge($this->semStack[$1], $this->semStack[$2]); }
    ;

struct_declaration
    : specifier_qualifier_list ';'                          { $$ = $this->compiler->compileStructField($this->semStack[$1][0], $this->semStack[$1][1], null, $this->startAttributeStack[$1] + $this->endAttributes); } /* for anonymous struct/union */
    | specifier_qualifier_list struct_declarator_list ';'   { $$ = $this->compiler->compileStructField($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    | static_assert_declaration                             
    ;

specifier_qualifier_list                        
    : type_specifier specifier_qualifier_list           { $$ = $this->semStack[$2]; array_unshift($this->semValue[1], $this->semStack[$1]); }
    | type_specifier                                    { $$ = [0, [$this->semStack[$1]]]; }
    | type_qualifier specifier_qualifier_list           { $$ = $this->semStack[$2]; $$[0] |= $this->semStack[$1]; }
    | type_qualifier                                    { $$ = [$this->semStack[$1], []]; }
    ;

struct_declarator_list
    : struct_declarator                                 { $$ = array($this->semStack[$1]); }
    | struct_declarator_list ',' struct_declarator      { $this->semStack[$1][] = $this->semStack[$3]; $$ = $this->semStack[$1]; }
    ;

struct_declarator
    : ':' constant_expression               { $$ = new IR\FieldDeclaration(null, $this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | declarator ':' constant_expression    { $$ = new IR\FieldDeclaration($this->semStack[$1], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes); }
    | declarator                            { $$ = new IR\FieldDeclaration($this->semStack[$1], null, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

enum_specifier
    : ENUM '{' enumerator_list '}'                  { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl(null, $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes); }
    | ENUM '{' enumerator_list ',' '}'              { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl(null, $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes); }
    | ENUM IDENTIFIER '{' enumerator_list '}'       { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl($this->semStack[$2], $this->semStack[$4], $this->startAttributeStack[$1] + $this->endAttributes); }
    | ENUM IDENTIFIER '{' enumerator_list ',' '}'   { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl($this->semStack[$2], $this->semStack[$4], $this->startAttributeStack[$1] + $this->endAttributes); }
    | ENUM IDENTIFIER                               { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl($this->semStack[$2], null, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

enumerator_list
    : enumerator                        { $$ = array($this->semStack[$1]); }
    | enumerator_list ',' enumerator    { $this->semStack[$1][] = $this->semStack[$3]; $$ = $this->semStack[$1]; }
    ;

enumerator  /* identifiers must be flagged as ENUMERATION_CONSTANT */
    : enumeration_constant '=' constant_expression      { $$ = new Node\Decl\NamedDecl\ValueDecl\EnumConstantDecl($this->semStack[$1], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes); $this->scope->enumdef($this->semStack[$1], $this->semValue); }
    | enumeration_constant                              { $$ = new Node\Decl\NamedDecl\ValueDecl\EnumConstantDecl($this->semStack[$1], null, $this->startAttributeStack[$1] + $this->endAttributes); $this->scope->enumdef($this->semStack[$1], $this->semValue); }
    ;

atomic_type_specifier
    : ATOMIC '(' type_name ')'          { throw new Error('atomic type_name not implemented'); }
    ;

type_qualifier
    : CONST         { $$ = Node\Decl::KIND_CONST; }
    | RESTRICT      { $$ = Node\Decl::KIND_RESTRICT; }
    | VOLATILE      { $$ = Node\Decl::KIND_VOLATILE; }
    | ATOMIC        { $$ = Node\Decl::KIND_ATOMIC; }
    ;

function_specifier
    : INLINE        { $$ = Node\Decl::KIND_INLINE; }
    | NORETURN      { $$ = Node\Decl::KIND_NORETURN; }
    ;

alignment_specifier
    : ALIGNAS '(' type_name ')'             { throw new Error('alignas type_name not implemented'); }
    | ALIGNAS '(' constant_expression ')'   { throw new Error('alignas constant_expression not implemented'); }
    ;

declarator
    : pointer direct_declarator     { $$ = new IR\Declarator($this->semStack[$1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    | direct_declarator             { $$ = new IR\Declarator(null, $this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

direct_declarator
    : IDENTIFIER                                                                    { $$ = new IR\DirectDeclarator\Identifier($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | '(' declarator ')'                                                            { $$ = new IR\DirectDeclarator\Declarator($this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    | direct_declarator '[' ']'                                                     { $$ = new IR\DirectDeclarator\IncompleteArray($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | direct_declarator '[' '*' ']'                                                 { $$ = new IR\DirectDeclarator\IncompleteArray($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | direct_declarator '[' STATIC type_qualifier_list assignment_expression ']'    { throw new Error('direct_declarator bracket static type_qualifier_list assignment_expression not implemented'); }
    | direct_declarator '[' STATIC assignment_expression ']'                        { throw new Error('direct_declarator bracket static assignment_expression not implemented'); }
    | direct_declarator '[' type_qualifier_list '*' ']'                             { throw new Error('direct_declarator bracket type_qualifier_list star not implemented'); }
    | direct_declarator '[' type_qualifier_list STATIC assignment_expression ']'    { throw new Error('direct_declarator bracket type_qualifier_list static assignment_expression not implemented'); }
    | direct_declarator '[' type_qualifier_list assignment_expression ']'           { throw new Error('direct_declarator bracket type_qualifier_list assignment_expression not implemented'); }
    | direct_declarator '[' type_qualifier_list ']'                                 { throw new Error('direct_declarator bracket type_qualifier_list not implemented'); }
    | direct_declarator '[' assignment_expression ']'                               { $$ = new IR\DirectDeclarator\CompleteArray($this->semStack[$1], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes); }
    | direct_declarator '(' parameter_type_list ')'                                 { $$ = new IR\DirectDeclarator\Function_($this->semStack[$1], $this->semStack[$3][0], $this->semStack[$3][1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | direct_declarator '(' ')'                                                     { $$ = new IR\DirectDeclarator\Function_($this->semStack[$1], [], false, $this->startAttributeStack[$1] + $this->endAttributes); }
    | direct_declarator '(' identifier_list ')'                                     { throw new Error('direct_declarator params identifier list not implemented'); }
    ;

pointer
    : '*' type_qualifier_list pointer       { $$ = new IR\QualifiedPointer($this->semStack[$2], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes); }
    | '*' type_qualifier_list               { $$ = new IR\QualifiedPointer($this->semStack[$2], null, $this->startAttributeStack[$1] + $this->endAttributes); }
    | '*' pointer                           { $$ = new IR\QualifiedPointer(0, $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    | '*'                                   { $$ = new IR\QualifiedPointer(0, null, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

type_qualifier_list
    : type_qualifier                        { $$ = $this->semStack[$1]; }
    | type_qualifier_list type_qualifier    { $$ = $this->semStack[$1] | $this->semStack[$2]; }
    ;

parameter_type_list
    : parameter_list ',' ELLIPSIS           { $$ = [$this->semStack[$1], true]; }
    | parameter_list                        { $$ = [$this->semStack[$1], false]; }
    ;

parameter_list
    : parameter_declaration                         { $$ = array($this->semStack[$1]); }
    | parameter_list ',' parameter_declaration      { $this->semStack[$1][] = $this->semStack[$3]; $$ = $this->semStack[$1]; }
    ;

parameter_declaration
    : declaration_specifiers declarator             { $$ = $this->compiler->compileParamVarDeclaration($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    | declaration_specifiers abstract_declarator    { $$ = $this->compiler->compileParamAbstractDeclaration($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    | declaration_specifiers                        { $$ = $this->compiler->compileParamAbstractDeclaration($this->semStack[$1][0], $this->semStack[$1][1], null, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

identifier_list
    : IDENTIFIER                        { throw new Error('identifier_list identifier not implemented'); }
    | identifier_list ',' IDENTIFIER    { throw new Error('identifier_list identifier_list identifier not implemented'); }
    ;

type_name
    : specifier_qualifier_list abstract_declarator  { $$ = $this->compiler->compileTypeReference($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    | specifier_qualifier_list                      { $$ = $this->compiler->compileTypeReference($this->semStack[$1][0], $this->semStack[$1][1], null, $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

abstract_declarator
    : pointer direct_abstract_declarator    { $$ = new IR\AbstractDeclarator($this->semStack[$1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    | pointer                               { $$ = new IR\AbstractDeclarator($this->semStack[$1], null, $this->startAttributeStack[$1] + $this->endAttributes); }
    | direct_abstract_declarator            { $$ = new IR\AbstractDeclarator(null, $this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

direct_abstract_declarator
    : '(' abstract_declarator ')'                                                           { $$ = new IR\DirectAbstractDeclarator\AbstractDeclarator($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | '[' ']'                                                                               { $$ = new IR\DirectAbstractDeclarator\IncompleteArray($this->startAttributeStack[$1] + $this->endAttributes); }
    | '[' '*' ']'                                                                           { throw new Error('direct_abstract_declarator bracket star not implemented'); }
    | '[' STATIC type_qualifier_list assignment_expression ']'                              { throw new Error('direct_abstract_declarator bracket static type qualifier list assignment not implemented'); }
    | '[' STATIC assignment_expression ']'                                                  { throw new Error('direct_abstract_declarator bracket static assignment not implemented'); }
    | '[' type_qualifier_list STATIC assignment_expression ']'                              { throw new Error('direct_abstract_declarator bracket type qualifier list static assignment not implemented'); }
    | '[' type_qualifier_list assignment_expression ']'                                     { throw new Error('direct_abstract_declarator bracket type qualifier list assignment not implemented'); }
    | '[' type_qualifier_list ']'                                                           { throw new Error('direct_abstract_declarator bracket type qualifier list not implemented'); }
    | '[' assignment_expression ']'                                                         { throw new Error('direct_abstract_declarator bracket assignment_expr not implemented'); }
    | direct_abstract_declarator '[' ']'                                                    { throw new Error('direct_abstract_declarator with bracket not implemented'); }
    | direct_abstract_declarator '[' '*' ']'                                                { throw new Error('direct_abstract_declarator with bracket star not implemented'); }
    | direct_abstract_declarator '[' STATIC type_qualifier_list assignment_expression ']'   { throw new Error('direct_abstract_declarator with bracket static type qualifier list assignment not implemented'); }
    | direct_abstract_declarator '[' STATIC assignment_expression ']'                       { throw new Error('direct_abstract_declarator with bracket static assignment not implemented'); }
    | direct_abstract_declarator '[' type_qualifier_list assignment_expression ']'          { throw new Error('direct_abstract_declarator with bracket type qualifier list assignment not implemented'); }
    | direct_abstract_declarator '[' type_qualifier_list STATIC assignment_expression ']'   { throw new Error('direct_abstract_declarator with bracket type qualifier list static asssignment not implemented'); }
    | direct_abstract_declarator '[' type_qualifier_list ']'                                { throw new Error('direct_abstract_declarator with bracket type qualifier list not implemented'); }
    | direct_abstract_declarator '[' assignment_expression ']'                              { throw new Error('direct_abstract_declarator with bracket assignment_expr not implemented'); }
    | '(' ')'                                                                               { throw new Error('direct_abstract_declarator empty parameter list not implemented'); }
    | '(' parameter_type_list ')'                                                           { throw new Error('direct_abstract_declarator parameter list not implemented'); }
    | direct_abstract_declarator '(' ')'                                                    { throw new Error('direct_abstract_declarator with empty parameter list not implemented'); }
    | direct_abstract_declarator '(' parameter_type_list ')'                                { throw new Error('direct_abstract_declarator with parameter list not implemented'); }
    ;

initializer
    : '{' initializer_list '}'      { throw new Error('initializer brackend no trailing not implemented'); }
    | '{' initializer_list ',' '}'  { throw new Error('initializer brackeded trailing not implemented'); }
    | assignment_expression         { throw new Error('initializer assignment_expression not implemented'); }
    ;

initializer_list
    : designation initializer                           { throw new Error('initializer_list designator initializer not implemented'); }
    | initializer                                       { throw new Error('initializer_list initializer not implemented'); }
    | initializer_list ',' designation initializer      { throw new Error('initializer_list initializer_list designator initializer not implemented'); }
    | initializer_list ',' initializer                  { throw new Error('initializer_list initializer_list initializer not implemented'); }
    ;

designation
    : designator_list '='       
    ;

designator_list
    : designator                    { $$ = array($this->semStack[$1]); }
    | designator_list designator    { $this->semStack[$1][] = $this->semStack[$2]; $this->semValue = $this->semStack[$1]; }
    ;

designator
    : '[' constant_expression ']'   { throw new Error('[] designator not implemented'); }
    | '.' IDENTIFIER                { throw new Error('. designator not implemented'); }
    ;

static_assert_declaration
    : STATIC_ASSERT '(' constant_expression ',' STRING_LITERAL ')' ';'      { throw new Error('static assert declaration not implemented'); }
    ;

statement
    : labeled_statement     { $$ = $this->semStack[$1]; }
    | compound_statement    { $$ = $this->semStack[$1]; }
    | expression_statement  { $$ = $this->semStack[$1]; }
    | selection_statement   { $$ = $this->semStack[$1]; }
    | iteration_statement   { $$ = $this->semStack[$1]; }
    | jump_statement        { $$ = $this->semStack[$1]; }
    ;

labeled_statement
    : IDENTIFIER ':' statement                  { throw new Error('labeled_statement identifier not implemented'); }
    | CASE constant_expression ':' statement    { throw new Error('labeled_statement case not implemented'); }
    | DEFAULT ':' statement                     { throw new Error('labeled_statement default not implemented'); }
    ;

compound_statement
    : '{' '}'                   { $$ = new Node\Stmt\CompoundStmt([], $this->startAttributeStack[$1] + $this->endAttributes); }
    | '{'  block_item_list '}'  { $$ = new Node\Stmt\CompoundStmt($this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

block_item_list
    : block_item                    { $$ = array($this->semStack[$1]); }
    | block_item_list block_item    { $this->semStack[$1][] = $this->semStack[$2]; $this->semValue = $this->semStack[$1]; }
    ;

block_item
    : declaration           { throw new Error('block_item declaration not implemented'); }
    | statement             { $$ = $this->semStack[$1]; }
    ;

expression_statement
    : ';'                   { $$ = null; }
    | expression ';'        { $$ = $this->semStack[$1]; }
    ;

selection_statement
    : IF '(' expression ')' statement ELSE statement    { throw new Error('if else not implemented'); }
    | IF '(' expression ')' statement                   { throw new Error('if not implemented'); }
    | SWITCH '(' expression ')' statement               { throw new Error('switch not implemented'); }
    ;

iteration_statement
    : WHILE '(' expression ')' statement                                            { throw new Error('iteration 0 not implemented'); }
    | DO statement WHILE '(' expression ')' ';'                                     { throw new Error('iteration 1 not implemented'); }
    | FOR '(' expression_statement expression_statement ')' statement               { throw new Error('iteration 2 not implemented'); }
    | FOR '(' expression_statement expression_statement expression ')' statement    { throw new Error('iteration 3 not implemented'); }
    | FOR '(' declaration expression_statement ')' statement                        { throw new Error('iteration 4 not implemented'); }
    | FOR '(' declaration expression_statement expression ')' statement             { throw new Error('iteration 5 not implemented'); }
    ;

jump_statement
    : GOTO IDENTIFIER ';'       { throw new Error('goto identifier not implemented'); }
    | CONTINUE ';'              { throw new Error('continue not implemented'); }
    | BREAK ';'                 { throw new Error('break not implemented'); }
    | RETURN ';'                { $$ = new Node\Stmt\ReturnStmt(null, $this->startAttributeStack[$1] + $this->endAttributes); }
    | RETURN expression ';'     { $$ = new Node\Stmt\ReturnStmt($this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

translation_unit
    : external_declaration                      { $$ = new Node\TranslationUnitDecl($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    | translation_unit external_declaration     { $$ = $this->semStack[$1]; $this->semValue->addDecl(...$this->semStack[$2]); }
    ;

external_declaration
    : function_definition   { $$ = $this->semStack[$1]; }
    | declaration           { $$ = $this->compiler->compileExternalDeclaration($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

function_definition
    : declaration_specifiers declarator declaration_list compound_statement     { $$ = $this->compiler->compileFunction($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], $this->semStack[$3], $this->semStack[$4], $this->startAttributeStack[$1] + $this->endAttributes); }
    | declaration_specifiers declarator compound_statement                      { $$ = $this->compiler->compileFunction($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], [], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes); }
    ;

declaration_list
    : declaration                   { $$ = array($this->semStack[$1]); }
    | declaration_list declaration  { $this->semStack[$1][] = $this->semStack[$2]; $this->semValue = $this->semStack[$1]; }
    ;

%%