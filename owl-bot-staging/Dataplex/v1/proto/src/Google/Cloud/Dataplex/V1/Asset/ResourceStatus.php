<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/resources.proto

namespace Google\Cloud\Dataplex\V1\Asset;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Status of the resource referenced by an asset.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Asset.ResourceStatus</code>
 */
class ResourceStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The current state of the managed resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.ResourceStatus.State state = 1;</code>
     */
    protected $state = 0;
    /**
     * Additional information about the current state.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     */
    protected $message = '';
    /**
     * Last update time of the status.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           The current state of the managed resource.
     *     @type string $message
     *           Additional information about the current state.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Last update time of the status.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The current state of the managed resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.ResourceStatus.State state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The current state of the managed resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Asset.ResourceStatus.State state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\Asset\ResourceStatus\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Additional information about the current state.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Additional information about the current state.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Last update time of the status.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Last update time of the status.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceStatus::class, \Google\Cloud\Dataplex\V1\Asset_ResourceStatus::class);

