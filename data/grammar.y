
multiplicative_expression
    : cast_expression                                   { $$ = $1; }
    | multiplicative_expression '*' cast_expression     { $$ = Expr\BinaryOperator[$1, $3, Expr\BinaryOperator::KIND_MUL]; }
    | multiplicative_expression '/' cast_expression     { $$ = Expr\BinaryOperator[$1, $3, Expr\BinaryOperator::KIND_DIV]; }
    | multiplicative_expression '%' cast_expression     { $$ = Expr\BinaryOperator[$1, $3, Expr\BinaryOperator::KIND_REM]; }
    ;

additive_expression
    : multiplicative_expression                             { $$ = $1; }
    | additive_expression '+' multiplicative_expression     { $$ = Expr\BinaryOperator[$1, $3, Expr\BinaryOperator::KIND_ADD]; }
    | additive_expression '-' multiplicative_expression     { $$ = Expr\BinaryOperator[$1, $3, Expr\BinaryOperator::KIND_SUB]; }
    ;
