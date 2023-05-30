<?php

return array(
    'typedefs'=>[],
    'enums'=>[],
    'structs' => array(
        '_GDate' => array(
            'name' => '_GDate',
            'type' => 'struct',
            'members' => array
            (
                'julian_days' => array(
                    'name' => 'julian_days',
                    'type' => 'guint',
                    'size' => '32'
                ),
                'julian' => array(
                    'name' => 'julian',
                    'type' => 'guint',
                    'size' => '1'
                ),
                'dmy' => array(
                    'name' => 'dmy',
                    'type' => 'guint',
                    'size' => '1'
                ),
                'day' => array(
                    'name' => 'day',
                    'type' => 'guint',
                    'size' => '6'
                ),
                'month' => array(
                    'name' => 'month',
                    'type' => 'guint',
                    'size' => '4'
                ),
                'year' => array(
                    'name' => 'year',
                    'type' => 'guint',
                    'size' => '16'
                ),
            )
        )
    ),
    'unions'=>[],
    'user_function'=>[],
    'macros'=>[],
);
