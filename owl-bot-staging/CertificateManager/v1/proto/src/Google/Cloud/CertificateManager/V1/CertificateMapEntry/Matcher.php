<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1\CertificateMapEntry;

use UnexpectedValueException;

/**
 * Defines predefined cases other than SNI-hostname match when this
 * configuration should be applied.
 *
 * Protobuf type <code>google.cloud.certificatemanager.v1.CertificateMapEntry.Matcher</code>
 */
class Matcher
{
    /**
     * A matcher has't been recognized.
     *
     * Generated from protobuf enum <code>MATCHER_UNSPECIFIED = 0;</code>
     */
    const MATCHER_UNSPECIFIED = 0;
    /**
     * A primary certificate that is served when SNI wasn't specified in the
     * request or SNI couldn't be found in the map.
     *
     * Generated from protobuf enum <code>PRIMARY = 1;</code>
     */
    const PRIMARY = 1;

    private static $valueToName = [
        self::MATCHER_UNSPECIFIED => 'MATCHER_UNSPECIFIED',
        self::PRIMARY => 'PRIMARY',
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
class_alias(Matcher::class, \Google\Cloud\CertificateManager\V1\CertificateMapEntry_Matcher::class);

