%start  list

%token  DIGIT  LETTER

%left  '|'
%left  '&'
%left  '+'  '-'
%left  '*'  '/'  '%'
%left  UMINUS      /*  supplies  precedence  for  unary  minus  */

%%      /*  beginning  of  rules  section  */

list :    /*  empty  */
     |    list  stat  '\n'
     |    list  error  '\n'
               {    throw new Error('Unexpected');  }
     ;

stat :    expr
               {    echo '$1='.($1) . "\n";  }
     |    LETTER  '='  expr
               {    echo '($1)' . ($1) .' = '. '($3)' . ($3) . PHP_EOL;  }
     ;


expr :    '('  expr  ')'
               {    $$  =  $2;  }
     |    expr  '+'  expr
               {    $$  =  $1  +  $3;  }
     |    expr  '-'  expr
               {    $$  =  $1  -  $3;  }
     |    expr  '*'  expr
               {    $$  =  $1  *  $3;  }
     |    expr  '/'  expr
               {    $$  =  $1  /  $3;  }
     |    expr  '%'  expr
               {    $$  =  $1  %  $3;  }
     |    expr  '&'  expr
               {    $$  =  $1  &  $3;  }
     |    expr  '|'  expr
               {    $$  =  $1  |  $3;  }
     |    '-'  expr        %prec  UMINUS
               {    $$  =  -  $2;  }
     |    LETTER
               {    /*$$  =  regs[$1];*/  }
     |    number
     ;

number    :    DIGIT
               {    $$ = $1; }
     |    number  DIGIT
               {    $$  =  $1  +  $2;  }
     ;
