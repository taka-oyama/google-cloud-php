<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An instance-attached disk resource.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AttachedDisk</code>
 */
class AttachedDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies whether the disk will be auto-deleted when the instance is deleted (but not when the disk is detached from the instance).
     *
     * Generated from protobuf field <code>optional bool auto_delete = 464761403;</code>
     */
    protected $auto_delete = null;
    /**
     * Indicates that this is a boot disk. The virtual machine will use the first partition of the disk for its root filesystem.
     *
     * Generated from protobuf field <code>optional bool boot = 3029746;</code>
     */
    protected $boot = null;
    /**
     * Specifies a unique device name of your choice that is reflected into the /dev/disk/by-id/google-* tree of a Linux operating system running within the instance. This name can be used to reference the device for mounting, resizing, and so on, from within the instance. If not specified, the server chooses a default device name to apply to this disk, in the form persistent-disk-x, where x is a number assigned by Google Compute Engine. This field is only applicable for persistent disks.
     *
     * Generated from protobuf field <code>optional string device_name = 67541716;</code>
     */
    protected $device_name = null;
    /**
     * Encrypts or decrypts a disk using a customer-supplied encryption key. If you are creating a new disk, this field encrypts the new disk using an encryption key that you provide. If you are attaching an existing disk that is already encrypted, this field decrypts the disk using the customer-supplied encryption key. If you encrypt a disk using a customer-supplied key, you must provide the same key again when you attempt to use this resource at a later time. For example, you must provide the key when you create a snapshot or an image from the disk or when you attach the disk to a virtual machine instance. If you do not provide an encryption key, then the disk will be encrypted using an automatically generated key and you do not need to provide a key to use the disk later. Instance templates do not store customer-supplied encryption keys, so you cannot use your own keys to encrypt disks in a managed instance group.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CustomerEncryptionKey disk_encryption_key = 271660677;</code>
     */
    protected $disk_encryption_key = null;
    /**
     * The size of the disk in GB.
     *
     * Generated from protobuf field <code>optional int64 disk_size_gb = 316263735;</code>
     */
    protected $disk_size_gb = null;
    /**
     * A list of features to enable on the guest operating system. Applicable only for bootable images. Read Enabling guest operating system features to see a list of available options.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.GuestOsFeature guest_os_features = 79294545;</code>
     */
    private $guest_os_features;
    /**
     * [Output Only] A zero-based index to this disk, where 0 is reserved for the boot disk. If you have many disks attached to an instance, each disk would have a unique index number.
     *
     * Generated from protobuf field <code>optional int32 index = 100346066;</code>
     */
    protected $index = null;
    /**
     * [Input Only] Specifies the parameters for a new disk that will be created alongside the new instance. Use initialization parameters to create boot disks or local SSDs attached to the new instance. This property is mutually exclusive with the source property; you can only define one or the other, but not both.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AttachedDiskInitializeParams initialize_params = 17697045;</code>
     */
    protected $initialize_params = null;
    /**
     * Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME. The default is SCSI. Persistent disks must always use SCSI and the request will fail if you attempt to attach a persistent disk in any other format than SCSI. Local SSDs can use either NVME or SCSI. For performance characteristics of SCSI over NVMe, see Local SSD performance.
     * Check the Interface enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string interface = 502623545;</code>
     */
    protected $interface = null;
    /**
     * [Output Only] Type of the resource. Always compute#attachedDisk for attached disks.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    protected $kind = null;
    /**
     * [Output Only] Any valid publicly visible licenses.
     *
     * Generated from protobuf field <code>repeated string licenses = 337642578;</code>
     */
    private $licenses;
    /**
     * The mode in which to attach this disk, either READ_WRITE or READ_ONLY. If not specified, the default is to attach the disk in READ_WRITE mode.
     * Check the Mode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string mode = 3357091;</code>
     */
    protected $mode = null;
    /**
     * [Output Only] shielded vm initial state stored on disk
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InitialStateConfig shielded_instance_initial_state = 192356867;</code>
     */
    protected $shielded_instance_initial_state = null;
    /**
     * Specifies a valid partial or full URL to an existing Persistent Disk resource. When creating a new instance, one of initializeParams.sourceImage or initializeParams.sourceSnapshot or disks.source is required except for local SSD. If desired, you can also attach existing non-root persistent disks using this property. This field is only applicable for persistent disks. Note that for InstanceTemplate, specify the disk name for zonal disk, and the URL for regional disk.
     *
     * Generated from protobuf field <code>optional string source = 177235995;</code>
     */
    protected $source = null;
    /**
     * Specifies the type of the disk, either SCRATCH or PERSISTENT. If not specified, the default is PERSISTENT.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     */
    protected $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $auto_delete
     *           Specifies whether the disk will be auto-deleted when the instance is deleted (but not when the disk is detached from the instance).
     *     @type bool $boot
     *           Indicates that this is a boot disk. The virtual machine will use the first partition of the disk for its root filesystem.
     *     @type string $device_name
     *           Specifies a unique device name of your choice that is reflected into the /dev/disk/by-id/google-* tree of a Linux operating system running within the instance. This name can be used to reference the device for mounting, resizing, and so on, from within the instance. If not specified, the server chooses a default device name to apply to this disk, in the form persistent-disk-x, where x is a number assigned by Google Compute Engine. This field is only applicable for persistent disks.
     *     @type \Google\Cloud\Compute\V1\CustomerEncryptionKey $disk_encryption_key
     *           Encrypts or decrypts a disk using a customer-supplied encryption key. If you are creating a new disk, this field encrypts the new disk using an encryption key that you provide. If you are attaching an existing disk that is already encrypted, this field decrypts the disk using the customer-supplied encryption key. If you encrypt a disk using a customer-supplied key, you must provide the same key again when you attempt to use this resource at a later time. For example, you must provide the key when you create a snapshot or an image from the disk or when you attach the disk to a virtual machine instance. If you do not provide an encryption key, then the disk will be encrypted using an automatically generated key and you do not need to provide a key to use the disk later. Instance templates do not store customer-supplied encryption keys, so you cannot use your own keys to encrypt disks in a managed instance group.
     *     @type int|string $disk_size_gb
     *           The size of the disk in GB.
     *     @type array<\Google\Cloud\Compute\V1\GuestOsFeature>|\Google\Protobuf\Internal\RepeatedField $guest_os_features
     *           A list of features to enable on the guest operating system. Applicable only for bootable images. Read Enabling guest operating system features to see a list of available options.
     *     @type int $index
     *           [Output Only] A zero-based index to this disk, where 0 is reserved for the boot disk. If you have many disks attached to an instance, each disk would have a unique index number.
     *     @type \Google\Cloud\Compute\V1\AttachedDiskInitializeParams $initialize_params
     *           [Input Only] Specifies the parameters for a new disk that will be created alongside the new instance. Use initialization parameters to create boot disks or local SSDs attached to the new instance. This property is mutually exclusive with the source property; you can only define one or the other, but not both.
     *     @type string $interface
     *           Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME. The default is SCSI. Persistent disks must always use SCSI and the request will fail if you attempt to attach a persistent disk in any other format than SCSI. Local SSDs can use either NVME or SCSI. For performance characteristics of SCSI over NVMe, see Local SSD performance.
     *           Check the Interface enum for the list of possible values.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#attachedDisk for attached disks.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $licenses
     *           [Output Only] Any valid publicly visible licenses.
     *     @type string $mode
     *           The mode in which to attach this disk, either READ_WRITE or READ_ONLY. If not specified, the default is to attach the disk in READ_WRITE mode.
     *           Check the Mode enum for the list of possible values.
     *     @type \Google\Cloud\Compute\V1\InitialStateConfig $shielded_instance_initial_state
     *           [Output Only] shielded vm initial state stored on disk
     *     @type string $source
     *           Specifies a valid partial or full URL to an existing Persistent Disk resource. When creating a new instance, one of initializeParams.sourceImage or initializeParams.sourceSnapshot or disks.source is required except for local SSD. If desired, you can also attach existing non-root persistent disks using this property. This field is only applicable for persistent disks. Note that for InstanceTemplate, specify the disk name for zonal disk, and the URL for regional disk.
     *     @type string $type
     *           Specifies the type of the disk, either SCRATCH or PERSISTENT. If not specified, the default is PERSISTENT.
     *           Check the Type enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies whether the disk will be auto-deleted when the instance is deleted (but not when the disk is detached from the instance).
     *
     * Generated from protobuf field <code>optional bool auto_delete = 464761403;</code>
     * @return bool
     */
    public function getAutoDelete()
    {
        return isset($this->auto_delete) ? $this->auto_delete : false;
    }

    public function hasAutoDelete()
    {
        return isset($this->auto_delete);
    }

    public function clearAutoDelete()
    {
        unset($this->auto_delete);
    }

    /**
     * Specifies whether the disk will be auto-deleted when the instance is deleted (but not when the disk is detached from the instance).
     *
     * Generated from protobuf field <code>optional bool auto_delete = 464761403;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoDelete($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_delete = $var;

        return $this;
    }

    /**
     * Indicates that this is a boot disk. The virtual machine will use the first partition of the disk for its root filesystem.
     *
     * Generated from protobuf field <code>optional bool boot = 3029746;</code>
     * @return bool
     */
    public function getBoot()
    {
        return isset($this->boot) ? $this->boot : false;
    }

    public function hasBoot()
    {
        return isset($this->boot);
    }

    public function clearBoot()
    {
        unset($this->boot);
    }

    /**
     * Indicates that this is a boot disk. The virtual machine will use the first partition of the disk for its root filesystem.
     *
     * Generated from protobuf field <code>optional bool boot = 3029746;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoot($var)
    {
        GPBUtil::checkBool($var);
        $this->boot = $var;

        return $this;
    }

    /**
     * Specifies a unique device name of your choice that is reflected into the /dev/disk/by-id/google-* tree of a Linux operating system running within the instance. This name can be used to reference the device for mounting, resizing, and so on, from within the instance. If not specified, the server chooses a default device name to apply to this disk, in the form persistent-disk-x, where x is a number assigned by Google Compute Engine. This field is only applicable for persistent disks.
     *
     * Generated from protobuf field <code>optional string device_name = 67541716;</code>
     * @return string
     */
    public function getDeviceName()
    {
        return isset($this->device_name) ? $this->device_name : '';
    }

    public function hasDeviceName()
    {
        return isset($this->device_name);
    }

    public function clearDeviceName()
    {
        unset($this->device_name);
    }

    /**
     * Specifies a unique device name of your choice that is reflected into the /dev/disk/by-id/google-* tree of a Linux operating system running within the instance. This name can be used to reference the device for mounting, resizing, and so on, from within the instance. If not specified, the server chooses a default device name to apply to this disk, in the form persistent-disk-x, where x is a number assigned by Google Compute Engine. This field is only applicable for persistent disks.
     *
     * Generated from protobuf field <code>optional string device_name = 67541716;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_name = $var;

        return $this;
    }

    /**
     * Encrypts or decrypts a disk using a customer-supplied encryption key. If you are creating a new disk, this field encrypts the new disk using an encryption key that you provide. If you are attaching an existing disk that is already encrypted, this field decrypts the disk using the customer-supplied encryption key. If you encrypt a disk using a customer-supplied key, you must provide the same key again when you attempt to use this resource at a later time. For example, you must provide the key when you create a snapshot or an image from the disk or when you attach the disk to a virtual machine instance. If you do not provide an encryption key, then the disk will be encrypted using an automatically generated key and you do not need to provide a key to use the disk later. Instance templates do not store customer-supplied encryption keys, so you cannot use your own keys to encrypt disks in a managed instance group.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CustomerEncryptionKey disk_encryption_key = 271660677;</code>
     * @return \Google\Cloud\Compute\V1\CustomerEncryptionKey|null
     */
    public function getDiskEncryptionKey()
    {
        return $this->disk_encryption_key;
    }

    public function hasDiskEncryptionKey()
    {
        return isset($this->disk_encryption_key);
    }

    public function clearDiskEncryptionKey()
    {
        unset($this->disk_encryption_key);
    }

    /**
     * Encrypts or decrypts a disk using a customer-supplied encryption key. If you are creating a new disk, this field encrypts the new disk using an encryption key that you provide. If you are attaching an existing disk that is already encrypted, this field decrypts the disk using the customer-supplied encryption key. If you encrypt a disk using a customer-supplied key, you must provide the same key again when you attempt to use this resource at a later time. For example, you must provide the key when you create a snapshot or an image from the disk or when you attach the disk to a virtual machine instance. If you do not provide an encryption key, then the disk will be encrypted using an automatically generated key and you do not need to provide a key to use the disk later. Instance templates do not store customer-supplied encryption keys, so you cannot use your own keys to encrypt disks in a managed instance group.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CustomerEncryptionKey disk_encryption_key = 271660677;</code>
     * @param \Google\Cloud\Compute\V1\CustomerEncryptionKey $var
     * @return $this
     */
    public function setDiskEncryptionKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\CustomerEncryptionKey::class);
        $this->disk_encryption_key = $var;

        return $this;
    }

    /**
     * The size of the disk in GB.
     *
     * Generated from protobuf field <code>optional int64 disk_size_gb = 316263735;</code>
     * @return int|string
     */
    public function getDiskSizeGb()
    {
        return isset($this->disk_size_gb) ? $this->disk_size_gb : 0;
    }

    public function hasDiskSizeGb()
    {
        return isset($this->disk_size_gb);
    }

    public function clearDiskSizeGb()
    {
        unset($this->disk_size_gb);
    }

    /**
     * The size of the disk in GB.
     *
     * Generated from protobuf field <code>optional int64 disk_size_gb = 316263735;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDiskSizeGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->disk_size_gb = $var;

        return $this;
    }

    /**
     * A list of features to enable on the guest operating system. Applicable only for bootable images. Read Enabling guest operating system features to see a list of available options.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.GuestOsFeature guest_os_features = 79294545;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGuestOsFeatures()
    {
        return $this->guest_os_features;
    }

    /**
     * A list of features to enable on the guest operating system. Applicable only for bootable images. Read Enabling guest operating system features to see a list of available options.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.GuestOsFeature guest_os_features = 79294545;</code>
     * @param array<\Google\Cloud\Compute\V1\GuestOsFeature>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGuestOsFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\GuestOsFeature::class);
        $this->guest_os_features = $arr;

        return $this;
    }

    /**
     * [Output Only] A zero-based index to this disk, where 0 is reserved for the boot disk. If you have many disks attached to an instance, each disk would have a unique index number.
     *
     * Generated from protobuf field <code>optional int32 index = 100346066;</code>
     * @return int
     */
    public function getIndex()
    {
        return isset($this->index) ? $this->index : 0;
    }

    public function hasIndex()
    {
        return isset($this->index);
    }

    public function clearIndex()
    {
        unset($this->index);
    }

    /**
     * [Output Only] A zero-based index to this disk, where 0 is reserved for the boot disk. If you have many disks attached to an instance, each disk would have a unique index number.
     *
     * Generated from protobuf field <code>optional int32 index = 100346066;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * [Input Only] Specifies the parameters for a new disk that will be created alongside the new instance. Use initialization parameters to create boot disks or local SSDs attached to the new instance. This property is mutually exclusive with the source property; you can only define one or the other, but not both.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AttachedDiskInitializeParams initialize_params = 17697045;</code>
     * @return \Google\Cloud\Compute\V1\AttachedDiskInitializeParams|null
     */
    public function getInitializeParams()
    {
        return $this->initialize_params;
    }

    public function hasInitializeParams()
    {
        return isset($this->initialize_params);
    }

    public function clearInitializeParams()
    {
        unset($this->initialize_params);
    }

    /**
     * [Input Only] Specifies the parameters for a new disk that will be created alongside the new instance. Use initialization parameters to create boot disks or local SSDs attached to the new instance. This property is mutually exclusive with the source property; you can only define one or the other, but not both.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AttachedDiskInitializeParams initialize_params = 17697045;</code>
     * @param \Google\Cloud\Compute\V1\AttachedDiskInitializeParams $var
     * @return $this
     */
    public function setInitializeParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\AttachedDiskInitializeParams::class);
        $this->initialize_params = $var;

        return $this;
    }

    /**
     * Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME. The default is SCSI. Persistent disks must always use SCSI and the request will fail if you attempt to attach a persistent disk in any other format than SCSI. Local SSDs can use either NVME or SCSI. For performance characteristics of SCSI over NVMe, see Local SSD performance.
     * Check the Interface enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string interface = 502623545;</code>
     * @return string
     */
    public function getInterface()
    {
        return isset($this->interface) ? $this->interface : '';
    }

    public function hasInterface()
    {
        return isset($this->interface);
    }

    public function clearInterface()
    {
        unset($this->interface);
    }

    /**
     * Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME. The default is SCSI. Persistent disks must always use SCSI and the request will fail if you attempt to attach a persistent disk in any other format than SCSI. Local SSDs can use either NVME or SCSI. For performance characteristics of SCSI over NVMe, see Local SSD performance.
     * Check the Interface enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string interface = 502623545;</code>
     * @param string $var
     * @return $this
     */
    public function setInterface($var)
    {
        GPBUtil::checkString($var, True);
        $this->interface = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#attachedDisk for attached disks.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#attachedDisk for attached disks.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * [Output Only] Any valid publicly visible licenses.
     *
     * Generated from protobuf field <code>repeated string licenses = 337642578;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLicenses()
    {
        return $this->licenses;
    }

    /**
     * [Output Only] Any valid publicly visible licenses.
     *
     * Generated from protobuf field <code>repeated string licenses = 337642578;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLicenses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->licenses = $arr;

        return $this;
    }

    /**
     * The mode in which to attach this disk, either READ_WRITE or READ_ONLY. If not specified, the default is to attach the disk in READ_WRITE mode.
     * Check the Mode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string mode = 3357091;</code>
     * @return string
     */
    public function getMode()
    {
        return isset($this->mode) ? $this->mode : '';
    }

    public function hasMode()
    {
        return isset($this->mode);
    }

    public function clearMode()
    {
        unset($this->mode);
    }

    /**
     * The mode in which to attach this disk, either READ_WRITE or READ_ONLY. If not specified, the default is to attach the disk in READ_WRITE mode.
     * Check the Mode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string mode = 3357091;</code>
     * @param string $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->mode = $var;

        return $this;
    }

    /**
     * [Output Only] shielded vm initial state stored on disk
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InitialStateConfig shielded_instance_initial_state = 192356867;</code>
     * @return \Google\Cloud\Compute\V1\InitialStateConfig|null
     */
    public function getShieldedInstanceInitialState()
    {
        return $this->shielded_instance_initial_state;
    }

    public function hasShieldedInstanceInitialState()
    {
        return isset($this->shielded_instance_initial_state);
    }

    public function clearShieldedInstanceInitialState()
    {
        unset($this->shielded_instance_initial_state);
    }

    /**
     * [Output Only] shielded vm initial state stored on disk
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InitialStateConfig shielded_instance_initial_state = 192356867;</code>
     * @param \Google\Cloud\Compute\V1\InitialStateConfig $var
     * @return $this
     */
    public function setShieldedInstanceInitialState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InitialStateConfig::class);
        $this->shielded_instance_initial_state = $var;

        return $this;
    }

    /**
     * Specifies a valid partial or full URL to an existing Persistent Disk resource. When creating a new instance, one of initializeParams.sourceImage or initializeParams.sourceSnapshot or disks.source is required except for local SSD. If desired, you can also attach existing non-root persistent disks using this property. This field is only applicable for persistent disks. Note that for InstanceTemplate, specify the disk name for zonal disk, and the URL for regional disk.
     *
     * Generated from protobuf field <code>optional string source = 177235995;</code>
     * @return string
     */
    public function getSource()
    {
        return isset($this->source) ? $this->source : '';
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * Specifies a valid partial or full URL to an existing Persistent Disk resource. When creating a new instance, one of initializeParams.sourceImage or initializeParams.sourceSnapshot or disks.source is required except for local SSD. If desired, you can also attach existing non-root persistent disks using this property. This field is only applicable for persistent disks. Note that for InstanceTemplate, specify the disk name for zonal disk, and the URL for regional disk.
     *
     * Generated from protobuf field <code>optional string source = 177235995;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Specifies the type of the disk, either SCRATCH or PERSISTENT. If not specified, the default is PERSISTENT.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @return string
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : '';
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Specifies the type of the disk, either SCRATCH or PERSISTENT. If not specified, the default is PERSISTENT.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

