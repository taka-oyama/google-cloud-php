<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A `Target` resource in the Google Cloud Deploy API.
 * A `Target` defines a location to which a Skaffold configuration
 * can be deployed.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.Target</code>
 */
class Target extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Name of the `Target`. Format is
     * projects/{project}/locations/{location}/targets/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $name = '';
    /**
     * Output only. Resource id of the `Target`.
     *
     * Generated from protobuf field <code>string target_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $target_id = '';
    /**
     * Output only. Unique identifier of the `Target`.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Optional. Description of the `Target`. Max length is 255 characters.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. User annotations. These attributes can only be set and used by the
     * user, and not by Google Cloud Deploy. See
     * https://google.aip.dev/128#annotations for more details such as format and
     * size limitations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $annotations;
    /**
     * Optional. Labels are attributes that can be set and used by both the
     * user and by Google Cloud Deploy. Labels must meet the following
     * constraints:
     * * Keys and values can contain only lowercase letters, numeric characters,
     * underscores, and dashes.
     * * All characters must use UTF-8 encoding, and international characters are
     * allowed.
     * * Keys must start with a lowercase letter or international character.
     * * Each resource is limited to a maximum of 64 labels.
     * Both keys and values are additionally constrained to be <= 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Whether or not the `Target` requires approval.
     *
     * Generated from protobuf field <code>bool require_approval = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $require_approval = false;
    /**
     * Output only. Time at which the `Target` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Most recent time at which the `Target` was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';
    /**
     * Configurations for all execution that relates to this `Target`.
     * Each `ExecutionEnvironmentUsage` value may only be used in a single
     * configuration; using the same value multiple times is an error.
     * When one or more configurations are specified, they must include the
     * `RENDER` and `DEPLOY` `ExecutionEnvironmentUsage` values.
     * When no configurations are specified, execution will use the default
     * specified in `DefaultPool`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.ExecutionConfig execution_configs = 16;</code>
     */
    private $execution_configs;
    protected $deployment_target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. Name of the `Target`. Format is
     *           projects/{project}/locations/{location}/targets/[a-z][a-z0-9\-]{0,62}.
     *     @type string $target_id
     *           Output only. Resource id of the `Target`.
     *     @type string $uid
     *           Output only. Unique identifier of the `Target`.
     *     @type string $description
     *           Optional. Description of the `Target`. Max length is 255 characters.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Optional. User annotations. These attributes can only be set and used by the
     *           user, and not by Google Cloud Deploy. See
     *           https://google.aip.dev/128#annotations for more details such as format and
     *           size limitations.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels are attributes that can be set and used by both the
     *           user and by Google Cloud Deploy. Labels must meet the following
     *           constraints:
     *           * Keys and values can contain only lowercase letters, numeric characters,
     *           underscores, and dashes.
     *           * All characters must use UTF-8 encoding, and international characters are
     *           allowed.
     *           * Keys must start with a lowercase letter or international character.
     *           * Each resource is limited to a maximum of 64 labels.
     *           Both keys and values are additionally constrained to be <= 128 bytes.
     *     @type bool $require_approval
     *           Optional. Whether or not the `Target` requires approval.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time at which the `Target` was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Most recent time at which the `Target` was updated.
     *     @type \Google\Cloud\Deploy\V1\GkeCluster $gke
     *           Information specifying a GKE Cluster.
     *     @type \Google\Cloud\Deploy\V1\AnthosCluster $anthos_cluster
     *           Information specifying an Anthos Cluster.
     *     @type string $etag
     *           Optional. This checksum is computed by the server based on the value of other
     *           fields, and may be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     *     @type array<\Google\Cloud\Deploy\V1\ExecutionConfig>|\Google\Protobuf\Internal\RepeatedField $execution_configs
     *           Configurations for all execution that relates to this `Target`.
     *           Each `ExecutionEnvironmentUsage` value may only be used in a single
     *           configuration; using the same value multiple times is an error.
     *           When one or more configurations are specified, they must include the
     *           `RENDER` and `DEPLOY` `ExecutionEnvironmentUsage` values.
     *           When no configurations are specified, execution will use the default
     *           specified in `DefaultPool`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Name of the `Target`. Format is
     * projects/{project}/locations/{location}/targets/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. Name of the `Target`. Format is
     * projects/{project}/locations/{location}/targets/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. Resource id of the `Target`.
     *
     * Generated from protobuf field <code>string target_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTargetId()
    {
        return $this->target_id;
    }

    /**
     * Output only. Resource id of the `Target`.
     *
     * Generated from protobuf field <code>string target_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_id = $var;

        return $this;
    }

    /**
     * Output only. Unique identifier of the `Target`.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Unique identifier of the `Target`.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Optional. Description of the `Target`. Max length is 255 characters.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the `Target`. Max length is 255 characters.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. User annotations. These attributes can only be set and used by the
     * user, and not by Google Cloud Deploy. See
     * https://google.aip.dev/128#annotations for more details such as format and
     * size limitations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Optional. User annotations. These attributes can only be set and used by the
     * user, and not by Google Cloud Deploy. See
     * https://google.aip.dev/128#annotations for more details such as format and
     * size limitations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Optional. Labels are attributes that can be set and used by both the
     * user and by Google Cloud Deploy. Labels must meet the following
     * constraints:
     * * Keys and values can contain only lowercase letters, numeric characters,
     * underscores, and dashes.
     * * All characters must use UTF-8 encoding, and international characters are
     * allowed.
     * * Keys must start with a lowercase letter or international character.
     * * Each resource is limited to a maximum of 64 labels.
     * Both keys and values are additionally constrained to be <= 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels are attributes that can be set and used by both the
     * user and by Google Cloud Deploy. Labels must meet the following
     * constraints:
     * * Keys and values can contain only lowercase letters, numeric characters,
     * underscores, and dashes.
     * * All characters must use UTF-8 encoding, and international characters are
     * allowed.
     * * Keys must start with a lowercase letter or international character.
     * * Each resource is limited to a maximum of 64 labels.
     * Both keys and values are additionally constrained to be <= 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Whether or not the `Target` requires approval.
     *
     * Generated from protobuf field <code>bool require_approval = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getRequireApproval()
    {
        return $this->require_approval;
    }

    /**
     * Optional. Whether or not the `Target` requires approval.
     *
     * Generated from protobuf field <code>bool require_approval = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setRequireApproval($var)
    {
        GPBUtil::checkBool($var);
        $this->require_approval = $var;

        return $this;
    }

    /**
     * Output only. Time at which the `Target` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time at which the `Target` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Most recent time at which the `Target` was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Most recent time at which the `Target` was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Information specifying a GKE Cluster.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.GkeCluster gke = 15;</code>
     * @return \Google\Cloud\Deploy\V1\GkeCluster|null
     */
    public function getGke()
    {
        return $this->readOneof(15);
    }

    public function hasGke()
    {
        return $this->hasOneof(15);
    }

    /**
     * Information specifying a GKE Cluster.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.GkeCluster gke = 15;</code>
     * @param \Google\Cloud\Deploy\V1\GkeCluster $var
     * @return $this
     */
    public function setGke($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\GkeCluster::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Information specifying an Anthos Cluster.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AnthosCluster anthos_cluster = 17;</code>
     * @return \Google\Cloud\Deploy\V1\AnthosCluster|null
     */
    public function getAnthosCluster()
    {
        return $this->readOneof(17);
    }

    public function hasAnthosCluster()
    {
        return $this->hasOneof(17);
    }

    /**
     * Information specifying an Anthos Cluster.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AnthosCluster anthos_cluster = 17;</code>
     * @param \Google\Cloud\Deploy\V1\AnthosCluster $var
     * @return $this
     */
    public function setAnthosCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\AnthosCluster::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Optional. This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Configurations for all execution that relates to this `Target`.
     * Each `ExecutionEnvironmentUsage` value may only be used in a single
     * configuration; using the same value multiple times is an error.
     * When one or more configurations are specified, they must include the
     * `RENDER` and `DEPLOY` `ExecutionEnvironmentUsage` values.
     * When no configurations are specified, execution will use the default
     * specified in `DefaultPool`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.ExecutionConfig execution_configs = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExecutionConfigs()
    {
        return $this->execution_configs;
    }

    /**
     * Configurations for all execution that relates to this `Target`.
     * Each `ExecutionEnvironmentUsage` value may only be used in a single
     * configuration; using the same value multiple times is an error.
     * When one or more configurations are specified, they must include the
     * `RENDER` and `DEPLOY` `ExecutionEnvironmentUsage` values.
     * When no configurations are specified, execution will use the default
     * specified in `DefaultPool`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.ExecutionConfig execution_configs = 16;</code>
     * @param array<\Google\Cloud\Deploy\V1\ExecutionConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExecutionConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\ExecutionConfig::class);
        $this->execution_configs = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeploymentTarget()
    {
        return $this->whichOneof("deployment_target");
    }

}

