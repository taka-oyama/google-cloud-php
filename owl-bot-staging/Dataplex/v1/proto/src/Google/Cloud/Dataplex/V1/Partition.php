<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents partition metadata contained within entity instances.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Partition</code>
 */
class Partition extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Partition values used in the HTTP URL must be
     * double encoded. For example, `url_encode(url_encode(value))` can be used
     * to encode "US:CA/CA#Sunnyvale so that the request URL ends
     * with "/partitions/US%253ACA/CA%2523Sunnyvale".
     * The name field in the response retains the encoded format.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. Immutable. The set of values representing the partition, which correspond to the
     * partition schema defined in the parent entity.
     *
     * Generated from protobuf field <code>repeated string values = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $values;
    /**
     * Required. Immutable. The location of the entity data within the partition, for example,
     * `gs://bucket/path/to/entity/key1=value1/key2=value2`.
     * Or `projects/<project_id>/datasets/<dataset_id>/tables/<table_id>`
     *
     * Generated from protobuf field <code>string location = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $location = '';
    /**
     * Optional. The etag for this partition.
     *
     * Generated from protobuf field <code>string etag = 4 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @deprecated
     */
    protected $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Partition values used in the HTTP URL must be
     *           double encoded. For example, `url_encode(url_encode(value))` can be used
     *           to encode "US:CA/CA#Sunnyvale so that the request URL ends
     *           with "/partitions/US%253ACA/CA%2523Sunnyvale".
     *           The name field in the response retains the encoded format.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $values
     *           Required. Immutable. The set of values representing the partition, which correspond to the
     *           partition schema defined in the parent entity.
     *     @type string $location
     *           Required. Immutable. The location of the entity data within the partition, for example,
     *           `gs://bucket/path/to/entity/key1=value1/key2=value2`.
     *           Or `projects/<project_id>/datasets/<dataset_id>/tables/<table_id>`
     *     @type string $etag
     *           Optional. The etag for this partition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Metadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Partition values used in the HTTP URL must be
     * double encoded. For example, `url_encode(url_encode(value))` can be used
     * to encode "US:CA/CA#Sunnyvale so that the request URL ends
     * with "/partitions/US%253ACA/CA%2523Sunnyvale".
     * The name field in the response retains the encoded format.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Partition values used in the HTTP URL must be
     * double encoded. For example, `url_encode(url_encode(value))` can be used
     * to encode "US:CA/CA#Sunnyvale so that the request URL ends
     * with "/partitions/US%253ACA/CA%2523Sunnyvale".
     * The name field in the response retains the encoded format.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Immutable. The set of values representing the partition, which correspond to the
     * partition schema defined in the parent entity.
     *
     * Generated from protobuf field <code>repeated string values = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Required. Immutable. The set of values representing the partition, which correspond to the
     * partition schema defined in the parent entity.
     *
     * Generated from protobuf field <code>repeated string values = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->values = $arr;

        return $this;
    }

    /**
     * Required. Immutable. The location of the entity data within the partition, for example,
     * `gs://bucket/path/to/entity/key1=value1/key2=value2`.
     * Or `projects/<project_id>/datasets/<dataset_id>/tables/<table_id>`
     *
     * Generated from protobuf field <code>string location = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Required. Immutable. The location of the entity data within the partition, for example,
     * `gs://bucket/path/to/entity/key1=value1/key2=value2`.
     * Or `projects/<project_id>/datasets/<dataset_id>/tables/<table_id>`
     *
     * Generated from protobuf field <code>string location = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * Optional. The etag for this partition.
     *
     * Generated from protobuf field <code>string etag = 4 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     * @deprecated
     */
    public function getEtag()
    {
        @trigger_error('etag is deprecated.', E_USER_DEPRECATED);
        return $this->etag;
    }

    /**
     * Optional. The etag for this partition.
     *
     * Generated from protobuf field <code>string etag = 4 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setEtag($var)
    {
        @trigger_error('etag is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

