<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/study.proto

namespace Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the spec to match categorical values from parent parameter.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.StudySpec.ParameterSpec.ConditionalParameterSpec.CategoricalValueCondition</code>
 */
class CategoricalValueCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Matches values of the parent parameter of 'CATEGORICAL' type.
     * All values must exist in `categorical_value_spec` of parent
     * parameter.
     *
     * Generated from protobuf field <code>repeated string values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $values
     *           Required. Matches values of the parent parameter of 'CATEGORICAL' type.
     *           All values must exist in `categorical_value_spec` of parent
     *           parameter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Study::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Matches values of the parent parameter of 'CATEGORICAL' type.
     * All values must exist in `categorical_value_spec` of parent
     * parameter.
     *
     * Generated from protobuf field <code>repeated string values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Required. Matches values of the parent parameter of 'CATEGORICAL' type.
     * All values must exist in `categorical_value_spec` of parent
     * parameter.
     *
     * Generated from protobuf field <code>repeated string values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->values = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CategoricalValueCondition::class, \Google\Cloud\AIPlatform\V1\StudySpec_ParameterSpec_ConditionalParameterSpec_CategoricalValueCondition::class);

