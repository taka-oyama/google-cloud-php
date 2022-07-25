<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Disk encryption status for an instance.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.DiskEncryptionStatus</code>
 */
class DiskEncryptionStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * KMS key version used to encrypt the Cloud SQL instance resource
     *
     * Generated from protobuf field <code>string kms_key_version_name = 1;</code>
     */
    protected $kms_key_version_name = '';
    /**
     * This is always `sql#diskEncryptionStatus`.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     */
    protected $kind = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kms_key_version_name
     *           KMS key version used to encrypt the Cloud SQL instance resource
     *     @type string $kind
     *           This is always `sql#diskEncryptionStatus`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * KMS key version used to encrypt the Cloud SQL instance resource
     *
     * Generated from protobuf field <code>string kms_key_version_name = 1;</code>
     * @return string
     */
    public function getKmsKeyVersionName()
    {
        return $this->kms_key_version_name;
    }

    /**
     * KMS key version used to encrypt the Cloud SQL instance resource
     *
     * Generated from protobuf field <code>string kms_key_version_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyVersionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_version_name = $var;

        return $this;
    }

    /**
     * This is always `sql#diskEncryptionStatus`.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#diskEncryptionStatus`.
     *
     * Generated from protobuf field <code>string kind = 2;</code>
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

