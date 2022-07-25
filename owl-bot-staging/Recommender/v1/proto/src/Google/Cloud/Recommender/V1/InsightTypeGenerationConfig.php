<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/insight_type_config.proto

namespace Google\Cloud\Recommender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A configuration to customize the generation of insights.
 * Eg, customizing the lookback period considered when generating a
 * insight.
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1.InsightTypeGenerationConfig</code>
 */
class InsightTypeGenerationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Parameters for this InsightTypeGenerationConfig. These configs can be used
     * by or are applied to all subtypes.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 1;</code>
     */
    protected $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Struct $params
     *           Parameters for this InsightTypeGenerationConfig. These configs can be used
     *           by or are applied to all subtypes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1\InsightTypeConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Parameters for this InsightTypeGenerationConfig. These configs can be used
     * by or are applied to all subtypes.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 1;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getParams()
    {
        return $this->params;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * Parameters for this InsightTypeGenerationConfig. These configs can be used
     * by or are applied to all subtypes.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 1;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->params = $var;

        return $this;
    }

}

