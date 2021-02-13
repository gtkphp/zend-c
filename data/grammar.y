%pure_parser
%expect 2


%token  IDENTIFIER I_CONSTANT F_CONSTANT STRING_LITERAL FUNC_NAME SIZEOF
%token  PTR_OP INC_OP DEC_OP LEFT_OP RIGHT_OP LE_OP GE_OP EQ_OP NE_OP NOT_OP
%token  AND_OP OR_OP MUL_ASSIGN DIV_ASSIGN MOD_ASSIGN ADD_ASSIGN
%token  SUB_ASSIGN LEFT_ASSIGN RIGHT_ASSIGN AND_ASSIGN
%token  XOR_ASSIGN OR_ASSIGN NOT_ASSIGN
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
    : IDENTIFIER            { $$ = new Expr\DeclRefExpr($this->semStack[$1], null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_0*/ }
    | constant              { $$ = $this->semStack[$1];/*LABEL_1*/ }
    | string                { $$ = $this->semStack[$1];/*LABEL_2*/ }
    | '(' expression ')'    { $$ = $this->semStack[$2];/*LABEL_3*/ }
    | generic_selection     { $$ = $this->semStack[$1];/*LABEL_4*/ }
    ;

constant
    : I_CONSTANT            { $$ = new Node\Stmt\ValueStmt\Expr\IntegerLiteral($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_5*/ } /* includes character_constant */
    | F_CONSTANT            { $$ = new Node\Stmt\ValueStmt\Expr\FloatLiteral($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_6*/ }
    | ENUMERATION_CONSTANT  { $$ = new Node\Stmt\ValueStmt\Expr\DeclRefExpr($this->semStack[$1], $this->scope->enum($this->semStack[$1]), $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_7*/ }  /* after it has been defined as such */
    ;

enumeration_constant        /* before it has been defined as such */
    : IDENTIFIER            { $$ = $this->semStack[$1];/*LABEL_8*/ }
    ;

string
    : STRING_LITERAL        { $$ = new Node\Stmt\ValueStmt\Expr($this->semStack[$1]); /*throw new Error('string_literal not implemented');*/ }
    | FUNC_NAME             { throw new Error('func name not implemented');/*LABEL_9*/ }
    ;

generic_selection
    : GENERIC '(' assignment_expression ',' generic_assoc_list ')'  { throw new Error('generic not implemented');/*LABEL_10*/ }
    ;

generic_assoc_list
    : generic_association                           { $$ = array($this->semStack[$1]);/*LABEL_11*/ }
    | generic_assoc_list ',' generic_association    { $this->semStack[$1][] = $this->semStack[$3]; $$ = $this->semStack[$1];/*LABEL_12*/ }
    ;

generic_association
    : type_name ':' assignment_expression           { throw new Error('generic association typename not implemented');/*LABEL_13*/ }
    | DEFAULT ':' assignment_expression             { throw new Error('generic association default not implemented');/*LABEL_14*/ }
    ;

postfix_expression
    : primary_expression                                   { $$ = $this->semStack[$1];/*LABEL_15*/ }
    | postfix_expression '[' expression ']'                { throw new Error('dim fetch not implemented');/*LABEL_16*/ }
    | postfix_expression '(' ')'                           { $$ = new Expr\CallExpr($this->semStack[$1], [], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_17*/ }
    | postfix_expression '(' argument_expression_list ')'  { $$ = new Expr\CallExpr($this->semStack[$1], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_18*/ }
    | postfix_expression '.' IDENTIFIER                    { throw new Error('.identifier not implemented');/*LABEL_19*/ }
    | postfix_expression PTR_OP IDENTIFIER                 { throw new Error('->identifier not implemented');/*LABEL_20*/ }
    | postfix_expression INC_OP                            { $$ = new Expr\UnaryOperator($this->semStack[$2], Expr\UnaryOperator::KIND_POSTINC, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_21*/ }
    | postfix_expression DEC_OP                            { $$ = new Expr\UnaryOperator($this->semStack[$2], Expr\UnaryOperator::KIND_POSTDEC, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_22*/ }
    | '(' type_name ')' '{' initializer_list '}'           { throw new Error('initializer list no trailing not implemented');/*LABEL_23*/ }
    | '(' type_name ')' '{' initializer_list ',' '}'       { throw new Error('initializer list trailing not implemented');/*LABEL_24*/ }
    ;

argument_expression_list
    : assignment_expression                                { $$ = array($this->semStack[$1]);/*LABEL_25*/ }
    | argument_expression_list ',' assignment_expression   { $this->semStack[$1][] = $this->semStack[$3]; $$ = $this->semStack[$1];/*LABEL_26*/ }
    ;

unary_expression
    : postfix_expression                { $$ = $this->semStack[$1];/*LABEL_27*/ }
    | INC_OP unary_expression           { $$ = new Expr\UnaryOperator($this->semStack[$2], Expr\UnaryOperator::KIND_PREINC, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_28*/ }
    | DEC_OP unary_expression           { $$ = new Expr\UnaryOperator($this->semStack[$2], Expr\UnaryOperator::KIND_PREDEC, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_29*/ }
    | NOT_OP unary_expression           { $$ = new Expr\UnaryOperator($this->semStack[$2], Expr\UnaryOperator::KIND_BITWISE_NOT, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_30*/ }
    | unary_operator cast_expression    { $$ = new Expr\UnaryOperator($this->semStack[$2], $this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_31*/ }
    | SIZEOF unary_expression           { $$ = new Expr\UnaryOperator($this->semStack[$2], Expr\UnaryOperator::KIND_SIZEOF, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_32*/ }
    | SIZEOF '(' type_name ')'          { $$ = new Expr\UnaryOperator($this->semStack[$3], Expr\UnaryOperator::KIND_SIZEOF, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_33*/ }
    | ALIGNOF '(' type_name ')'         { $$ = new Expr\UnaryOperator($this->semStack[$3], Expr\UnaryOperator::KIND_ALIGNOF, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_34*/ }
    ;

unary_operator
    : '&'       { $$ = Expr\UnaryOperator::KIND_ADDRESS_OF;/*LABEL_35*/ }
    | '*'       { $$ = Expr\UnaryOperator::KIND_DEREF;/*LABEL_36*/ }
    | '+'       { $$ = Expr\UnaryOperator::KIND_PLUS;/*LABEL_37*/ }
    | '-'       { $$ = Expr\UnaryOperator::KIND_MINUS;/*LABEL_38*/ }
    | '!'       { $$ = Expr\UnaryOperator::KIND_LOGICAL_NOT;/*LABEL_39*/ }
    ;

bitwise_operator
    : '~'       { $$ = Expr\UnaryOperator::KIND_BITWISE_NOT;/*LABEL_40*/ }
    ;

cast_expression
    : unary_expression                      { $$ = $this->semStack[$1];/*LABEL_41*/ }
    | '(' type_name ')' cast_expression     { $$ = new Expr\CastExpr($this->semStack[$4], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_42*/ }
    ;

multiplicative_expression
    : cast_expression                                   { $$ = $this->semStack[$1];/*LABEL_43*/ }
    | multiplicative_expression '*' cast_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_MUL, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_44*/ }
    | multiplicative_expression '/' cast_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_DIV, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_45*/ }
    | multiplicative_expression '%' cast_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_REM, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_46*/ }
    ;

additive_expression
    : multiplicative_expression                             { $$ = $this->semStack[$1];/*LABEL_47*/ }
    | additive_expression '+' multiplicative_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_ADD, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_48*/ }
    | additive_expression '-' multiplicative_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_SUB, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_49*/ }
    ;

shift_expression
    : additive_expression                               { $$ = $this->semStack[$1];/*LABEL_50*/ }
    | shift_expression LEFT_OP additive_expression      { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_SHL, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_51*/ }
    | shift_expression RIGHT_OP additive_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_SHR, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_52*/ }
    ;

relational_expression
    : shift_expression                                  { $$ = $this->semStack[$1];/*LABEL_53*/ }
    | relational_expression '<' shift_expression        { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_LT, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_54*/ }
    | relational_expression '>' shift_expression        { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_GT, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_55*/ }
    | relational_expression LE_OP shift_expression      { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_LE, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_56*/ }
    | relational_expression GE_OP shift_expression      { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_GE, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_57*/ }
    ;

equality_expression
    : relational_expression                             { $$ = $this->semStack[$1];/*LABEL_58*/ }
    | equality_expression EQ_OP relational_expression   { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_EQ, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_59*/ }
    | equality_expression NE_OP relational_expression   { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_NE, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_60*/ }
    ;

and_expression
    : equality_expression                       { $$ = $this->semStack[$1];/*LABEL_61*/ }
    | and_expression '&' equality_expression    { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_BITWISE_AND, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_62*/ }
    ;

exclusive_or_expression
    : and_expression                                { $$ = $this->semStack[$1];/*LABEL_63*/ }
    | exclusive_or_expression '^' and_expression    { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_BITWISE_XOR, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_64*/ }
    ;

inclusive_or_expression
    : exclusive_or_expression                               { $$ = $this->semStack[$1];/*LABEL_65*/ }
    | inclusive_or_expression '|' exclusive_or_expression   { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_BITWISE_OR, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_66*/ }
    ;

logical_and_expression
    : inclusive_or_expression                                   { $$ = $this->semStack[$1];/*LABEL_67*/ }
    | logical_and_expression AND_OP inclusive_or_expression     { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_LOGICAL_AND, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_68*/ }
    ;

logical_or_expression
    : logical_and_expression                                { $$ = $this->semStack[$1];/*LABEL_69*/ }
    | logical_or_expression OR_OP logical_and_expression    { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_LOGICAL_OR, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_70*/ }
    ;

conditional_expression
    : logical_or_expression                                             { $$ = $this->semStack[$1];/*LABEL_71*/ }
    | logical_or_expression '?' expression ':' conditional_expression   { $$ = new Expr\AbstractConditionalOperator\ConditionalOperator($this->semStack[$1], $this->semStack[$3], $this->semStack[$5], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_72*/ }
    ;

assignment_expression
    : conditional_expression                                        { $$ = $this->semStack[$1];/*LABEL_73*/ }
    | unary_expression assignment_operator assignment_expression    { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_74*/ }
    ;

assignment_operator
    : '='           { $$ = Expr\BinaryOperator::KIND_ASSIGN;/*LABEL_75*/ }
    | MUL_ASSIGN    { $$ = Expr\BinaryOperator::KIND_MUL_ASSIGN;/*LABEL_76*/ }
    | DIV_ASSIGN    { $$ = Expr\BinaryOperator::KIND_DIV_ASSIGN;/*LABEL_77*/ }
    | MOD_ASSIGN    { $$ = Expr\BinaryOperator::KIND_REM_ASSIGN;/*LABEL_78*/ }
    | ADD_ASSIGN    { $$ = Expr\BinaryOperator::KIND_ADD_ASSIGN;/*LABEL_79*/ }
    | SUB_ASSIGN    { $$ = Expr\BinaryOperator::KIND_SUB_ASSIGN;/*LABEL_80*/ }
    | LEFT_ASSIGN   { $$ = Expr\BinaryOperator::KIND_SHL_ASSIGN;/*LABEL_81*/ }
    | RIGHT_ASSIGN  { $$ = Expr\BinaryOperator::KIND_SHR_ASSIGN;/*LABEL_82*/ }
    | AND_ASSIGN    { $$ = Expr\BinaryOperator::KIND_AND_ASSIGN;/*LABEL_83*/ }
    | XOR_ASSIGN    { $$ = Expr\BinaryOperator::KIND_XOR_ASSIGN;/*LABEL_84*/ }
    | OR_ASSIGN     { $$ = Expr\BinaryOperator::KIND_OR_ASSIGN;/*LABEL_85*/ }
    ;

expression
    : assignment_expression                     { $$ = $this->semStack[$1];/*LABEL_86*/ }
    | expression ',' assignment_expression      { $$ = new Expr\BinaryOperator($this->semStack[$1], $this->semStack[$3], Expr\BinaryOperator::KIND_COMMA, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_87*/ }
    ;

constant_expression
    : conditional_expression    { $$ = $this->semStack[$1];/*LABEL_88*/ }  /* with constraints */
    ;

declaration
    : declaration_specifiers ';'                        { $$ = new IR\Declaration($this->semStack[$1][0], $this->semStack[$1][1], [], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_89*/ }
    | declaration_specifiers init_declarator_list ';'   { $$ = new IR\Declaration($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_90*/ }
    | static_assert_declaration                         
    ;

declaration_specifiers
    : storage_class_specifier declaration_specifiers    { $$ = $this->semStack[$2]; $$[0] |= $this->semStack[$1];/*LABEL_91*/ }
    | storage_class_specifier                           { $$ = [$this->semStack[$1], []];/*LABEL_92*/ }
    | type_specifier declaration_specifiers             { $$ = $this->semStack[$2]; array_unshift($$[1], $this->semStack[$1]);/*LABEL_93*/ }
    | type_specifier                                    { $$ = [0, [$this->semStack[$1]]];/*LABEL_94*/ }
    | type_qualifier declaration_specifiers             { $$ = $this->semStack[$2]; $$[0] |= $this->semStack[$1];/*LABEL_95*/ }
    | type_qualifier                                    { $$ = [$this->semStack[$1], []];/*LABEL_96*/ }
    | function_specifier declaration_specifiers         { $$ = $this->semStack[$2]; $$[0] |= $this->semStack[$1];/*LABEL_97*/ }
    | function_specifier                                { $$ = [$this->semStack[$1], []];/*LABEL_98*/ }
    | alignment_specifier declaration_specifiers        { $$ = $this->semStack[$2]; $$[0] |= $this->semStack[$1];/*LABEL_99*/ }
    | alignment_specifier                               { $$ = [$this->semStack[$1], []];/*LABEL_100*/ }
    ;

init_declarator_list
    : init_declarator                               { $$ = array($this->semStack[$1]);/*LABEL_101*/ }
    | init_declarator_list ',' init_declarator      { $this->semStack[$1][] = $this->semStack[$3]; $$ = $this->semStack[$1];/*LABEL_102*/ }
    ;

init_declarator
    : declarator '=' initializer                    { $$ = new IR\InitDeclarator($this->semStack[$1], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_103*/ }
    | declarator                                    { $$ = new IR\InitDeclarator($this->semStack[$1], null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_104*/ }
    ; 

storage_class_specifier
    : TYPEDEF               { $$ = Node\Decl::KIND_TYPEDEF;/*LABEL_105*/ } /* identifiers must be flagged as TYPEDEF_NAME */
    | EXTERN                { $$ = Node\Decl::KIND_EXTERN;/*LABEL_106*/ }
    | STATIC                { $$ = Node\Decl::KIND_STATIC;/*LABEL_107*/ }
    | THREAD_LOCAL          { $$ = Node\Decl::KIND_THREAD_LOCAL;/*LABEL_108*/ }
    | AUTO                  { $$ = Node\Decl::KIND_AUTO;/*LABEL_109*/ }
    | REGISTER              { $$ = Node\Decl::KIND_REGISTER;/*LABEL_110*/ }
    ;

type_specifier
    : VOID                          { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_111*/ }
    | CHAR                          { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_112*/ }
    | SHORT                         { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_113*/ }
    | INT                           { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_114*/ }
    | LONG                          { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_115*/ }
    | FLOAT                         { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_116*/ }
    | DOUBLE                        { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_117*/ }
    | SIGNED                        { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_118*/ }
    | UNSIGNED                      { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_119*/ }
    | BOOL                          { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_120*/ }
    | COMPLEX                       { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_121*/ }
    | IMAGINARY                     { $$ = new Node\Type\BuiltinType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_122*/ } /* non-mandated extension */
    | atomic_type_specifier         { $$ = $this->semStack[$1];/*LABEL_123*/ }
    | struct_or_union_specifier     { $$ = new Node\Type\TagType\RecordType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_124*/ }
    | enum_specifier                { $$ = new Node\Type\TagType\EnumType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_125*/ }
    | TYPEDEF_NAME                  { $$ = new Node\Type\TypedefType($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_126*/ } /* after it has been defined as such */
    ;

struct_or_union_specifier
    : struct_or_union '{' struct_declaration_list '}'               { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$1], null, $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_127*/ }
    | struct_or_union IDENTIFIER '{' struct_declaration_list '}'    { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$1], $this->semStack[$2], $this->semStack[$4], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_128*/ }
    | struct_or_union IDENTIFIER                                    { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$1], $this->semStack[$2], null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_129*/ }
    | struct_or_union TYPEDEF_NAME '{' struct_declaration_list '}'  { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$1], $this->semStack[$2], $this->semStack[$4], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_130*/ }
    | struct_or_union TYPEDEF_NAME                                  { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl($this->semStack[$1], $this->semStack[$2], null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_131*/ }
    ;






struct_or_union
    : STRUCT        { $$ = Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl::KIND_STRUCT;/*LABEL_132*/ }
    | UNION         { $$ = Node\Decl\NamedDecl\TypeDecl\TagDecl\RecordDecl::KIND_UNION;/*LABEL_133*/ }
    ;

struct_declaration_list
    : struct_declaration                            { $$ = $this->semStack[$1];/*LABEL_134*/ }
    | struct_declaration_list struct_declaration    { $$ = array_merge($this->semStack[$1], $this->semStack[$2]);/*LABEL_135*/ }
    ;

struct_declaration
    : specifier_qualifier_list ';'                          { $$ = $this->compiler->compileStructField($this->semStack[$1][0], $this->semStack[$1][1], null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_136*/ } /* for anonymous struct/union */
    | specifier_qualifier_list struct_declarator_list ';'   { $$ = $this->compiler->compileStructField($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_137*/ }
    | static_assert_declaration                             
    ;

specifier_qualifier_list                        
    : type_specifier specifier_qualifier_list           { $$ = $this->semStack[$2]; array_unshift($this->semValue[1], $this->semStack[$1]);/*LABEL_138*/ }
    | type_specifier                                    { $$ = [0, [$this->semStack[$1]]];/*LABEL_139*/ }
    | type_qualifier specifier_qualifier_list           { $$ = $this->semStack[$2]; $$[0] |= $this->semStack[$1];/*LABEL_140*/ }
    | type_qualifier                                    { $$ = [$this->semStack[$1], []];/*LABEL_141*/ }
    ;

struct_declarator_list
    : struct_declarator                                 { $$ = array($this->semStack[$1]);/*LABEL_142*/ }
    | struct_declarator_list ',' struct_declarator      { $this->semStack[$1][] = $this->semStack[$3]; $$ = $this->semStack[$1];/*LABEL_143*/ }
    ;

struct_declarator
    : ':' constant_expression               { $$ = new IR\FieldDeclaration(null, $this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_144*/ }
    | declarator ':' constant_expression    { $$ = new IR\FieldDeclaration($this->semStack[$1], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_145*/ }
    | declarator                            { $$ = new IR\FieldDeclaration($this->semStack[$1], null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_146*/ }
    ;

enum_specifier
    : ENUM '{' enumerator_list '}'                  { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl(null, $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_147*/ }
    | ENUM '{' enumerator_list ',' '}'              { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl(null, $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_148*/ }
    | ENUM IDENTIFIER '{' enumerator_list '}'       { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl($this->semStack[$2], $this->semStack[$4], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_149*/ }
    | ENUM IDENTIFIER '{' enumerator_list ',' '}'   { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl($this->semStack[$2], $this->semStack[$4], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_150*/ }
    | ENUM IDENTIFIER                               { $$ = new Node\Decl\NamedDecl\TypeDecl\TagDecl\EnumDecl($this->semStack[$2], null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_151*/ }
    ;

enumerator_list
    : enumerator                        { $$ = array($this->semStack[$1]);/*LABEL_152*/ }
    | enumerator_list ',' enumerator    { $this->semStack[$1][] = $this->semStack[$3]; $$ = $this->semStack[$1];/*LABEL_153*/ }
    ;

enumerator  /* identifiers must be flagged as ENUMERATION_CONSTANT */
    : enumeration_constant '=' constant_expression      { $$ = new Node\Decl\NamedDecl\ValueDecl\EnumConstantDecl($this->semStack[$1], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes); $this->scope->enumdef($this->semStack[$1], $this->semValue);/*LABEL_154*/ }
    | enumeration_constant                              { $$ = new Node\Decl\NamedDecl\ValueDecl\EnumConstantDecl($this->semStack[$1], null, $this->startAttributeStack[$1] + $this->endAttributes); $this->scope->enumdef($this->semStack[$1], $this->semValue);/*LABEL_155*/ }
    ;

atomic_type_specifier
    : ATOMIC '(' type_name ')'          { throw new Error('atomic type_name not implemented');/*LABEL_156*/ }
    ;

type_qualifier
    : CONST         { $$ = Node\Decl::KIND_CONST;/*LABEL_157*/ }
    | RESTRICT      { $$ = Node\Decl::KIND_RESTRICT;/*LABEL_158*/ }
    | VOLATILE      { $$ = Node\Decl::KIND_VOLATILE;/*LABEL_159*/ }
    | ATOMIC        { $$ = Node\Decl::KIND_ATOMIC;/*LABEL_160*/ }
    ;

function_specifier
    : INLINE        { $$ = Node\Decl::KIND_INLINE;/*LABEL_161*/ }
    | NORETURN      { $$ = Node\Decl::KIND_NORETURN;/*LABEL_162*/ }
    ;

alignment_specifier
    : ALIGNAS '(' type_name ')'             { throw new Error('alignas type_name not implemented');/*LABEL_163*/ }
    | ALIGNAS '(' constant_expression ')'   { throw new Error('alignas constant_expression not implemented');/*LABEL_164*/ }
    ;

declarator
    : pointer direct_declarator     { $$ = new IR\Declarator($this->semStack[$1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_165*/ }
    | direct_declarator             { $$ = new IR\Declarator(null, $this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_166*/ }
    ;

direct_declarator
    : IDENTIFIER                                                                    { $$ = new IR\DirectDeclarator\Identifier($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_167*/ }
    | '(' declarator ')'                                                            { $$ = new IR\DirectDeclarator\Declarator($this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_168*/ }
    | direct_declarator '[' ']'                                                     { $$ = new IR\DirectDeclarator\IncompleteArray($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_169*/ }
    | direct_declarator '[' '*' ']'                                                 { $$ = new IR\DirectDeclarator\IncompleteArray($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_170*/ }
    | direct_declarator '[' STATIC type_qualifier_list assignment_expression ']'    { throw new Error('direct_declarator bracket static type_qualifier_list assignment_expression not implemented');/*LABEL_171*/ }
    | direct_declarator '[' STATIC assignment_expression ']'                        { throw new Error('direct_declarator bracket static assignment_expression not implemented');/*LABEL_172*/ }
    | direct_declarator '[' type_qualifier_list '*' ']'                             { throw new Error('direct_declarator bracket type_qualifier_list star not implemented');/*LABEL_173*/ }
    | direct_declarator '[' type_qualifier_list STATIC assignment_expression ']'    { throw new Error('direct_declarator bracket type_qualifier_list static assignment_expression not implemented');/*LABEL_174*/ }
    | direct_declarator '[' type_qualifier_list assignment_expression ']'           { throw new Error('direct_declarator bracket type_qualifier_list assignment_expression not implemented');/*LABEL_175*/ }
    | direct_declarator '[' type_qualifier_list ']'                                 { throw new Error('direct_declarator bracket type_qualifier_list not implemented');/*LABEL_176*/ }
    | direct_declarator '[' assignment_expression ']'                               { $$ = new IR\DirectDeclarator\CompleteArray($this->semStack[$1], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_177*/ }
    | direct_declarator '(' parameter_type_list ')'                                 { $$ = new IR\DirectDeclarator\Function_($this->semStack[$1], $this->semStack[$3][0], $this->semStack[$3][1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_178*/ }
    | direct_declarator '(' ')'                                                     { $$ = new IR\DirectDeclarator\Function_($this->semStack[$1], [], false, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_179*/ }
    | direct_declarator '(' identifier_list ')'                                     { throw new Error('direct_declarator params identifier list not implemented');/*LABEL_180*/ }
    ;

pointer
    : '*' type_qualifier_list pointer       { $$ = new IR\QualifiedPointer($this->semStack[$2], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_181*/ }
    | '*' type_qualifier_list               { $$ = new IR\QualifiedPointer($this->semStack[$2], null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_182*/ }
    | '*' pointer                           { $$ = new IR\QualifiedPointer(0, $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_183*/ }
    | '*'                                   { $$ = new IR\QualifiedPointer(0, null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_184*/ }
    ;

type_qualifier_list
    : type_qualifier                        { $$ = $this->semStack[$1];/*LABEL_185*/ }
    | type_qualifier_list type_qualifier    { $$ = $this->semStack[$1] | $this->semStack[$2];/*LABEL_186*/ }
    ;

parameter_type_list
    : parameter_list ',' ELLIPSIS           { $$ = [$this->semStack[$1], true];/*LABEL_187*/ }
    | parameter_list                        { $$ = [$this->semStack[$1], false];/*LABEL_188*/ }
    ;

parameter_list
    : parameter_declaration                         { $$ = array($this->semStack[$1]);/*LABEL_189*/ }
    | parameter_list ',' parameter_declaration      { $this->semStack[$1][] = $this->semStack[$3]; $$ = $this->semStack[$1];/*LABEL_190*/ }
    ;

parameter_declaration
    : declaration_specifiers declarator             { $$ = $this->compiler->compileParamVarDeclaration($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_191*/ }
    | declaration_specifiers abstract_declarator    { $$ = $this->compiler->compileParamAbstractDeclaration($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_192*/ }
    | declaration_specifiers                        { $$ = $this->compiler->compileParamAbstractDeclaration($this->semStack[$1][0], $this->semStack[$1][1], null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_193*/ }
    ;

identifier_list
    : IDENTIFIER                        { throw new Error('identifier_list identifier not implemented');/*LABEL_194*/ }
    | identifier_list ',' IDENTIFIER    { throw new Error('identifier_list identifier_list identifier not implemented');/*LABEL_195*/ }
    ;

type_name
    : specifier_qualifier_list abstract_declarator  { $$ = $this->compiler->compileTypeReference($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_196*/ }
    | specifier_qualifier_list                      { $$ = $this->compiler->compileTypeReference($this->semStack[$1][0], $this->semStack[$1][1], null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_197*/ }
    ;

abstract_declarator
    : pointer direct_abstract_declarator    { $$ = new IR\AbstractDeclarator($this->semStack[$1], $this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_198*/ }
    | pointer                               { $$ = new IR\AbstractDeclarator($this->semStack[$1], null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_199*/ }
    | direct_abstract_declarator            { $$ = new IR\AbstractDeclarator(null, $this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_200*/ }
    ;

direct_abstract_declarator
    : '(' abstract_declarator ')'                                                           { $$ = new IR\DirectAbstractDeclarator\AbstractDeclarator($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_201*/ }
    | '[' ']'                                                                               { $$ = new IR\DirectAbstractDeclarator\IncompleteArray($this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_202*/ }
    | '[' '*' ']'                                                                           { throw new Error('direct_abstract_declarator bracket star not implemented');/*LABEL_203*/ }
    | '[' STATIC type_qualifier_list assignment_expression ']'                              { throw new Error('direct_abstract_declarator bracket static type qualifier list assignment not implemented');/*LABEL_204*/ }
    | '[' STATIC assignment_expression ']'                                                  { throw new Error('direct_abstract_declarator bracket static assignment not implemented');/*LABEL_205*/ }
    | '[' type_qualifier_list STATIC assignment_expression ']'                              { throw new Error('direct_abstract_declarator bracket type qualifier list static assignment not implemented');/*LABEL_206*/ }
    | '[' type_qualifier_list assignment_expression ']'                                     { throw new Error('direct_abstract_declarator bracket type qualifier list assignment not implemented');/*LABEL_207*/ }
    | '[' type_qualifier_list ']'                                                           { throw new Error('direct_abstract_declarator bracket type qualifier list not implemented');/*LABEL_208*/ }
    | '[' assignment_expression ']'                                                         { throw new Error('direct_abstract_declarator bracket assignment_expr not implemented');/*LABEL_209*/ }
    | direct_abstract_declarator '[' ']'                                                    { throw new Error('direct_abstract_declarator with bracket not implemented');/*LABEL_210*/ }
    | direct_abstract_declarator '[' '*' ']'                                                { throw new Error('direct_abstract_declarator with bracket star not implemented');/*LABEL_211*/ }
    | direct_abstract_declarator '[' STATIC type_qualifier_list assignment_expression ']'   { throw new Error('direct_abstract_declarator with bracket static type qualifier list assignment not implemented');/*LABEL_212*/ }
    | direct_abstract_declarator '[' STATIC assignment_expression ']'                       { throw new Error('direct_abstract_declarator with bracket static assignment not implemented');/*LABEL_213*/ }
    | direct_abstract_declarator '[' type_qualifier_list assignment_expression ']'          { throw new Error('direct_abstract_declarator with bracket type qualifier list assignment not implemented');/*LABEL_214*/ }
    | direct_abstract_declarator '[' type_qualifier_list STATIC assignment_expression ']'   { throw new Error('direct_abstract_declarator with bracket type qualifier list static asssignment not implemented');/*LABEL_215*/ }
    | direct_abstract_declarator '[' type_qualifier_list ']'                                { throw new Error('direct_abstract_declarator with bracket type qualifier list not implemented');/*LABEL_216*/ }
    | direct_abstract_declarator '[' assignment_expression ']'                              { throw new Error('direct_abstract_declarator with bracket assignment_expr not implemented');/*LABEL_217*/ }
    | '(' ')'                                                                               { throw new Error('direct_abstract_declarator empty parameter list not implemented');/*LABEL_218*/ }
    | '(' parameter_type_list ')'                                                           { throw new Error('direct_abstract_declarator parameter list not implemented');/*LABEL_219*/ }
    | direct_abstract_declarator '(' ')'                                                    { throw new Error('direct_abstract_declarator with empty parameter list not implemented');/*LABEL_220*/ }
    | direct_abstract_declarator '(' parameter_type_list ')'                                { throw new Error('direct_abstract_declarator with parameter list not implemented');/*LABEL_221*/ }
    ;

initializer
    : '{' initializer_list '}'      { throw new Error('initializer brackend no trailing not implemented');/*LABEL_222*/ }
    | '{' initializer_list ',' '}'  { throw new Error('initializer brackeded trailing not implemented');/*LABEL_223*/ }
    | assignment_expression         { throw new Error('initializer assignment_expression not implemented');/*LABEL_224*/ }
    ;

initializer_list
    : designation initializer                           { throw new Error('initializer_list designator initializer not implemented');/*LABEL_225*/ }
    | initializer                                       { throw new Error('initializer_list initializer not implemented');/*LABEL_226*/ }
    | initializer_list ',' designation initializer      { throw new Error('initializer_list initializer_list designator initializer not implemented');/*LABEL_227*/ }
    | initializer_list ',' initializer                  { throw new Error('initializer_list initializer_list initializer not implemented');/*LABEL_228*/ }
    ;

designation
    : designator_list '='       
    ;

designator_list
    : designator                    { $$ = array($this->semStack[$1]);/*LABEL_229*/ }
    | designator_list designator    { $this->semStack[$1][] = $this->semStack[$2]; $this->semValue = $this->semStack[$1];/*LABEL_230*/ }
    ;

designator
    : '[' constant_expression ']'   { throw new Error('[] designator not implemented');/*LABEL_231*/ }
    | '.' IDENTIFIER                { throw new Error('. designator not implemented');/*LABEL_232*/ }
    ;

static_assert_declaration
    : STATIC_ASSERT '(' constant_expression ',' STRING_LITERAL ')' ';'      { throw new Error('static assert declaration not implemented');/*LABEL_233*/ }
    ;

statement
    : labeled_statement     { $$ = $this->semStack[$1];/*LABEL_234*/ }
    | compound_statement    { $$ = $this->semStack[$1];/*LABEL_235*/ }
    | expression_statement  { $$ = $this->semStack[$1];/*LABEL_236*/ }
    | selection_statement   { $$ = $this->semStack[$1];/*LABEL_237*/ }
    | iteration_statement   { $$ = $this->semStack[$1];/*LABEL_238*/ }
    | jump_statement        { $$ = $this->semStack[$1];/*LABEL_239*/ }
    ;

labeled_statement
    : IDENTIFIER ':' statement                  { throw new Error('labeled_statement identifier not implemented');/*LABEL_240*/ }
    | CASE constant_expression ':' statement    { throw new Error('labeled_statement case not implemented');/*LABEL_241*/ }
    | DEFAULT ':' statement                     { throw new Error('labeled_statement default not implemented');/*LABEL_242*/ }
    ;

compound_statement
    : '{' '}'                   { $$ = new Node\Stmt\CompoundStmt([], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_243*/ }
    | '{'  block_item_list '}'  { $$ = new Node\Stmt\CompoundStmt($this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_244*/ }
    ;

block_item_list
    : block_item                    { $$ = array($this->semStack[$1]);/*LABEL_245*/ }
    | block_item_list block_item    { $this->semStack[$1][] = $this->semStack[$2]; $this->semValue = $this->semStack[$1];/*LABEL_246*/ }
    ;

block_item
    : declaration           { throw new Error('block_item declaration not implemented');/*LABEL_247*/ }
    | statement             { $$ = $this->semStack[$1];/*LABEL_248*/ }
    ;

expression_statement
    : ';'                   { $$ = null;/*LABEL_249*/ }
    | expression ';'        { $$ = $this->semStack[$1];/*LABEL_250*/ }
    ;

selection_statement
    : IF '(' expression ')' statement ELSE statement    { throw new Error('if else not implemented');/*LABEL_251*/ }
    | IF '(' expression ')' statement                   { throw new Error('if not implemented');/*LABEL_252*/ }
    | SWITCH '(' expression ')' statement               { throw new Error('switch not implemented');/*LABEL_253*/ }
    ;

iteration_statement
    : WHILE '(' expression ')' statement                                            { throw new Error('iteration 0 not implemented');/*LABEL_254*/ }
    | DO statement WHILE '(' expression ')' ';'                                     { throw new Error('iteration 1 not implemented');/*LABEL_255*/ }
    | FOR '(' expression_statement expression_statement ')' statement               { throw new Error('iteration 2 not implemented');/*LABEL_256*/ }
    | FOR '(' expression_statement expression_statement expression ')' statement    { throw new Error('iteration 3 not implemented');/*LABEL_257*/ }
    | FOR '(' declaration expression_statement ')' statement                        { throw new Error('iteration 4 not implemented');/*LABEL_258*/ }
    | FOR '(' declaration expression_statement expression ')' statement             { throw new Error('iteration 5 not implemented');/*LABEL_259*/ }
    ;

jump_statement
    : GOTO IDENTIFIER ';'       { throw new Error('goto identifier not implemented');/*LABEL_260*/ }
    | CONTINUE ';'              { throw new Error('continue not implemented');/*LABEL_261*/ }
    | BREAK ';'                 { throw new Error('break not implemented');/*LABEL_262*/ }
    | RETURN ';'                { $$ = new Node\Stmt\ReturnStmt(null, $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_263*/ }
    | RETURN expression ';'     { $$ = new Node\Stmt\ReturnStmt($this->semStack[$2], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_264*/ }
    ;

translation_unit
    : external_declaration                      { $$ = new Node\TranslationUnitDecl($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_265*/ }
    | translation_unit external_declaration     { $$ = $this->semStack[$1]; $this->semValue->addDecl(...$this->semStack[$2]);/*LABEL_266*/ }
    ;

external_declaration
    : function_definition   { $$ = $this->semStack[$1];/*LABEL_267*/ }
    | declaration           { $$ = $this->compiler->compileExternalDeclaration($this->semStack[$1], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_268*/ }
    ;

function_definition
    : declaration_specifiers declarator declaration_list compound_statement     { $$ = $this->compiler->compileFunction($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], $this->semStack[$3], $this->semStack[$4], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_269*/ }
    | declaration_specifiers declarator compound_statement                      { $$ = $this->compiler->compileFunction($this->semStack[$1][0], $this->semStack[$1][1], $this->semStack[$2], [], $this->semStack[$3], $this->startAttributeStack[$1] + $this->endAttributes);/*LABEL_270*/ }
    ;

declaration_list
    : declaration                   { $$ = array($this->semStack[$1]);/*LABEL_271*/ }
    | declaration_list declaration  { $this->semStack[$1][] = $this->semStack[$2]; $this->semValue = $this->semStack[$1];/*LABEL_272*/ }
    ;

%%