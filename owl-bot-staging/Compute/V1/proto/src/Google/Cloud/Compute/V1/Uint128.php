<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Uint128</code>
 */
class Uint128 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional uint64 high = 3202466;</code>
     */
    protected $high = null;
    /**
     * Generated from protobuf field <code>optional uint64 low = 107348;</code>
     */
    protected $low = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $high
     *     @type int|string $low
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional uint64 high = 3202466;</code>
     * @return int|string
     */
    public function getHigh()
    {
        return isset($this->high) ? $this->high : 0;
    }

    public function hasHigh()
    {
        return isset($this->high);
    }

    public function clearHigh()
    {
        unset($this->high);
    }

    /**
     * Generated from protobuf field <code>optional uint64 high = 3202466;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHigh($var)
    {
        GPBUtil::checkUint64($var);
        $this->high = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint64 low = 107348;</code>
     * @return int|string
     */
    public function getLow()
    {
        return isset($this->low) ? $this->low : 0;
    }

    public function hasLow()
    {
        return isset($this->low);
    }

    public function clearLow()
    {
        unset($this->low);
    }

    /**
     * Generated from protobuf field <code>optional uint64 low = 107348;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLow($var)
    {
        GPBUtil::checkUint64($var);
        $this->low = $var;

        return $this;
    }

}

