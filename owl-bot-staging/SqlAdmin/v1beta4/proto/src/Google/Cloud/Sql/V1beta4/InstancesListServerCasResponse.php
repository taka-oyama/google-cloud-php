<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instances ListServerCas response.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.InstancesListServerCasResponse</code>
 */
class InstancesListServerCasResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of server CA certificates for the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.SslCert certs = 1;</code>
     */
    private $certs;
    /**
     * Generated from protobuf field <code>string active_version = 2;</code>
     */
    protected $active_version = '';
    /**
     * This is always `sql#instancesListServerCas`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     */
    protected $kind = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Sql\V1beta4\SslCert>|\Google\Protobuf\Internal\RepeatedField $certs
     *           List of server CA certificates for the instance.
     *     @type string $active_version
     *     @type string $kind
     *           This is always `sql#instancesListServerCas`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * List of server CA certificates for the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.SslCert certs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCerts()
    {
        return $this->certs;
    }

    /**
     * List of server CA certificates for the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.SslCert certs = 1;</code>
     * @param array<\Google\Cloud\Sql\V1beta4\SslCert>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCerts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Sql\V1beta4\SslCert::class);
        $this->certs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string active_version = 2;</code>
     * @return string
     */
    public function getActiveVersion()
    {
        return $this->active_version;
    }

    /**
     * Generated from protobuf field <code>string active_version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setActiveVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->active_version = $var;

        return $this;
    }

    /**
     * This is always `sql#instancesListServerCas`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#instancesListServerCas`.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

}

