<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlInstancesCloneRequest</code>
 */
class SqlInstancesCloneRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the Cloud SQL instance to be cloned (source). This does not
     * include the project ID.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     */
    protected $instance = '';
    /**
     * Project ID of the source as well as the clone Cloud SQL instance.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     */
    protected $project = '';
    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.InstancesCloneRequest body = 100;</code>
     */
    protected $body = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           The ID of the Cloud SQL instance to be cloned (source). This does not
     *           include the project ID.
     *     @type string $project
     *           Project ID of the source as well as the clone Cloud SQL instance.
     *     @type \Google\Cloud\Sql\V1beta4\InstancesCloneRequest $body
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSql::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the Cloud SQL instance to be cloned (source). This does not
     * include the project ID.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * The ID of the Cloud SQL instance to be cloned (source). This does not
     * include the project ID.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Project ID of the source as well as the clone Cloud SQL instance.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID of the source as well as the clone Cloud SQL instance.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.InstancesCloneRequest body = 100;</code>
     * @return \Google\Cloud\Sql\V1beta4\InstancesCloneRequest|null
     */
    public function getBody()
    {
        return $this->body;
    }

    public function hasBody()
    {
        return isset($this->body);
    }

    public function clearBody()
    {
        unset($this->body);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.InstancesCloneRequest body = 100;</code>
     * @param \Google\Cloud\Sql\V1beta4\InstancesCloneRequest $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1beta4\InstancesCloneRequest::class);
        $this->body = $var;

        return $this;
    }

}

