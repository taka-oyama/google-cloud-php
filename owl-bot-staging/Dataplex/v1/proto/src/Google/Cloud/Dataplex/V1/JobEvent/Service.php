<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/logs.proto

namespace Google\Cloud\Dataplex\V1\JobEvent;

use UnexpectedValueException;

/**
 * The service used to execute the job.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.JobEvent.Service</code>
 */
class Service
{
    /**
     * Unspecified service.
     *
     * Generated from protobuf enum <code>SERVICE_UNSPECIFIED = 0;</code>
     */
    const SERVICE_UNSPECIFIED = 0;
    /**
     * Cloud Dataproc.
     *
     * Generated from protobuf enum <code>DATAPROC = 1;</code>
     */
    const DATAPROC = 1;

    private static $valueToName = [
        self::SERVICE_UNSPECIFIED => 'SERVICE_UNSPECIFIED',
        self::DATAPROC => 'DATAPROC',
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
class_alias(Service::class, \Google\Cloud\Dataplex\V1\JobEvent_Service::class);

