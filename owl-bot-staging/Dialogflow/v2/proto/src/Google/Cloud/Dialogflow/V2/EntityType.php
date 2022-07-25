<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/entity_type.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Each intent parameter has a type, called the entity type, which dictates
 * exactly how data from an end-user expression is extracted.
 * Dialogflow provides predefined system entities that can match many common
 * types of data. For example, there are system entities for matching dates,
 * times, colors, email addresses, and so on. You can also create your own
 * custom entities for matching custom data. For example, you could define a
 * vegetable entity that can match the types of vegetables available for
 * purchase with a grocery store agent.
 * For more information, see the
 * [Entity guide](https://cloud.google.com/dialogflow/docs/entities-overview).
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.EntityType</code>
 */
class EntityType extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of the entity type.
     * Required for [EntityTypes.UpdateEntityType][google.cloud.dialogflow.v2.EntityTypes.UpdateEntityType] and
     * [EntityTypes.BatchUpdateEntityTypes][google.cloud.dialogflow.v2.EntityTypes.BatchUpdateEntityTypes] methods.
     * Format: `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The name of the entity type.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Required. Indicates the kind of entity type.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EntityType.Kind kind = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $kind = 0;
    /**
     * Optional. Indicates whether the entity type can be automatically
     * expanded.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EntityType.AutoExpansionMode auto_expansion_mode = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $auto_expansion_mode = 0;
    /**
     * Optional. The collection of entity entries associated with the entity type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType.Entity entities = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $entities;
    /**
     * Optional. Enables fuzzy entity extraction during classification.
     *
     * Generated from protobuf field <code>bool enable_fuzzy_extraction = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enable_fuzzy_extraction = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique identifier of the entity type.
     *           Required for [EntityTypes.UpdateEntityType][google.cloud.dialogflow.v2.EntityTypes.UpdateEntityType] and
     *           [EntityTypes.BatchUpdateEntityTypes][google.cloud.dialogflow.v2.EntityTypes.BatchUpdateEntityTypes] methods.
     *           Format: `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`.
     *     @type string $display_name
     *           Required. The name of the entity type.
     *     @type int $kind
     *           Required. Indicates the kind of entity type.
     *     @type int $auto_expansion_mode
     *           Optional. Indicates whether the entity type can be automatically
     *           expanded.
     *     @type array<\Google\Cloud\Dialogflow\V2\EntityType\Entity>|\Google\Protobuf\Internal\RepeatedField $entities
     *           Optional. The collection of entity entries associated with the entity type.
     *     @type bool $enable_fuzzy_extraction
     *           Optional. Enables fuzzy entity extraction during classification.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of the entity type.
     * Required for [EntityTypes.UpdateEntityType][google.cloud.dialogflow.v2.EntityTypes.UpdateEntityType] and
     * [EntityTypes.BatchUpdateEntityTypes][google.cloud.dialogflow.v2.EntityTypes.BatchUpdateEntityTypes] methods.
     * Format: `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique identifier of the entity type.
     * Required for [EntityTypes.UpdateEntityType][google.cloud.dialogflow.v2.EntityTypes.UpdateEntityType] and
     * [EntityTypes.BatchUpdateEntityTypes][google.cloud.dialogflow.v2.EntityTypes.BatchUpdateEntityTypes] methods.
     * Format: `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. The name of the entity type.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The name of the entity type.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. Indicates the kind of entity type.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EntityType.Kind kind = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Required. Indicates the kind of entity type.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EntityType.Kind kind = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\EntityType\Kind::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * Optional. Indicates whether the entity type can be automatically
     * expanded.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EntityType.AutoExpansionMode auto_expansion_mode = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getAutoExpansionMode()
    {
        return $this->auto_expansion_mode;
    }

    /**
     * Optional. Indicates whether the entity type can be automatically
     * expanded.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EntityType.AutoExpansionMode auto_expansion_mode = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setAutoExpansionMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\EntityType\AutoExpansionMode::class);
        $this->auto_expansion_mode = $var;

        return $this;
    }

    /**
     * Optional. The collection of entity entries associated with the entity type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType.Entity entities = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * Optional. The collection of entity entries associated with the entity type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType.Entity entities = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dialogflow\V2\EntityType\Entity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\EntityType\Entity::class);
        $this->entities = $arr;

        return $this;
    }

    /**
     * Optional. Enables fuzzy entity extraction during classification.
     *
     * Generated from protobuf field <code>bool enable_fuzzy_extraction = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableFuzzyExtraction()
    {
        return $this->enable_fuzzy_extraction;
    }

    /**
     * Optional. Enables fuzzy entity extraction during classification.
     *
     * Generated from protobuf field <code>bool enable_fuzzy_extraction = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableFuzzyExtraction($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_fuzzy_extraction = $var;

        return $this;
    }

}

