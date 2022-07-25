<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/usage.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The set of all usage signals that Data Catalog stores.
 * Note: Usually, these signals are updated daily. In rare cases, an update may
 * fail but will be performed again on the next day.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.UsageSignal</code>
 */
class UsageSignal extends \Google\Protobuf\Internal\Message
{
    /**
     * The end timestamp of the duration of usage statistics.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 1;</code>
     */
    protected $update_time = null;
    /**
     * Usage statistics over each of the predefined time ranges.
     * Supported time ranges are `{"24H", "7D", "30D"}`.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.datacatalog.v1.UsageStats> usage_within_time_range = 2;</code>
     */
    private $usage_within_time_range;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The end timestamp of the duration of usage statistics.
     *     @type array|\Google\Protobuf\Internal\MapField $usage_within_time_range
     *           Usage statistics over each of the predefined time ranges.
     *           Supported time ranges are `{"24H", "7D", "30D"}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Usage::initOnce();
        parent::__construct($data);
    }

    /**
     * The end timestamp of the duration of usage statistics.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 1;</code>
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
     * The end timestamp of the duration of usage statistics.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Usage statistics over each of the predefined time ranges.
     * Supported time ranges are `{"24H", "7D", "30D"}`.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.datacatalog.v1.UsageStats> usage_within_time_range = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUsageWithinTimeRange()
    {
        return $this->usage_within_time_range;
    }

    /**
     * Usage statistics over each of the predefined time ranges.
     * Supported time ranges are `{"24H", "7D", "30D"}`.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.datacatalog.v1.UsageStats> usage_within_time_range = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUsageWithinTimeRange($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1\UsageStats::class);
        $this->usage_within_time_range = $arr;

        return $this;
    }

}

