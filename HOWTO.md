#Create grammar
see BNF syntaxe and edit `<data-path>/grammar.y`

#Generate Lexer
./vendor/bin/phpyacc -t -x -v -m `<data-path>/tokens.phtml` `<path>/grammar.y`

`<data-path>/grammar.` is override

#Generate Parser
./vendor/bin/phpyacc -t -x -v -m `<data-path>/parser.phtml` `<path>/grammar.y`

`<data-path>/grammar.` is override

./vendor/bin/phpyacc -t -x -v -m /home/dev/Projects/phpgtk/zend-c/data/parser.phtml /home/dev/Projects/phpgtk/zend-c/data/grammar.y




```
enum GIOFlags
G_IO_FLAG_IS_WRITABLE = 1 << 3,
G_IO_FLAG_IS_WRITEABLE = 1 << 3,      /* Misspelling in 2.29.10 and earlier */
```
