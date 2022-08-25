<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_online_service.proto

namespace Google\Cloud\AIPlatform\V1\ReadFeatureValuesResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Entity view with Feature values.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ReadFeatureValuesResponse.EntityView</code>
 */
class EntityView extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the requested entity.
     *
     * Generated from protobuf field <code>string entity_id = 1;</code>
     */
    protected $entity_id = '';
    /**
     * Each piece of data holds the k
     * requested values for one requested Feature. If no values
     * for the requested Feature exist, the corresponding cell will be empty.
     * This has the same size and is in the same order as the features from the
     * header [ReadFeatureValuesResponse.header][google.cloud.aiplatform.v1.ReadFeatureValuesResponse.header].
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ReadFeatureValuesResponse.EntityView.Data data = 2;</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entity_id
     *           ID of the requested entity.
     *     @type array<\Google\Cloud\AIPlatform\V1\ReadFeatureValuesResponse\EntityView\Data>|\Google\Protobuf\Internal\RepeatedField $data
     *           Each piece of data holds the k
     *           requested values for one requested Feature. If no values
     *           for the requested Feature exist, the corresponding cell will be empty.
     *           This has the same size and is in the same order as the features from the
     *           header [ReadFeatureValuesResponse.header][google.cloud.aiplatform.v1.ReadFeatureValuesResponse.header].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreOnlineService::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the requested entity.
     *
     * Generated from protobuf field <code>string entity_id = 1;</code>
     * @return string
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * ID of the requested entity.
     *
     * Generated from protobuf field <code>string entity_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_id = $var;

        return $this;
    }

    /**
     * Each piece of data holds the k
     * requested values for one requested Feature. If no values
     * for the requested Feature exist, the corresponding cell will be empty.
     * This has the same size and is in the same order as the features from the
     * header [ReadFeatureValuesResponse.header][google.cloud.aiplatform.v1.ReadFeatureValuesResponse.header].
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ReadFeatureValuesResponse.EntityView.Data data = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Each piece of data holds the k
     * requested values for one requested Feature. If no values
     * for the requested Feature exist, the corresponding cell will be empty.
     * This has the same size and is in the same order as the features from the
     * header [ReadFeatureValuesResponse.header][google.cloud.aiplatform.v1.ReadFeatureValuesResponse.header].
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ReadFeatureValuesResponse.EntityView.Data data = 2;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\ReadFeatureValuesResponse\EntityView\Data>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\ReadFeatureValuesResponse\EntityView\Data::class);
        $this->data = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EntityView::class, \Google\Cloud\AIPlatform\V1\ReadFeatureValuesResponse_EntityView::class);

