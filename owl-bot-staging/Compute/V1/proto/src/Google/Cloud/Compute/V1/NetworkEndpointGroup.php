<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a collection of network endpoints. A network endpoint group (NEG) defines how a set of endpoints should be reached, whether they are reachable, and where they are located. For more information about using NEGs, see Setting up external HTTP(S) Load Balancing with internet NEGs, Setting up zonal NEGs, or Setting up external HTTP(S) Load Balancing with serverless NEGs.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkEndpointGroup</code>
 */
class NetworkEndpointGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Metadata defined as annotations on the network endpoint group.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 112032548;</code>
     */
    private $annotations;
    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkEndpointGroupAppEngine app_engine = 340788768;</code>
     */
    protected $app_engine = null;
    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkEndpointGroupCloudFunction cloud_function = 519893666;</code>
     */
    protected $cloud_function = null;
    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkEndpointGroupCloudRun cloud_run = 111060353;</code>
     */
    protected $cloud_run = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    protected $creation_timestamp = null;
    /**
     * The default port used if the port number is not specified in the network endpoint.
     *
     * Generated from protobuf field <code>optional int32 default_port = 423377855;</code>
     */
    protected $default_port = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    protected $description = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    protected $id = null;
    /**
     * [Output Only] Type of the resource. Always compute#networkEndpointGroup for network endpoint group.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    protected $kind = null;
    /**
     * Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * The URL of the network to which all network endpoints in the NEG belong. Uses "default" project network if unspecified.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     */
    protected $network = null;
    /**
     * Type of network endpoints in this network endpoint group. Can be one of GCE_VM_IP, GCE_VM_IP_PORT, NON_GCP_PRIVATE_IP_PORT, INTERNET_FQDN_PORT, INTERNET_IP_PORT, SERVERLESS, PRIVATE_SERVICE_CONNECT.
     * Check the NetworkEndpointType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_endpoint_type = 118301523;</code>
     */
    protected $network_endpoint_type = null;
    /**
     * The target service url used to set up private service connection to a Google API or a PSC Producer Service Attachment. An example value is: "asia-northeast3-cloudkms.googleapis.com"
     *
     * Generated from protobuf field <code>optional string psc_target_service = 269132134;</code>
     */
    protected $psc_target_service = null;
    /**
     * [Output Only] The URL of the region where the network endpoint group is located.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    protected $region = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    protected $self_link = null;
    /**
     * [Output only] Number of network endpoints in the network endpoint group.
     *
     * Generated from protobuf field <code>optional int32 size = 3530753;</code>
     */
    protected $size = null;
    /**
     * Optional URL of the subnetwork to which all network endpoints in the NEG belong.
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     */
    protected $subnetwork = null;
    /**
     * [Output Only] The URL of the zone where the network endpoint group is located.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     */
    protected $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Metadata defined as annotations on the network endpoint group.
     *     @type \Google\Cloud\Compute\V1\NetworkEndpointGroupAppEngine $app_engine
     *           Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *     @type \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudFunction $cloud_function
     *           Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *     @type \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudRun $cloud_run
     *           Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type int $default_port
     *           The default port used if the port number is not specified in the network endpoint.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#networkEndpointGroup for network endpoint group.
     *     @type string $name
     *           Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string $network
     *           The URL of the network to which all network endpoints in the NEG belong. Uses "default" project network if unspecified.
     *     @type string $network_endpoint_type
     *           Type of network endpoints in this network endpoint group. Can be one of GCE_VM_IP, GCE_VM_IP_PORT, NON_GCP_PRIVATE_IP_PORT, INTERNET_FQDN_PORT, INTERNET_IP_PORT, SERVERLESS, PRIVATE_SERVICE_CONNECT.
     *           Check the NetworkEndpointType enum for the list of possible values.
     *     @type string $psc_target_service
     *           The target service url used to set up private service connection to a Google API or a PSC Producer Service Attachment. An example value is: "asia-northeast3-cloudkms.googleapis.com"
     *     @type string $region
     *           [Output Only] The URL of the region where the network endpoint group is located.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type int $size
     *           [Output only] Number of network endpoints in the network endpoint group.
     *     @type string $subnetwork
     *           Optional URL of the subnetwork to which all network endpoints in the NEG belong.
     *     @type string $zone
     *           [Output Only] The URL of the zone where the network endpoint group is located.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Metadata defined as annotations on the network endpoint group.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 112032548;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Metadata defined as annotations on the network endpoint group.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 112032548;</code>
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
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkEndpointGroupAppEngine app_engine = 340788768;</code>
     * @return \Google\Cloud\Compute\V1\NetworkEndpointGroupAppEngine|null
     */
    public function getAppEngine()
    {
        return $this->app_engine;
    }

    public function hasAppEngine()
    {
        return isset($this->app_engine);
    }

    public function clearAppEngine()
    {
        unset($this->app_engine);
    }

    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkEndpointGroupAppEngine app_engine = 340788768;</code>
     * @param \Google\Cloud\Compute\V1\NetworkEndpointGroupAppEngine $var
     * @return $this
     */
    public function setAppEngine($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\NetworkEndpointGroupAppEngine::class);
        $this->app_engine = $var;

        return $this;
    }

    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkEndpointGroupCloudFunction cloud_function = 519893666;</code>
     * @return \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudFunction|null
     */
    public function getCloudFunction()
    {
        return $this->cloud_function;
    }

    public function hasCloudFunction()
    {
        return isset($this->cloud_function);
    }

    public function clearCloudFunction()
    {
        unset($this->cloud_function);
    }

    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkEndpointGroupCloudFunction cloud_function = 519893666;</code>
     * @param \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudFunction $var
     * @return $this
     */
    public function setCloudFunction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudFunction::class);
        $this->cloud_function = $var;

        return $this;
    }

    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkEndpointGroupCloudRun cloud_run = 111060353;</code>
     * @return \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudRun|null
     */
    public function getCloudRun()
    {
        return $this->cloud_run;
    }

    public function hasCloudRun()
    {
        return isset($this->cloud_run);
    }

    public function clearCloudRun()
    {
        unset($this->cloud_run);
    }

    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkEndpointGroupCloudRun cloud_run = 111060353;</code>
     * @param \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudRun $var
     * @return $this
     */
    public function setCloudRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudRun::class);
        $this->cloud_run = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * The default port used if the port number is not specified in the network endpoint.
     *
     * Generated from protobuf field <code>optional int32 default_port = 423377855;</code>
     * @return int
     */
    public function getDefaultPort()
    {
        return isset($this->default_port) ? $this->default_port : 0;
    }

    public function hasDefaultPort()
    {
        return isset($this->default_port);
    }

    public function clearDefaultPort()
    {
        unset($this->default_port);
    }

    /**
     * The default port used if the port number is not specified in the network endpoint.
     *
     * Generated from protobuf field <code>optional int32 default_port = 423377855;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->default_port = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
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
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#networkEndpointGroup for network endpoint group.
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
     * [Output Only] Type of the resource. Always compute#networkEndpointGroup for network endpoint group.
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
     * Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
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
     * Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
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
     * The URL of the network to which all network endpoints in the NEG belong. Uses "default" project network if unspecified.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     * @return string
     */
    public function getNetwork()
    {
        return isset($this->network) ? $this->network : '';
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * The URL of the network to which all network endpoints in the NEG belong. Uses "default" project network if unspecified.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Type of network endpoints in this network endpoint group. Can be one of GCE_VM_IP, GCE_VM_IP_PORT, NON_GCP_PRIVATE_IP_PORT, INTERNET_FQDN_PORT, INTERNET_IP_PORT, SERVERLESS, PRIVATE_SERVICE_CONNECT.
     * Check the NetworkEndpointType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_endpoint_type = 118301523;</code>
     * @return string
     */
    public function getNetworkEndpointType()
    {
        return isset($this->network_endpoint_type) ? $this->network_endpoint_type : '';
    }

    public function hasNetworkEndpointType()
    {
        return isset($this->network_endpoint_type);
    }

    public function clearNetworkEndpointType()
    {
        unset($this->network_endpoint_type);
    }

    /**
     * Type of network endpoints in this network endpoint group. Can be one of GCE_VM_IP, GCE_VM_IP_PORT, NON_GCP_PRIVATE_IP_PORT, INTERNET_FQDN_PORT, INTERNET_IP_PORT, SERVERLESS, PRIVATE_SERVICE_CONNECT.
     * Check the NetworkEndpointType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_endpoint_type = 118301523;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkEndpointType($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_endpoint_type = $var;

        return $this;
    }

    /**
     * The target service url used to set up private service connection to a Google API or a PSC Producer Service Attachment. An example value is: "asia-northeast3-cloudkms.googleapis.com"
     *
     * Generated from protobuf field <code>optional string psc_target_service = 269132134;</code>
     * @return string
     */
    public function getPscTargetService()
    {
        return isset($this->psc_target_service) ? $this->psc_target_service : '';
    }

    public function hasPscTargetService()
    {
        return isset($this->psc_target_service);
    }

    public function clearPscTargetService()
    {
        unset($this->psc_target_service);
    }

    /**
     * The target service url used to set up private service connection to a Google API or a PSC Producer Service Attachment. An example value is: "asia-northeast3-cloudkms.googleapis.com"
     *
     * Generated from protobuf field <code>optional string psc_target_service = 269132134;</code>
     * @param string $var
     * @return $this
     */
    public function setPscTargetService($var)
    {
        GPBUtil::checkString($var, True);
        $this->psc_target_service = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the region where the network endpoint group is located.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] The URL of the region where the network endpoint group is located.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output only] Number of network endpoints in the network endpoint group.
     *
     * Generated from protobuf field <code>optional int32 size = 3530753;</code>
     * @return int
     */
    public function getSize()
    {
        return isset($this->size) ? $this->size : 0;
    }

    public function hasSize()
    {
        return isset($this->size);
    }

    public function clearSize()
    {
        unset($this->size);
    }

    /**
     * [Output only] Number of network endpoints in the network endpoint group.
     *
     * Generated from protobuf field <code>optional int32 size = 3530753;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * Optional URL of the subnetwork to which all network endpoints in the NEG belong.
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return isset($this->subnetwork) ? $this->subnetwork : '';
    }

    public function hasSubnetwork()
    {
        return isset($this->subnetwork);
    }

    public function clearSubnetwork()
    {
        unset($this->subnetwork);
    }

    /**
     * Optional URL of the subnetwork to which all network endpoints in the NEG belong.
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the zone where the network endpoint group is located.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * [Output Only] The URL of the zone where the network endpoint group is located.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

