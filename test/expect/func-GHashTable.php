<?php

return array(
    'typedefs' => [],
    'enums' => [],
    'structs' => [],
    'unions' => [],
    'user_function' => [],
    'macros' => [],
    'functions' => Array(
        'g_hash_table_new' => Array(
            'name' => 'g_hash_table_new',
            'type' => 'function',
            'signature' => Array(
                'return' => Array(
                    'type' => 'GHashTable',
                    'pass' => '*',
                ),
                'parameters' => Array(
                    'hash_func' => Array(
                        'name' => 'hash_func',
                        'type' => 'GHashFunc',
                    ),
                    'key_equal_func' => Array(
                        'name' => 'key_equal_func',
                        'type' => 'GEqualFunc',
                    )
                ),
            )
        )
    )
);
