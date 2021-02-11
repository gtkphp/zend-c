<?php

return array(
    'typedefs'=>array(),
    'enums'=>array(
        'GBookmarkFileError'=>array(
            'name' => 'GBookmarkFileError',
            'constants' => Array
            (
                'G_BOOKMARK_FILE_ERROR_INVALID_URI' => array(
                    'name' => 'G_BOOKMARK_FILE_ERROR_INVALID_URI',
                    'expression' => Null,
                    'value' => 0
                ),
                'G_BOOKMARK_FILE_ERROR_INVALID_VALUE' => array(
                    'name' => 'G_BOOKMARK_FILE_ERROR_INVALID_VALUE',
                    'expression' => Null,
                    'value' => 1
                ),
                'G_BOOKMARK_FILE_ERROR_APP_NOT_REGISTERED' => array(
                    'name' => 'G_BOOKMARK_FILE_ERROR_APP_NOT_REGISTERED',
                    'expression' => Null,
                    'value' => 2
                ),
                'G_BOOKMARK_FILE_ERROR_URI_NOT_FOUND' => array(
                    'name' => 'G_BOOKMARK_FILE_ERROR_URI_NOT_FOUND',
                    'expression' => Null,
                    'value' => 3
                ),
                'G_BOOKMARK_FILE_ERROR_READ' => array(
                    'name' => 'G_BOOKMARK_FILE_ERROR_READ',
                    'expression' => Null,
                    'value' => 4
                ),
                'G_BOOKMARK_FILE_ERROR_UNKNOWN_ENCODING' => array(
                    'name' => 'G_BOOKMARK_FILE_ERROR_UNKNOWN_ENCODING',
                    'expression' => Null,
                    'value' => 5
                ),
                'G_BOOKMARK_FILE_ERROR_WRITE' => array(
                    'name' => 'G_BOOKMARK_FILE_ERROR_WRITE',
                    'expression' => Null,
                    'value' => 6
                ),
                'G_BOOKMARK_FILE_ERROR_FILE_NOT_FOUND' => array(
                    'name' => 'G_BOOKMARK_FILE_ERROR_FILE_NOT_FOUND',
                    'expression' => Null,
                    'value' => 7
                ),
            )
        ),
        'GDateDMY'=>array(
            'name'=>'GDateDMY',
            'constants'=>array(
                'G_DATE_DAY'=>array(
                    'name' => 'G_DATE_DAY',
                    'expression' => '0',
                    'value' => 0
                ),
                'G_DATE_MONTH'=>array(
                    'name' => 'G_DATE_MONTH',
                    'expression' => '1',
                    'value' => 1
                ),
                'G_DATE_YEAR'=>array(
                    'name' => 'G_DATE_YEAR',
                    'expression' => '2',
                    'value' => 2
                ),
            )
        ),
        'GFileTest'=>array(
            'name'=>'GFileTest',
            'constants'=>array(
                'G_FILE_TEST_IS_REGULAR'=>array(
                    'name' => 'G_FILE_TEST_IS_REGULAR',
                    'expression' => '(1 << 0)',
                    'value' => 1
                ),
                'G_FILE_TEST_IS_SYMLINK'=>array(
                    'name' => 'G_FILE_TEST_IS_SYMLINK',
                    'expression' => '(1 << 1)',
                    'value' => 2
                ),
                'G_FILE_TEST_IS_DIR'=>array(
                    'name' => 'G_FILE_TEST_IS_DIR',
                    'expression' => '(1 << 2)',
                    'value' => 4
                ),
                'G_FILE_TEST_IS_EXECUTABLE'=>array(
                    'name' => 'G_FILE_TEST_IS_EXECUTABLE',
                    'expression' => '(1 << 3)',
                    'value' => 8
                ),
                'G_FILE_TEST_EXISTS'=>array(
                    'name' => 'G_FILE_TEST_EXISTS',
                    'expression' => '(1 << 4)',
                    'value' => 16
                ),
            )
        ),
        'GIOChannelError'=>array(
            'name'=>'GIOChannelError',
            'constants'=>array(
                'G_IO_CHANNEL_ERROR_FBIG'=>array(
                    'name' => 'G_IO_CHANNEL_ERROR_FBIG',
                    'expression' => Null,
                    'value' => 0
                ),
                'G_IO_CHANNEL_ERROR_INVAL'=>array(
                    'name' => 'G_IO_CHANNEL_ERROR_INVAL',
                    'expression' => Null,
                    'value' => 1
                ),
                'G_IO_CHANNEL_ERROR_IO'=>array(
                    'name' => 'G_IO_CHANNEL_ERROR_IO',
                    'expression' => Null,
                    'value' => 2
                ),
                'G_IO_CHANNEL_ERROR_ISDIR'=>array(
                    'name' => 'G_IO_CHANNEL_ERROR_ISDIR',
                    'expression' => Null,
                    'value' => 3
                ),
                'G_IO_CHANNEL_ERROR_NOSPC'=>array(
                    'name' => 'G_IO_CHANNEL_ERROR_NOSPC',
                    'expression' => Null,
                    'value' => 4
                ),
                'G_IO_CHANNEL_ERROR_NXIO'=>array(
                    'name' => 'G_IO_CHANNEL_ERROR_NXIO',
                    'expression' => Null,
                    'value' => 5
                ),
                'G_IO_CHANNEL_ERROR_OVERFLOW'=>array(
                    'name' => 'G_IO_CHANNEL_ERROR_OVERFLOW',
                    'expression' => Null,
                    'value' => 6
                ),
                'G_IO_CHANNEL_ERROR_PIPE'=>array(
                    'name' => 'G_IO_CHANNEL_ERROR_PIPE',
                    'expression' => Null,
                    'value' => 7
                ),
                'G_IO_CHANNEL_ERROR_FAILED'=>array(
                    'name' => 'G_IO_CHANNEL_ERROR_FAILED',
                    'expression' => Null,
                    'value' => 8
                ),
            )
        ),
        'GIOFlags'=>array(
            'name'=>'GIOFlags',
            'constants'=>array(
                'G_IO_FLAG_APPEND'=>array(
                    'name' => 'G_IO_FLAG_APPEND',
                    'expression' => '(1 << 0)',
                    'value' => 1
                ),
                'G_IO_FLAG_NONBLOCK'=>array(
                    'name' => 'G_IO_FLAG_NONBLOCK',
                    'expression' => '(1 << 1)',
                    'value' => 2
                ),
                'G_IO_FLAG_IS_READABLE'=>array(
                    'name' => 'G_IO_FLAG_IS_READABLE',
                    'expression' => '(1 << 2)',
                    'value' => 4
                ),
                'G_IO_FLAG_IS_WRITABLE'=>array(
                    'name' => 'G_IO_FLAG_IS_WRITABLE',
                    'expression' => '(1 << 3)',
                    'value' => 8
                ),
                'G_IO_FLAG_IS_WRITEABLE'=>array(
                    'name' => 'G_IO_FLAG_IS_WRITEABLE',
                    'expression' => '(1 << 3)',
                    'value' => 8
                ),
                'G_IO_FLAG_IS_SEEKABLE'=>array(
                    'name' => 'G_IO_FLAG_IS_SEEKABLE',
                    'expression' => '(1 << 4)',
                    'value' => 16
                ),
                'G_IO_FLAG_MASK'=>array(
                    'name' => 'G_IO_FLAG_MASK',
                    'expression' => '((1 << 5) - 1)',
                    'value' => 31
                ),
                'G_IO_FLAG_GET_MASK'=>array(
                    'name' => 'G_IO_FLAG_GET_MASK',
                    'expression' => 'G_IO_FLAG_MASK',
                    'value' => 31
                ),
                'G_IO_FLAG_SET_MASK'=>array(
                    'name' => 'G_IO_FLAG_SET_MASK',
                    'expression' => '(G_IO_FLAG_APPEND | G_IO_FLAG_NONBLOCK)',
                    'value' => 3
                ),
            )
        ),
    ),
    'structs'=>array()
);
