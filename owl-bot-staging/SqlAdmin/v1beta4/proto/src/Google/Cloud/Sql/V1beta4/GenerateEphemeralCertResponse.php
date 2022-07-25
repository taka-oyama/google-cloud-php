<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_connect.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Ephemeral certificate creation request.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.GenerateEphemeralCertResponse</code>
 */
class GenerateEphemeralCertResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated cert
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.SslCert ephemeral_cert = 1;</code>
     */
    protected $ephemeral_cert = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Sql\V1beta4\SslCert $ephemeral_cert
     *           Generated cert
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlConnect::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated cert
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.SslCert ephemeral_cert = 1;</code>
     * @return \Google\Cloud\Sql\V1beta4\SslCert|null
     */
    public function getEphemeralCert()
    {
        return $this->ephemeral_cert;
    }

    public function hasEphemeralCert()
    {
        return isset($this->ephemeral_cert);
    }

    public function clearEphemeralCert()
    {
        unset($this->ephemeral_cert);
    }

    /**
     * Generated cert
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.SslCert ephemeral_cert = 1;</code>
     * @param \Google\Cloud\Sql\V1beta4\SslCert $var
     * @return $this
     */
    public function setEphemeralCert($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1beta4\SslCert::class);
        $this->ephemeral_cert = $var;

        return $this;
    }

}

