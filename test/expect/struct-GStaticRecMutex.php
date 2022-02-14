<?php
/* $printer->array['structs'] = */
return array(
    'typedefs'=>[],
    'enums'=>[],
    'structs'=>array(
        '_GStaticRecMutex'=>array(
            'name' => '_GStaticRecMutex',
            'type' => 'struct',
            'members' => Array
            (
                'mutex' => array(
                    'name' => 'mutex',
                    'type' => 'GStaticMutex'
                ),
                'depth' => array(
                    'name' => 'depth',
                    'type' => 'guint',
                ),
                'unused' => array(
                    'name' => '',
                    'type' => 'union',
                    'members' => array(
                        'owner' => array(
                            'name' => 'owner',
                            'type' => 'pthread_t',
                        ),
                        'dummy' => array(
                            'name' => 'dummy',
                            'type' => 'gdouble',
                        ),
                    ),
                )
            )
        )
    ),
    'unions'=>[],
);
