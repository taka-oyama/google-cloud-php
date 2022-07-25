<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privatecatalog/v1beta1/private_catalog.proto

namespace Google\Cloud\PrivateCatalog\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines definition of input parameters of asset templates.
 *
 * Generated from protobuf message <code>google.cloud.privatecatalog.v1beta1.Inputs</code>
 */
class Inputs extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The JSON schema defining the inputs and their formats.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct parameters = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $parameters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Struct $parameters
     *           Output only. The JSON schema defining the inputs and their formats.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privatecatalog\V1Beta1\PrivateCatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The JSON schema defining the inputs and their formats.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct parameters = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    public function hasParameters()
    {
        return isset($this->parameters);
    }

    public function clearParameters()
    {
        unset($this->parameters);
    }

    /**
     * Output only. The JSON schema defining the inputs and their formats.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct parameters = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->parameters = $var;

        return $this;
    }

}

