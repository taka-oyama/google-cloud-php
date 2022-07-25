<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_deployments.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Sets the time for a one time patch deployment. Timestamp is in
 * [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.OneTimeSchedule</code>
 */
class OneTimeSchedule extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The desired patch job execution time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp execute_time = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $execute_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $execute_time
     *           Required. The desired patch job execution time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchDeployments::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The desired patch job execution time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp execute_time = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExecuteTime()
    {
        return $this->execute_time;
    }

    public function hasExecuteTime()
    {
        return isset($this->execute_time);
    }

    public function clearExecuteTime()
    {
        unset($this->execute_time);
    }

    /**
     * Required. The desired patch job execution time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp execute_time = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExecuteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->execute_time = $var;

        return $this;
    }

}

