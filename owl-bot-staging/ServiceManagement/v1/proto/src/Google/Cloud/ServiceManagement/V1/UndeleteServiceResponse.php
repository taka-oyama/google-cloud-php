<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for UndeleteService method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.UndeleteServiceResponse</code>
 */
class UndeleteServiceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Revived service resource.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.ManagedService service = 1;</code>
     */
    protected $service = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ServiceManagement\V1\ManagedService $service
     *           Revived service resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Revived service resource.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.ManagedService service = 1;</code>
     * @return \Google\Cloud\ServiceManagement\V1\ManagedService|null
     */
    public function getService()
    {
        return $this->service;
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * Revived service resource.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.ManagedService service = 1;</code>
     * @param \Google\Cloud\ServiceManagement\V1\ManagedService $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ServiceManagement\V1\ManagedService::class);
        $this->service = $var;

        return $this;
    }

}

