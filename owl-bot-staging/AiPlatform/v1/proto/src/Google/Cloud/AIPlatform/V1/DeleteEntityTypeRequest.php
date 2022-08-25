<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [FeaturestoreService.DeleteEntityTypes][].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeleteEntityTypeRequest</code>
 */
class DeleteEntityTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the EntityType to be deleted.
     * Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * If set to true, any Features for this EntityType will also be deleted.
     * (Otherwise, the request will only work if the EntityType has no Features.)
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     */
    protected $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the EntityType to be deleted.
     *           Format:
     *           `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *     @type bool $force
     *           If set to true, any Features for this EntityType will also be deleted.
     *           (Otherwise, the request will only work if the EntityType has no Features.)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the EntityType to be deleted.
     * Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the EntityType to be deleted.
     * Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * If set to true, any Features for this EntityType will also be deleted.
     * (Otherwise, the request will only work if the EntityType has no Features.)
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * If set to true, any Features for this EntityType will also be deleted.
     * (Otherwise, the request will only work if the EntityType has no Features.)
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

