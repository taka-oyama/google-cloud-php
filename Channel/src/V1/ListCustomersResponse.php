<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [CloudChannelService.ListCustomers][google.cloud.channel.v1.CloudChannelService.ListCustomers].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListCustomersResponse</code>
 */
class ListCustomersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The customers belonging to a reseller or distributor.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Customer customers = 1;</code>
     */
    private $customers;
    /**
     * A token to retrieve the next page of results.
     * Pass to [ListCustomersRequest.page_token][google.cloud.channel.v1.ListCustomersRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Channel\V1\Customer>|\Google\Protobuf\Internal\RepeatedField $customers
     *           The customers belonging to a reseller or distributor.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     *           Pass to [ListCustomersRequest.page_token][google.cloud.channel.v1.ListCustomersRequest.page_token] to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The customers belonging to a reseller or distributor.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Customer customers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * The customers belonging to a reseller or distributor.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Customer customers = 1;</code>
     * @param array<\Google\Cloud\Channel\V1\Customer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\Customer::class);
        $this->customers = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to [ListCustomersRequest.page_token][google.cloud.channel.v1.ListCustomersRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to [ListCustomersRequest.page_token][google.cloud.channel.v1.ListCustomersRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
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

