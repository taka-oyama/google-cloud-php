<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Cloud Router resource. For more information about Cloud Router, read the Cloud Router overview.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Router</code>
 */
class Router extends \Google\Protobuf\Internal\Message
{
    /**
     * BGP information specific to this router.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.RouterBgp bgp = 97483;</code>
     */
    protected $bgp = null;
    /**
     * BGP information that must be configured into the routing stack to establish BGP peering. This information must specify the peer ASN and either the interface name, IP address, or peer IP address. Please refer to RFC4273.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterBgpPeer bgp_peers = 452695773;</code>
     */
    private $bgp_peers;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    protected $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    protected $description = null;
    /**
     * Indicates if a router is dedicated for use with encrypted VLAN attachments (interconnectAttachments). Not currently available publicly. 
     *
     * Generated from protobuf field <code>optional bool encrypted_interconnect_router = 297996575;</code>
     */
    protected $encrypted_interconnect_router = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    protected $id = null;
    /**
     * Router interfaces. Each interface requires either one linked resource, (for example, linkedVpnTunnel), or IP address and IP address range (for example, ipRange), or both.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterInterface interfaces = 12073562;</code>
     */
    private $interfaces;
    /**
     * [Output Only] Type of resource. Always compute#router for routers.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    protected $kind = null;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * A list of NAT services created in this router.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterNat nats = 3373938;</code>
     */
    private $nats;
    /**
     * URI of the network to which this router belongs.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     */
    protected $network = null;
    /**
     * [Output Only] URI of the region where the router resides. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
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
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\RouterBgp $bgp
     *           BGP information specific to this router.
     *     @type array<\Google\Cloud\Compute\V1\RouterBgpPeer>|\Google\Protobuf\Internal\RepeatedField $bgp_peers
     *           BGP information that must be configured into the routing stack to establish BGP peering. This information must specify the peer ASN and either the interface name, IP address, or peer IP address. Please refer to RFC4273.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type bool $encrypted_interconnect_router
     *           Indicates if a router is dedicated for use with encrypted VLAN attachments (interconnectAttachments). Not currently available publicly. 
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type array<\Google\Cloud\Compute\V1\RouterInterface>|\Google\Protobuf\Internal\RepeatedField $interfaces
     *           Router interfaces. Each interface requires either one linked resource, (for example, linkedVpnTunnel), or IP address and IP address range (for example, ipRange), or both.
     *     @type string $kind
     *           [Output Only] Type of resource. Always compute#router for routers.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type array<\Google\Cloud\Compute\V1\RouterNat>|\Google\Protobuf\Internal\RepeatedField $nats
     *           A list of NAT services created in this router.
     *     @type string $network
     *           URI of the network to which this router belongs.
     *     @type string $region
     *           [Output Only] URI of the region where the router resides. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * BGP information specific to this router.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.RouterBgp bgp = 97483;</code>
     * @return \Google\Cloud\Compute\V1\RouterBgp|null
     */
    public function getBgp()
    {
        return $this->bgp;
    }

    public function hasBgp()
    {
        return isset($this->bgp);
    }

    public function clearBgp()
    {
        unset($this->bgp);
    }

    /**
     * BGP information specific to this router.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.RouterBgp bgp = 97483;</code>
     * @param \Google\Cloud\Compute\V1\RouterBgp $var
     * @return $this
     */
    public function setBgp($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\RouterBgp::class);
        $this->bgp = $var;

        return $this;
    }

    /**
     * BGP information that must be configured into the routing stack to establish BGP peering. This information must specify the peer ASN and either the interface name, IP address, or peer IP address. Please refer to RFC4273.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterBgpPeer bgp_peers = 452695773;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBgpPeers()
    {
        return $this->bgp_peers;
    }

    /**
     * BGP information that must be configured into the routing stack to establish BGP peering. This information must specify the peer ASN and either the interface name, IP address, or peer IP address. Please refer to RFC4273.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterBgpPeer bgp_peers = 452695773;</code>
     * @param array<\Google\Cloud\Compute\V1\RouterBgpPeer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBgpPeers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\RouterBgpPeer::class);
        $this->bgp_peers = $arr;

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
     * Indicates if a router is dedicated for use with encrypted VLAN attachments (interconnectAttachments). Not currently available publicly. 
     *
     * Generated from protobuf field <code>optional bool encrypted_interconnect_router = 297996575;</code>
     * @return bool
     */
    public function getEncryptedInterconnectRouter()
    {
        return isset($this->encrypted_interconnect_router) ? $this->encrypted_interconnect_router : false;
    }

    public function hasEncryptedInterconnectRouter()
    {
        return isset($this->encrypted_interconnect_router);
    }

    public function clearEncryptedInterconnectRouter()
    {
        unset($this->encrypted_interconnect_router);
    }

    /**
     * Indicates if a router is dedicated for use with encrypted VLAN attachments (interconnectAttachments). Not currently available publicly. 
     *
     * Generated from protobuf field <code>optional bool encrypted_interconnect_router = 297996575;</code>
     * @param bool $var
     * @return $this
     */
    public function setEncryptedInterconnectRouter($var)
    {
        GPBUtil::checkBool($var);
        $this->encrypted_interconnect_router = $var;

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
     * Router interfaces. Each interface requires either one linked resource, (for example, linkedVpnTunnel), or IP address and IP address range (for example, ipRange), or both.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterInterface interfaces = 12073562;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInterfaces()
    {
        return $this->interfaces;
    }

    /**
     * Router interfaces. Each interface requires either one linked resource, (for example, linkedVpnTunnel), or IP address and IP address range (for example, ipRange), or both.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterInterface interfaces = 12073562;</code>
     * @param array<\Google\Cloud\Compute\V1\RouterInterface>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInterfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\RouterInterface::class);
        $this->interfaces = $arr;

        return $this;
    }

    /**
     * [Output Only] Type of resource. Always compute#router for routers.
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
     * [Output Only] Type of resource. Always compute#router for routers.
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
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
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
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
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
     * A list of NAT services created in this router.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterNat nats = 3373938;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNats()
    {
        return $this->nats;
    }

    /**
     * A list of NAT services created in this router.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterNat nats = 3373938;</code>
     * @param array<\Google\Cloud\Compute\V1\RouterNat>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNats($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\RouterNat::class);
        $this->nats = $arr;

        return $this;
    }

    /**
     * URI of the network to which this router belongs.
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
     * URI of the network to which this router belongs.
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
     * [Output Only] URI of the region where the router resides. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
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
     * [Output Only] URI of the region where the router resides. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
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

}

