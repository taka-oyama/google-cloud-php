<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/cvss.proto

namespace Grafeas\V1\CVSS;

use UnexpectedValueException;

/**
 * Protobuf type <code>grafeas.v1.CVSS.AttackVector</code>
 */
class AttackVector
{
    /**
     * Generated from protobuf enum <code>ATTACK_VECTOR_UNSPECIFIED = 0;</code>
     */
    const ATTACK_VECTOR_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>ATTACK_VECTOR_NETWORK = 1;</code>
     */
    const ATTACK_VECTOR_NETWORK = 1;
    /**
     * Generated from protobuf enum <code>ATTACK_VECTOR_ADJACENT = 2;</code>
     */
    const ATTACK_VECTOR_ADJACENT = 2;
    /**
     * Generated from protobuf enum <code>ATTACK_VECTOR_LOCAL = 3;</code>
     */
    const ATTACK_VECTOR_LOCAL = 3;
    /**
     * Generated from protobuf enum <code>ATTACK_VECTOR_PHYSICAL = 4;</code>
     */
    const ATTACK_VECTOR_PHYSICAL = 4;

    private static $valueToName = [
        self::ATTACK_VECTOR_UNSPECIFIED => 'ATTACK_VECTOR_UNSPECIFIED',
        self::ATTACK_VECTOR_NETWORK => 'ATTACK_VECTOR_NETWORK',
        self::ATTACK_VECTOR_ADJACENT => 'ATTACK_VECTOR_ADJACENT',
        self::ATTACK_VECTOR_LOCAL => 'ATTACK_VECTOR_LOCAL',
        self::ATTACK_VECTOR_PHYSICAL => 'ATTACK_VECTOR_PHYSICAL',
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
class_alias(AttackVector::class, \Grafeas\V1\CVSS_AttackVector::class);

