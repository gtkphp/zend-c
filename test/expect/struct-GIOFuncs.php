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
                                'modifier' => '*'
                            ),
                            'buf' => array(
                                'name' => 'buf',
                                'type' => 'gchar',
                                'modifier' => '*'
                            ),
                            'count' => array(
                                'name' => 'count',
                                'type' => 'gsize'
                            ),
                            'bytes_read' => array(
                                'name' => 'bytes_read',
                                'type' => 'gsize',
                                'modifier' => '*'
                            ),
                            'err' => array(
                                'name' => 'err',
                                'type' => 'GError',
                                'modifier' => '**'
                            ),
                        ),
                    ),
                    'modifier' => '*'
                ),
            )
        )
    )
);

