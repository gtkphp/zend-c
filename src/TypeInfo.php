<?php

/**
 * const       unsigned short *          int
 * <qualifier> <modifier>     <operater> <data>
 * 
 * modifing adressing with operator pass-by-reference/pass-by-value
 */
class TypeInfo
{
    // Modifier types
    // Qualificateurs de type
    const MODIFIER_DEFAULT  = 0;
    const MODIFIER_CONST    = 1;
    const MODIFIER_VOLATILE = 2;
    const MODIFIER_RESTRICT = 3;

    // Modifier
    const NONE     = 0;
    const SIGNED   = 1;
    const UNSIGNED = 2;
    const LONG     = 4;
    const SHORT    = 8;

    // Operator types
    const OPERATOR_DEFAULT = '';
    const OPERATOR_REF     = '*';// Indirection Operator: *
    const OPERATOR_DEREF   = '&';// Address-of operator: &

    // Primitive data types
    const DATA_VOID   = 0;
    const DATA_CHAR   = 1;
    const DATA_INT    = 2;
    const DATA_LONG   = 3;
    const DATA_FLOAT  = 4;
    const DATA_DOUBLE = 5;
    const DATA_STRUCT = 6;
    const DATA_ENUM   = 7;
    const DATA_UNION  = 8;

    //public $literal       = '';
    //public $name          = '';
    //public $alias         = [];

    public $data          = self::DATA_VOID;
    public $modifier      = self::NONE;
    public $type_modifier = self::MODIFIER_DEFAULT;
    public $qualifier     = self::OPERATOR_DEFAULT;
    public $array         = '';

    function toString()
    {
        static $types  = [
            self::NONE     => '',
            self::SIGNED   => 'signed',
            self::UNSIGNED => 'unsigned',
            self::SHORT    => 'short',
        ];
        static $datas  = [
            self::DATA_VOID   => 'void',
            self::DATA_CHAR   => 'char',
            self::DATA_INT    => 'int',
            self::DATA_LONG   => 'long',
            self::DATA_FLOAT  => 'float',
            self::DATA_DOUBLE => 'double',
            self::DATA_STRUCT => 'struct',
            self::DATA_ENUM   => 'enum',
            self::DATA_UNION  => 'union',
        ];

        static $modifiers  = [
            self::MODIFIER_DEFAULT  => '',
            self::MODIFIER_CONST    => 'const',
            self::MODIFIER_VOLATILE => 'volatile',
            self::MODIFIER_RESTRICT => 'restrict',
        ];
    
        // const unsigned *int[3][3];
        return $modifiers[$this->type_modifier]
            .  ' '
            .  $types[$this->modifier]
            .  ' '
            .  $this->qualifier
            .  $datas[$this->data]
            .  $this->array;
    }
}
