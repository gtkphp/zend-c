<?php


return array(
    'typedefs'=>array(
        'GLogLevelFlags' => array(
            'name' => '#GLogLevelFlags',
            'type' => 'enum',
        )
    ),
    'enums'=>array(
        '#GLogLevelFlags' => array(
            'name' => '',
            'type' => 'enum',
            'constants' => Array
            (
                'G_LOG_FLAG_RECURSION' => array(
                    'name' => 'G_LOG_FLAG_RECURSION',
                    'expression' => '(1 << 0)',
                    'value' => 1,
                ),
                'G_LOG_FLAG_FATAL' => array(
                    'name' => 'G_LOG_FLAG_FATAL',
                    'expression' => '(1 << 1)',
                    'value' => 2,
                ),
                'G_LOG_LEVEL_ERROR' => array(
                    'name' => 'G_LOG_LEVEL_ERROR',
                    'expression' => '(1 << 2)',
                    'value' => 4,
                ),
                'G_LOG_LEVEL_CRITICAL' => array(
                    'name' => 'G_LOG_LEVEL_CRITICAL',
                    'expression' => '(1 << 3)',
                    'value' => 8,
                ),
                'G_LOG_LEVEL_WARNING' => array(
                    'name' => 'G_LOG_LEVEL_WARNING',
                    'expression' => '(1 << 4)',
                    'value' => 16,
                ),
                'G_LOG_LEVEL_MESSAGE' => array(
                    'name' => 'G_LOG_LEVEL_MESSAGE',
                    'expression' => '(1 << 5)',
                    'value' => 32,
                ),
                'G_LOG_LEVEL_INFO' => array(
                    'name' => 'G_LOG_LEVEL_INFO',
                    'expression' => '(1 << 6)',
                    'value' => 64,
                ),
                'G_LOG_LEVEL_DEBUG' => array(
                    'name' => 'G_LOG_LEVEL_DEBUG',
                    'expression' => '(1 << 7)',
                    'value' => 128,
                ),
                'G_LOG_LEVEL_MASK' => array(
                    'name' => 'G_LOG_LEVEL_MASK',
                    'expression' => '(~ (G_LOG_FLAG_RECURSION | G_LOG_FLAG_FATAL))',
                    'value' => -4,// ~3
                ),
            )
        )
    ),
    'structs'=>[],
    'unions'=>[],
    'user_function'=>[],
    'macros'=>[],
);
