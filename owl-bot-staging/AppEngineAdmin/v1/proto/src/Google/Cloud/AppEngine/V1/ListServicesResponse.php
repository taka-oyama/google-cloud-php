<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/appengine.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for `Services.ListServices`.
 *
 * Generated from protobuf message <code>google.appengine.v1.ListServicesResponse</code>
 */
class ListServicesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The services belonging to the requested application.
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.Service services = 1;</code>
     */
    private $services;
    /**
     * Continuation token for fetching the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AppEngine\V1\Service>|\Google\Protobuf\Internal\RepeatedField $services
     *           The services belonging to the requested application.
     *     @type string $next_page_token
     *           Continuation token for fetching the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Appengine::initOnce();
        parent::__construct($data);
    }

    /**
     * The services belonging to the requested application.
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.Service services = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * The services belonging to the requested application.
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.Service services = 1;</code>
     * @param array<\Google\Cloud\AppEngine\V1\Service>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AppEngine\V1\Service::class);
        $this->services = $arr;

        return $this;
    }

    /**
     * Continuation token for fetching the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Continuation token for fetching the next page of results.
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

