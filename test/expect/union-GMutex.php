<?php

return array(
    'typedefs'=>[],
    'enums'=>[],
    'structs' => [],
    'unions'=>array(
        '_GMutex'=>array(
            'name' => '_GMutex',
            'type' => 'union',
            'members' => Array
            (
                'p' => array(
                    'name' => 'p',
                    'type' => 'gpointer'
                ),
                'i' => array(
                    'name' => 'i',
                    'type' => 'array',
                    'value' => array(
                        'type'=>'guint',
                    ),
                    'size'=>'2' // TODO compute the intval() @see Printer::printExpr()
                ),
            )
        )
    ),
    'user_function'=>[],
    'macros'=>[],
);
