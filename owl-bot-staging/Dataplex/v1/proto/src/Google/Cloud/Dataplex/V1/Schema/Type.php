<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1\Schema;

use UnexpectedValueException;

/**
 * Type information for fields in schemas and partition schemas.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.Schema.Type</code>
 */
class Type
{
    /**
     * SchemaType unspecified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Boolean field.
     *
     * Generated from protobuf enum <code>BOOLEAN = 1;</code>
     */
    const BOOLEAN = 1;
    /**
     * Single byte numeric field.
     *
     * Generated from protobuf enum <code>BYTE = 2;</code>
     */
    const BYTE = 2;
    /**
     * 16-bit numeric field.
     *
     * Generated from protobuf enum <code>INT16 = 3;</code>
     */
    const INT16 = 3;
    /**
     * 32-bit numeric field.
     *
     * Generated from protobuf enum <code>INT32 = 4;</code>
     */
    const INT32 = 4;
    /**
     * 64-bit numeric field.
     *
     * Generated from protobuf enum <code>INT64 = 5;</code>
     */
    const INT64 = 5;
    /**
     * Floating point numeric field.
     *
     * Generated from protobuf enum <code>FLOAT = 6;</code>
     */
    const FLOAT = 6;
    /**
     * Double precision numeric field.
     *
     * Generated from protobuf enum <code>DOUBLE = 7;</code>
     */
    const DOUBLE = 7;
    /**
     * Real value numeric field.
     *
     * Generated from protobuf enum <code>DECIMAL = 8;</code>
     */
    const DECIMAL = 8;
    /**
     * Sequence of characters field.
     *
     * Generated from protobuf enum <code>STRING = 9;</code>
     */
    const STRING = 9;
    /**
     * Sequence of bytes field.
     *
     * Generated from protobuf enum <code>BINARY = 10;</code>
     */
    const BINARY = 10;
    /**
     * Date and time field.
     *
     * Generated from protobuf enum <code>TIMESTAMP = 11;</code>
     */
    const TIMESTAMP = 11;
    /**
     * Date field.
     *
     * Generated from protobuf enum <code>DATE = 12;</code>
     */
    const DATE = 12;
    /**
     * Time field.
     *
     * Generated from protobuf enum <code>TIME = 13;</code>
     */
    const TIME = 13;
    /**
     * Structured field. Nested fields that define the structure of the map.
     * If all nested fields are nullable, this field represents a union.
     *
     * Generated from protobuf enum <code>RECORD = 14;</code>
     */
    const RECORD = 14;
    /**
     * Null field that does not have values.
     *
     * Generated from protobuf enum <code>NULL = 100;</code>
     */
    const NULL = 100;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::BOOLEAN => 'BOOLEAN',
        self::BYTE => 'BYTE',
        self::INT16 => 'INT16',
        self::INT32 => 'INT32',
        self::INT64 => 'INT64',
        self::FLOAT => 'FLOAT',
        self::DOUBLE => 'DOUBLE',
        self::DECIMAL => 'DECIMAL',
        self::STRING => 'STRING',
        self::BINARY => 'BINARY',
        self::TIMESTAMP => 'TIMESTAMP',
        self::DATE => 'DATE',
        self::TIME => 'TIME',
        self::RECORD => 'RECORD',
        self::NULL => 'NULL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Google\Cloud\Dataplex\V1\Schema_Type::class);

