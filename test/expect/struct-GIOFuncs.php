<?php


/* $printer->array['structs'] = */
return array(
    'structs' => array(
        '_GIOFuncs' => array(
            'name' => '_GIOFuncs',
            'type' => 'struct',
            'members' => array
            (
                'io_read' => array(
                    'name' => 'io_read',
                    'type' => 'function',
                    'signature' => array(
                        'return' => array(
                            'type' => 'GIOStatus',
                        ),
                        'parameters' => array(
                            'channel' => array(
                                'name' => 'channel',
                                'type' => 'GIOChannel',
                                'pass' => '*'
                            ),
                            'buf' => array(
                                'name' => 'buf',
                                'type' => 'gchar',
                                'pass' => '*'
                            ),
                            'count' => array(
                                'name' => 'count',
                                'type' => 'gsize'
                            ),
                            'bytes_read' => array(
                                'name' => 'bytes_read',
                                'type' => 'gsize',
                                'pass' => '*'
                            ),
                            'err' => array(
                                'name' => 'err',
                                'type' => 'GError',
                                'pass' => '**'
                            ),
                        ),
                    ),
                    'pass' => '*'
                ),
            )
        )
    )
);

