<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Address;

use UnexpectedValueException;

/**
 * The purpose of this resource, which can be one of the following values: - GCE_ENDPOINT for addresses that are used by VM instances, alias IP ranges, load balancers, and similar resources. - DNS_RESOLVER for a DNS resolver address in a subnetwork for a Cloud DNS inbound forwarder IP addresses (regional internal IP address in a subnet of a VPC network) - VPC_PEERING for global internal IP addresses used for private services access allocated ranges. - NAT_AUTO for the regional external IP addresses used by Cloud NAT when allocating addresses using automatic NAT IP address allocation. - IPSEC_INTERCONNECT for addresses created from a private IP range that are reserved for a VLAN attachment in an *IPsec-encrypted Cloud Interconnect* configuration. These addresses are regional resources. Not currently available publicly. - `SHARED_LOADBALANCER_VIP` for an internal IP address that is assigned to multiple internal forwarding rules. - `PRIVATE_SERVICE_CONNECT` for a private network address that is used to configure Private Service Connect. Only global internal addresses can use this purpose. 
 *
 * Protobuf type <code>google.cloud.compute.v1.Address.Purpose</code>
 */
class Purpose
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_PURPOSE = 0;</code>
     */
    const UNDEFINED_PURPOSE = 0;
    /**
     * DNS resolver address in the subnetwork.
     *
     * Generated from protobuf enum <code>DNS_RESOLVER = 476114556;</code>
     */
    const DNS_RESOLVER = 476114556;
    /**
     * VM internal/alias IP, Internal LB service IP, etc.
     *
     * Generated from protobuf enum <code>GCE_ENDPOINT = 230515243;</code>
     */
    const GCE_ENDPOINT = 230515243;
    /**
     * A regional internal IP address range reserved for the VLAN attachment that is used in IPsec-encrypted Cloud Interconnect. This regional internal IP address range must not overlap with any IP address range of subnet/route in the VPC network and its peering networks. After the VLAN attachment is created with the reserved IP address range, when creating a new VPN gateway, its interface IP address is allocated from the associated VLAN attachment���s IP address range.
     *
     * Generated from protobuf enum <code>IPSEC_INTERCONNECT = 340437251;</code>
     */
    const IPSEC_INTERCONNECT = 340437251;
    /**
     * External IP automatically reserved for Cloud NAT.
     *
     * Generated from protobuf enum <code>NAT_AUTO = 163666477;</code>
     */
    const NAT_AUTO = 163666477;
    /**
     * A private network IP address that can be used to configure Private Service Connect. This purpose can be specified only for GLOBAL addresses of Type INTERNAL
     *
     * Generated from protobuf enum <code>PRIVATE_SERVICE_CONNECT = 48134724;</code>
     */
    const PRIVATE_SERVICE_CONNECT = 48134724;
    /**
     * A regional internal IP address range reserved for Serverless.
     *
     * Generated from protobuf enum <code>SERVERLESS = 270492508;</code>
     */
    const SERVERLESS = 270492508;
    /**
     * A private network IP address that can be shared by multiple Internal Load Balancer forwarding rules.
     *
     * Generated from protobuf enum <code>SHARED_LOADBALANCER_VIP = 294447572;</code>
     */
    const SHARED_LOADBALANCER_VIP = 294447572;
    /**
     * IP range for peer networks.
     *
     * Generated from protobuf enum <code>VPC_PEERING = 400800170;</code>
     */
    const VPC_PEERING = 400800170;

    private static $valueToName = [
        self::UNDEFINED_PURPOSE => 'UNDEFINED_PURPOSE',
        self::DNS_RESOLVER => 'DNS_RESOLVER',
        self::GCE_ENDPOINT => 'GCE_ENDPOINT',
        self::IPSEC_INTERCONNECT => 'IPSEC_INTERCONNECT',
        self::NAT_AUTO => 'NAT_AUTO',
        self::PRIVATE_SERVICE_CONNECT => 'PRIVATE_SERVICE_CONNECT',
        self::SERVERLESS => 'SERVERLESS',
        self::SHARED_LOADBALANCER_VIP => 'SHARED_LOADBALANCER_VIP',
        self::VPC_PEERING => 'VPC_PEERING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Purpose::class, \Google\Cloud\Compute\V1\Address_Purpose::class);

