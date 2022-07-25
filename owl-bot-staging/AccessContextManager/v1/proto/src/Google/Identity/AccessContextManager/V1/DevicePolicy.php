<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_level.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `DevicePolicy` specifies device specific restrictions necessary to acquire a
 * given access level. A `DevicePolicy` specifies requirements for requests from
 * devices to be granted access levels, it does not do any enforcement on the
 * device. `DevicePolicy` acts as an AND over all specified fields, and each
 * repeated field is an OR over its elements. Any unset fields are ignored. For
 * example, if the proto is { os_type : DESKTOP_WINDOWS, os_type :
 * DESKTOP_LINUX, encryption_status: ENCRYPTED}, then the DevicePolicy will be
 * true for requests originating from encrypted Linux desktops and encrypted
 * Windows desktops.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.DevicePolicy</code>
 */
class DevicePolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether or not screenlock is required for the DevicePolicy to be true.
     * Defaults to `false`.
     *
     * Generated from protobuf field <code>bool require_screenlock = 1;</code>
     */
    protected $require_screenlock = false;
    /**
     * Allowed encryptions statuses, an empty list allows all statuses.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.type.DeviceEncryptionStatus allowed_encryption_statuses = 2;</code>
     */
    private $allowed_encryption_statuses;
    /**
     * Allowed OS versions, an empty list allows all types and all versions.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.OsConstraint os_constraints = 3;</code>
     */
    private $os_constraints;
    /**
     * Allowed device management levels, an empty list allows all management
     * levels.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.type.DeviceManagementLevel allowed_device_management_levels = 6;</code>
     */
    private $allowed_device_management_levels;
    /**
     * Whether the device needs to be approved by the customer admin.
     *
     * Generated from protobuf field <code>bool require_admin_approval = 7;</code>
     */
    protected $require_admin_approval = false;
    /**
     * Whether the device needs to be corp owned.
     *
     * Generated from protobuf field <code>bool require_corp_owned = 8;</code>
     */
    protected $require_corp_owned = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $require_screenlock
     *           Whether or not screenlock is required for the DevicePolicy to be true.
     *           Defaults to `false`.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $allowed_encryption_statuses
     *           Allowed encryptions statuses, an empty list allows all statuses.
     *     @type array<\Google\Identity\AccessContextManager\V1\OsConstraint>|\Google\Protobuf\Internal\RepeatedField $os_constraints
     *           Allowed OS versions, an empty list allows all types and all versions.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $allowed_device_management_levels
     *           Allowed device management levels, an empty list allows all management
     *           levels.
     *     @type bool $require_admin_approval
     *           Whether the device needs to be approved by the customer admin.
     *     @type bool $require_corp_owned
     *           Whether the device needs to be corp owned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessLevel::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether or not screenlock is required for the DevicePolicy to be true.
     * Defaults to `false`.
     *
     * Generated from protobuf field <code>bool require_screenlock = 1;</code>
     * @return bool
     */
    public function getRequireScreenlock()
    {
        return $this->require_screenlock;
    }

    /**
     * Whether or not screenlock is required for the DevicePolicy to be true.
     * Defaults to `false`.
     *
     * Generated from protobuf field <code>bool require_screenlock = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequireScreenlock($var)
    {
        GPBUtil::checkBool($var);
        $this->require_screenlock = $var;

        return $this;
    }

    /**
     * Allowed encryptions statuses, an empty list allows all statuses.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.type.DeviceEncryptionStatus allowed_encryption_statuses = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedEncryptionStatuses()
    {
        return $this->allowed_encryption_statuses;
    }

    /**
     * Allowed encryptions statuses, an empty list allows all statuses.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.type.DeviceEncryptionStatus allowed_encryption_statuses = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedEncryptionStatuses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Identity\AccessContextManager\Type\DeviceEncryptionStatus::class);
        $this->allowed_encryption_statuses = $arr;

        return $this;
    }

    /**
     * Allowed OS versions, an empty list allows all types and all versions.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.OsConstraint os_constraints = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOsConstraints()
    {
        return $this->os_constraints;
    }

    /**
     * Allowed OS versions, an empty list allows all types and all versions.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.OsConstraint os_constraints = 3;</code>
     * @param array<\Google\Identity\AccessContextManager\V1\OsConstraint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOsConstraints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Identity\AccessContextManager\V1\OsConstraint::class);
        $this->os_constraints = $arr;

        return $this;
    }

    /**
     * Allowed device management levels, an empty list allows all management
     * levels.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.type.DeviceManagementLevel allowed_device_management_levels = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedDeviceManagementLevels()
    {
        return $this->allowed_device_management_levels;
    }

    /**
     * Allowed device management levels, an empty list allows all management
     * levels.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.type.DeviceManagementLevel allowed_device_management_levels = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedDeviceManagementLevels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Identity\AccessContextManager\Type\DeviceManagementLevel::class);
        $this->allowed_device_management_levels = $arr;

        return $this;
    }

    /**
     * Whether the device needs to be approved by the customer admin.
     *
     * Generated from protobuf field <code>bool require_admin_approval = 7;</code>
     * @return bool
     */
    public function getRequireAdminApproval()
    {
        return $this->require_admin_approval;
    }

    /**
     * Whether the device needs to be approved by the customer admin.
     *
     * Generated from protobuf field <code>bool require_admin_approval = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequireAdminApproval($var)
    {
        GPBUtil::checkBool($var);
        $this->require_admin_approval = $var;

        return $this;
    }

    /**
     * Whether the device needs to be corp owned.
     *
     * Generated from protobuf field <code>bool require_corp_owned = 8;</code>
     * @return bool
     */
    public function getRequireCorpOwned()
    {
        return $this->require_corp_owned;
    }

    /**
     * Whether the device needs to be corp owned.
     *
     * Generated from protobuf field <code>bool require_corp_owned = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequireCorpOwned($var)
    {
        GPBUtil::checkBool($var);
        $this->require_corp_owned = $var;

        return $this;
    }

}

