<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RegionInstanceGroupManagersListInstancesResponse</code>
 */
class RegionInstanceGroupManagersListInstancesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of managed instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ManagedInstance managed_instances = 336219614;</code>
     */
    private $managed_instances;
    /**
     * [Output Only] This token allows you to get the next page of results for list requests. If the number of results is larger than maxResults, use the nextPageToken as a value for the query parameter pageToken in the next list request. Subsequent list requests will have their own nextPageToken to continue paging through the results.
     *
     * Generated from protobuf field <code>optional string next_page_token = 79797525;</code>
     */
    protected $next_page_token = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\ManagedInstance>|\Google\Protobuf\Internal\RepeatedField $managed_instances
     *           A list of managed instances.
     *     @type string $next_page_token
     *           [Output Only] This token allows you to get the next page of results for list requests. If the number of results is larger than maxResults, use the nextPageToken as a value for the query parameter pageToken in the next list request. Subsequent list requests will have their own nextPageToken to continue paging through the results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of managed instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ManagedInstance managed_instances = 336219614;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getManagedInstances()
    {
        return $this->managed_instances;
    }

    /**
     * A list of managed instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ManagedInstance managed_instances = 336219614;</code>
     * @param array<\Google\Cloud\Compute\V1\ManagedInstance>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setManagedInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ManagedInstance::class);
        $this->managed_instances = $arr;

        return $this;
    }

    /**
     * [Output Only] This token allows you to get the next page of results for list requests. If the number of results is larger than maxResults, use the nextPageToken as a value for the query parameter pageToken in the next list request. Subsequent list requests will have their own nextPageToken to continue paging through the results.
     *
     * Generated from protobuf field <code>optional string next_page_token = 79797525;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return isset($this->next_page_token) ? $this->next_page_token : '';
    }

    public function hasNextPageToken()
    {
        return isset($this->next_page_token);
    }

    public function clearNextPageToken()
    {
        unset($this->next_page_token);
    }

    /**
     * [Output Only] This token allows you to get the next page of results for list requests. If the number of results is larger than maxResults, use the nextPageToken as a value for the query parameter pageToken in the next list request. Subsequent list requests will have their own nextPageToken to continue paging through the results.
     *
     * Generated from protobuf field <code>optional string next_page_token = 79797525;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

