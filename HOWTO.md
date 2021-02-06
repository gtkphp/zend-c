#Create grammar
see BNF syntaxe and edit `<data-path>/grammar.y`

#Generate Lexer
./vendor/bin/phpyacc -t -x -v -m `<data-path>/tokens.phtml` `<path>/grammar.y`
`<data-path>/grammar.` is override

#Generate Parser
./vendor/bin/phpyacc -t -x -v -m `<data-path>/parser.phtml` `<path>/grammar.y`
`<data-path>/grammar.` is override
