<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation_metadata.proto

namespace Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\Visualization;

use UnexpectedValueException;

/**
 * Type of the image visualization. Only applicable to
 * [Integrated Gradients attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution].
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization.Type</code>
 */
class Type
{
    /**
     * Should not be used.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Shows which pixel contributed to the image prediction.
     *
     * Generated from protobuf enum <code>PIXELS = 1;</code>
     */
    const PIXELS = 1;
    /**
     * Shows which region contributed to the image prediction by outlining
     * the region.
     *
     * Generated from protobuf enum <code>OUTLINES = 2;</code>
     */
    const OUTLINES = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::PIXELS => 'PIXELS',
        self::OUTLINES => 'OUTLINES',
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
class_alias(Type::class, \Google\Cloud\AIPlatform\V1\ExplanationMetadata_InputMetadata_Visualization_Type::class);

