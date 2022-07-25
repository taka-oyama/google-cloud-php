<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1beta1/webrisk.proto

namespace Google\Cloud\WebRisk\V1beta1\ComputeThreatListDiffRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The constraints for this diff.
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1beta1.ComputeThreatListDiffRequest.Constraints</code>
 */
class Constraints extends \Google\Protobuf\Internal\Message
{
    /**
     * The maximum size in number of entries. The diff will not contain more
     * entries than this value.  This should be a power of 2 between 2**10 and
     * 2**20.  If zero, no diff size limit is set.
     *
     * Generated from protobuf field <code>int32 max_diff_entries = 1;</code>
     */
    protected $max_diff_entries = 0;
    /**
     * Sets the maximum number of entries that the client is willing to have
     * in the local database. This should be a power of 2 between 2**10 and
     * 2**20. If zero, no database size limit is set.
     *
     * Generated from protobuf field <code>int32 max_database_entries = 2;</code>
     */
    protected $max_database_entries = 0;
    /**
     * The compression types supported by the client.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1beta1.CompressionType supported_compressions = 3;</code>
     */
    private $supported_compressions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_diff_entries
     *           The maximum size in number of entries. The diff will not contain more
     *           entries than this value.  This should be a power of 2 between 2**10 and
     *           2**20.  If zero, no diff size limit is set.
     *     @type int $max_database_entries
     *           Sets the maximum number of entries that the client is willing to have
     *           in the local database. This should be a power of 2 between 2**10 and
     *           2**20. If zero, no database size limit is set.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $supported_compressions
     *           The compression types supported by the client.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1Beta1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * The maximum size in number of entries. The diff will not contain more
     * entries than this value.  This should be a power of 2 between 2**10 and
     * 2**20.  If zero, no diff size limit is set.
     *
     * Generated from protobuf field <code>int32 max_diff_entries = 1;</code>
     * @return int
     */
    public function getMaxDiffEntries()
    {
        return $this->max_diff_entries;
    }

    /**
     * The maximum size in number of entries. The diff will not contain more
     * entries than this value.  This should be a power of 2 between 2**10 and
     * 2**20.  If zero, no diff size limit is set.
     *
     * Generated from protobuf field <code>int32 max_diff_entries = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxDiffEntries($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_diff_entries = $var;

        return $this;
    }

    /**
     * Sets the maximum number of entries that the client is willing to have
     * in the local database. This should be a power of 2 between 2**10 and
     * 2**20. If zero, no database size limit is set.
     *
     * Generated from protobuf field <code>int32 max_database_entries = 2;</code>
     * @return int
     */
    public function getMaxDatabaseEntries()
    {
        return $this->max_database_entries;
    }

    /**
     * Sets the maximum number of entries that the client is willing to have
     * in the local database. This should be a power of 2 between 2**10 and
     * 2**20. If zero, no database size limit is set.
     *
     * Generated from protobuf field <code>int32 max_database_entries = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxDatabaseEntries($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_database_entries = $var;

        return $this;
    }

    /**
     * The compression types supported by the client.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1beta1.CompressionType supported_compressions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedCompressions()
    {
        return $this->supported_compressions;
    }

    /**
     * The compression types supported by the client.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1beta1.CompressionType supported_compressions = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedCompressions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\WebRisk\V1beta1\CompressionType::class);
        $this->supported_compressions = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Constraints::class, \Google\Cloud\WebRisk\V1beta1\ComputeThreatListDiffRequest_Constraints::class);

