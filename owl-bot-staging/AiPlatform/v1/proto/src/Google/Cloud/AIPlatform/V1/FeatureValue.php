<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_online_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Value for a feature.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeatureValue</code>
 */
class FeatureValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Metadata of feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureValue.Metadata metadata = 14;</code>
     */
    protected $metadata = null;
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $bool_value
     *           Bool type feature value.
     *     @type float $double_value
     *           Double type feature value.
     *     @type int|string $int64_value
     *           Int64 feature value.
     *     @type string $string_value
     *           String feature value.
     *     @type \Google\Cloud\AIPlatform\V1\BoolArray $bool_array_value
     *           A list of bool type feature value.
     *     @type \Google\Cloud\AIPlatform\V1\DoubleArray $double_array_value
     *           A list of double type feature value.
     *     @type \Google\Cloud\AIPlatform\V1\Int64Array $int64_array_value
     *           A list of int64 type feature value.
     *     @type \Google\Cloud\AIPlatform\V1\StringArray $string_array_value
     *           A list of string type feature value.
     *     @type string $bytes_value
     *           Bytes feature value.
     *     @type \Google\Cloud\AIPlatform\V1\FeatureValue\Metadata $metadata
     *           Metadata of feature value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreOnlineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Bool type feature value.
     *
     * Generated from protobuf field <code>bool bool_value = 1;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(1);
    }

    public function hasBoolValue()
    {
        return $this->hasOneof(1);
    }

    /**
     * Bool type feature value.
     *
     * Generated from protobuf field <code>bool bool_value = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Double type feature value.
     *
     * Generated from protobuf field <code>double double_value = 2;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(2);
    }

    public function hasDoubleValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Double type feature value.
     *
     * Generated from protobuf field <code>double double_value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Int64 feature value.
     *
     * Generated from protobuf field <code>int64 int64_value = 5;</code>
     * @return int|string
     */
    public function getInt64Value()
    {
        return $this->readOneof(5);
    }

    public function hasInt64Value()
    {
        return $this->hasOneof(5);
    }

    /**
     * Int64 feature value.
     *
     * Generated from protobuf field <code>int64 int64_value = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInt64Value($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * String feature value.
     *
     * Generated from protobuf field <code>string string_value = 6;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(6);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(6);
    }

    /**
     * String feature value.
     *
     * Generated from protobuf field <code>string string_value = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * A list of bool type feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BoolArray bool_array_value = 7;</code>
     * @return \Google\Cloud\AIPlatform\V1\BoolArray|null
     */
    public function getBoolArrayValue()
    {
        return $this->readOneof(7);
    }

    public function hasBoolArrayValue()
    {
        return $this->hasOneof(7);
    }

    /**
     * A list of bool type feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BoolArray bool_array_value = 7;</code>
     * @param \Google\Cloud\AIPlatform\V1\BoolArray $var
     * @return $this
     */
    public function setBoolArrayValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\BoolArray::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * A list of double type feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DoubleArray double_array_value = 8;</code>
     * @return \Google\Cloud\AIPlatform\V1\DoubleArray|null
     */
    public function getDoubleArrayValue()
    {
        return $this->readOneof(8);
    }

    public function hasDoubleArrayValue()
    {
        return $this->hasOneof(8);
    }

    /**
     * A list of double type feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DoubleArray double_array_value = 8;</code>
     * @param \Google\Cloud\AIPlatform\V1\DoubleArray $var
     * @return $this
     */
    public function setDoubleArrayValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DoubleArray::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * A list of int64 type feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Int64Array int64_array_value = 11;</code>
     * @return \Google\Cloud\AIPlatform\V1\Int64Array|null
     */
    public function getInt64ArrayValue()
    {
        return $this->readOneof(11);
    }

    public function hasInt64ArrayValue()
    {
        return $this->hasOneof(11);
    }

    /**
     * A list of int64 type feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Int64Array int64_array_value = 11;</code>
     * @param \Google\Cloud\AIPlatform\V1\Int64Array $var
     * @return $this
     */
    public function setInt64ArrayValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Int64Array::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * A list of string type feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StringArray string_array_value = 12;</code>
     * @return \Google\Cloud\AIPlatform\V1\StringArray|null
     */
    public function getStringArrayValue()
    {
        return $this->readOneof(12);
    }

    public function hasStringArrayValue()
    {
        return $this->hasOneof(12);
    }

    /**
     * A list of string type feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StringArray string_array_value = 12;</code>
     * @param \Google\Cloud\AIPlatform\V1\StringArray $var
     * @return $this
     */
    public function setStringArrayValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\StringArray::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Bytes feature value.
     *
     * Generated from protobuf field <code>bytes bytes_value = 13;</code>
     * @return string
     */
    public function getBytesValue()
    {
        return $this->readOneof(13);
    }

    public function hasBytesValue()
    {
        return $this->hasOneof(13);
    }

    /**
     * Bytes feature value.
     *
     * Generated from protobuf field <code>bytes bytes_value = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setBytesValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Metadata of feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureValue.Metadata metadata = 14;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureValue\Metadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Metadata of feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureValue.Metadata metadata = 14;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureValue\Metadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureValue\Metadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

