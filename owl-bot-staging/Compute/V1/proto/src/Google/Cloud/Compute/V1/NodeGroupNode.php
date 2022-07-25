<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NodeGroupNode</code>
 */
class NodeGroupNode extends \Google\Protobuf\Internal\Message
{
    /**
     * Accelerators for this node.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig accelerators = 269577064;</code>
     */
    private $accelerators;
    /**
     * CPU overcommit.
     * Check the CpuOvercommitType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string cpu_overcommit_type = 247727959;</code>
     */
    protected $cpu_overcommit_type = null;
    /**
     * Local disk configurations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.LocalDisk disks = 95594102;</code>
     */
    private $disks;
    /**
     * Instances scheduled on this node.
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     */
    private $instances;
    /**
     * The name of the node.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * The type of this node.
     *
     * Generated from protobuf field <code>optional string node_type = 465832791;</code>
     */
    protected $node_type = null;
    /**
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 480964267;</code>
     */
    protected $satisfies_pzs = null;
    /**
     * Binding properties for the physical server.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ServerBinding server_binding = 208179593;</code>
     */
    protected $server_binding = null;
    /**
     * Server ID associated with this node.
     *
     * Generated from protobuf field <code>optional string server_id = 339433367;</code>
     */
    protected $server_id = null;
    /**
     * 
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\AcceleratorConfig>|\Google\Protobuf\Internal\RepeatedField $accelerators
     *           Accelerators for this node.
     *     @type string $cpu_overcommit_type
     *           CPU overcommit.
     *           Check the CpuOvercommitType enum for the list of possible values.
     *     @type array<\Google\Cloud\Compute\V1\LocalDisk>|\Google\Protobuf\Internal\RepeatedField $disks
     *           Local disk configurations.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $instances
     *           Instances scheduled on this node.
     *     @type string $name
     *           The name of the node.
     *     @type string $node_type
     *           The type of this node.
     *     @type bool $satisfies_pzs
     *           [Output Only] Reserved for future use.
     *     @type \Google\Cloud\Compute\V1\ServerBinding $server_binding
     *           Binding properties for the physical server.
     *     @type string $server_id
     *           Server ID associated with this node.
     *     @type string $status
     *           
     *           Check the Status enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Accelerators for this node.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig accelerators = 269577064;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccelerators()
    {
        return $this->accelerators;
    }

    /**
     * Accelerators for this node.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig accelerators = 269577064;</code>
     * @param array<\Google\Cloud\Compute\V1\AcceleratorConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccelerators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\AcceleratorConfig::class);
        $this->accelerators = $arr;

        return $this;
    }

    /**
     * CPU overcommit.
     * Check the CpuOvercommitType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string cpu_overcommit_type = 247727959;</code>
     * @return string
     */
    public function getCpuOvercommitType()
    {
        return isset($this->cpu_overcommit_type) ? $this->cpu_overcommit_type : '';
    }

    public function hasCpuOvercommitType()
    {
        return isset($this->cpu_overcommit_type);
    }

    public function clearCpuOvercommitType()
    {
        unset($this->cpu_overcommit_type);
    }

    /**
     * CPU overcommit.
     * Check the CpuOvercommitType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string cpu_overcommit_type = 247727959;</code>
     * @param string $var
     * @return $this
     */
    public function setCpuOvercommitType($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpu_overcommit_type = $var;

        return $this;
    }

    /**
     * Local disk configurations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.LocalDisk disks = 95594102;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisks()
    {
        return $this->disks;
    }

    /**
     * Local disk configurations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.LocalDisk disks = 95594102;</code>
     * @param array<\Google\Cloud\Compute\V1\LocalDisk>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\LocalDisk::class);
        $this->disks = $arr;

        return $this;
    }

    /**
     * Instances scheduled on this node.
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * Instances scheduled on this node.
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->instances = $arr;

        return $this;
    }

    /**
     * The name of the node.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the node.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
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
     * The type of this node.
     *
     * Generated from protobuf field <code>optional string node_type = 465832791;</code>
     * @return string
     */
    public function getNodeType()
    {
        return isset($this->node_type) ? $this->node_type : '';
    }

    public function hasNodeType()
    {
        return isset($this->node_type);
    }

    public function clearNodeType()
    {
        unset($this->node_type);
    }

    /**
     * The type of this node.
     *
     * Generated from protobuf field <code>optional string node_type = 465832791;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_type = $var;

        return $this;
    }

    /**
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 480964267;</code>
     * @return bool
     */
    public function getSatisfiesPzs()
    {
        return isset($this->satisfies_pzs) ? $this->satisfies_pzs : false;
    }

    public function hasSatisfiesPzs()
    {
        return isset($this->satisfies_pzs);
    }

    public function clearSatisfiesPzs()
    {
        unset($this->satisfies_pzs);
    }

    /**
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 480964267;</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * Binding properties for the physical server.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ServerBinding server_binding = 208179593;</code>
     * @return \Google\Cloud\Compute\V1\ServerBinding|null
     */
    public function getServerBinding()
    {
        return $this->server_binding;
    }

    public function hasServerBinding()
    {
        return isset($this->server_binding);
    }

    public function clearServerBinding()
    {
        unset($this->server_binding);
    }

    /**
     * Binding properties for the physical server.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ServerBinding server_binding = 208179593;</code>
     * @param \Google\Cloud\Compute\V1\ServerBinding $var
     * @return $this
     */
    public function setServerBinding($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ServerBinding::class);
        $this->server_binding = $var;

        return $this;
    }

    /**
     * Server ID associated with this node.
     *
     * Generated from protobuf field <code>optional string server_id = 339433367;</code>
     * @return string
     */
    public function getServerId()
    {
        return isset($this->server_id) ? $this->server_id : '';
    }

    public function hasServerId()
    {
        return isset($this->server_id);
    }

    public function clearServerId()
    {
        unset($this->server_id);
    }

    /**
     * Server ID associated with this node.
     *
     * Generated from protobuf field <code>optional string server_id = 339433367;</code>
     * @param string $var
     * @return $this
     */
    public function setServerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_id = $var;

        return $this;
    }

    /**
     * 
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * 
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

}

