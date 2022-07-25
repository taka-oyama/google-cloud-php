<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1\DropInfo;

use UnexpectedValueException;

/**
 * Drop cause types:
 *
 * Protobuf type <code>google.cloud.networkmanagement.v1.DropInfo.Cause</code>
 */
class Cause
{
    /**
     * Cause is unspecified.
     *
     * Generated from protobuf enum <code>CAUSE_UNSPECIFIED = 0;</code>
     */
    const CAUSE_UNSPECIFIED = 0;
    /**
     * Destination external address cannot be resolved to a known target. If
     * the address is used in a Google Cloud project, provide the project ID
     * as test input.
     *
     * Generated from protobuf enum <code>UNKNOWN_EXTERNAL_ADDRESS = 1;</code>
     */
    const UNKNOWN_EXTERNAL_ADDRESS = 1;
    /**
     * A Compute Engine instance can only send or receive a packet with a
     * foreign IP address if ip_forward is enabled.
     *
     * Generated from protobuf enum <code>FOREIGN_IP_DISALLOWED = 2;</code>
     */
    const FOREIGN_IP_DISALLOWED = 2;
    /**
     * Dropped due to a firewall rule, unless allowed due to connection
     * tracking.
     *
     * Generated from protobuf enum <code>FIREWALL_RULE = 3;</code>
     */
    const FIREWALL_RULE = 3;
    /**
     * Dropped due to no routes.
     *
     * Generated from protobuf enum <code>NO_ROUTE = 4;</code>
     */
    const NO_ROUTE = 4;
    /**
     * Dropped due to invalid route. Route's next hop is a blackhole.
     *
     * Generated from protobuf enum <code>ROUTE_BLACKHOLE = 5;</code>
     */
    const ROUTE_BLACKHOLE = 5;
    /**
     * Packet is sent to a wrong (unintended) network. Example: you trace a
     * packet from VM1:Network1 to VM2:Network2, however, the route configured
     * in Network1 sends the packet destined for VM2's IP addresss to Network3.
     *
     * Generated from protobuf enum <code>ROUTE_WRONG_NETWORK = 6;</code>
     */
    const ROUTE_WRONG_NETWORK = 6;
    /**
     * Packet with internal destination address sent to the internet gateway.
     *
     * Generated from protobuf enum <code>PRIVATE_TRAFFIC_TO_INTERNET = 7;</code>
     */
    const PRIVATE_TRAFFIC_TO_INTERNET = 7;
    /**
     * Instance with only an internal IP address tries to access Google API and
     * services, but private Google access is not enabled.
     *
     * Generated from protobuf enum <code>PRIVATE_GOOGLE_ACCESS_DISALLOWED = 8;</code>
     */
    const PRIVATE_GOOGLE_ACCESS_DISALLOWED = 8;
    /**
     * Instance with only an internal IP address tries to access external hosts,
     * but Cloud NAT is not enabled in the subnet, unless special configurations
     * on a VM allow this connection.
     *
     * Generated from protobuf enum <code>NO_EXTERNAL_ADDRESS = 9;</code>
     */
    const NO_EXTERNAL_ADDRESS = 9;
    /**
     * Destination internal address cannot be resolved to a known target. If
     * this is a shared VPC scenario, verify if the service project ID is
     * provided as test input. Otherwise, verify if the IP address is being
     * used in the project.
     *
     * Generated from protobuf enum <code>UNKNOWN_INTERNAL_ADDRESS = 10;</code>
     */
    const UNKNOWN_INTERNAL_ADDRESS = 10;
    /**
     * Forwarding rule's protocol and ports do not match the packet header.
     *
     * Generated from protobuf enum <code>FORWARDING_RULE_MISMATCH = 11;</code>
     */
    const FORWARDING_RULE_MISMATCH = 11;
    /**
     * Forwarding rule does not have backends configured.
     *
     * Generated from protobuf enum <code>FORWARDING_RULE_NO_INSTANCES = 12;</code>
     */
    const FORWARDING_RULE_NO_INSTANCES = 12;
    /**
     * Firewalls block the health check probes to the backends and cause
     * the backends to be unavailable for traffic from the load balancer.
     * For more details, see [Health check firewall
     * rules](https://cloud.google.com/load-balancing/docs/health-checks#firewall_rules).
     *
     * Generated from protobuf enum <code>FIREWALL_BLOCKING_LOAD_BALANCER_BACKEND_HEALTH_CHECK = 13;</code>
     */
    const FIREWALL_BLOCKING_LOAD_BALANCER_BACKEND_HEALTH_CHECK = 13;
    /**
     * Packet is sent from or to a Compute Engine instance that is not in a
     * running state.
     *
     * Generated from protobuf enum <code>INSTANCE_NOT_RUNNING = 14;</code>
     */
    const INSTANCE_NOT_RUNNING = 14;
    /**
     * The type of traffic is blocked and the user cannot configure a firewall
     * rule to enable it. See [Always blocked
     * traffic](https://cloud.google.com/vpc/docs/firewalls#blockedtraffic) for
     * more details.
     *
     * Generated from protobuf enum <code>TRAFFIC_TYPE_BLOCKED = 15;</code>
     */
    const TRAFFIC_TYPE_BLOCKED = 15;
    /**
     * Access to Google Kubernetes Engine cluster master's endpoint is not
     * authorized. See [Access to the cluster
     * endpoints](https://cloud.google.com/kubernetes-engine/docs/how-to/private-clusters#access_to_the_cluster_endpoints)
     * for more details.
     *
     * Generated from protobuf enum <code>GKE_MASTER_UNAUTHORIZED_ACCESS = 16;</code>
     */
    const GKE_MASTER_UNAUTHORIZED_ACCESS = 16;
    /**
     * Access to the Cloud SQL instance endpoint is not authorized.
     * See [Authorizing with authorized
     * networks](https://cloud.google.com/sql/docs/mysql/authorize-networks) for
     * more details.
     *
     * Generated from protobuf enum <code>CLOUD_SQL_INSTANCE_UNAUTHORIZED_ACCESS = 17;</code>
     */
    const CLOUD_SQL_INSTANCE_UNAUTHORIZED_ACCESS = 17;
    /**
     * Packet was dropped inside Google Kubernetes Engine Service.
     *
     * Generated from protobuf enum <code>DROPPED_INSIDE_GKE_SERVICE = 18;</code>
     */
    const DROPPED_INSIDE_GKE_SERVICE = 18;
    /**
     * Packet was dropped inside Cloud SQL Service.
     *
     * Generated from protobuf enum <code>DROPPED_INSIDE_CLOUD_SQL_SERVICE = 19;</code>
     */
    const DROPPED_INSIDE_CLOUD_SQL_SERVICE = 19;
    /**
     * Packet was dropped because there is no peering between the originating
     * network and the Google Managed Services Network.
     *
     * Generated from protobuf enum <code>GOOGLE_MANAGED_SERVICE_NO_PEERING = 20;</code>
     */
    const GOOGLE_MANAGED_SERVICE_NO_PEERING = 20;
    /**
     * Packet was dropped because the Cloud SQL instance has neither a private
     * nor a public IP address.
     *
     * Generated from protobuf enum <code>CLOUD_SQL_INSTANCE_NO_IP_ADDRESS = 21;</code>
     */
    const CLOUD_SQL_INSTANCE_NO_IP_ADDRESS = 21;

    private static $valueToName = [
        self::CAUSE_UNSPECIFIED => 'CAUSE_UNSPECIFIED',
        self::UNKNOWN_EXTERNAL_ADDRESS => 'UNKNOWN_EXTERNAL_ADDRESS',
        self::FOREIGN_IP_DISALLOWED => 'FOREIGN_IP_DISALLOWED',
        self::FIREWALL_RULE => 'FIREWALL_RULE',
        self::NO_ROUTE => 'NO_ROUTE',
        self::ROUTE_BLACKHOLE => 'ROUTE_BLACKHOLE',
        self::ROUTE_WRONG_NETWORK => 'ROUTE_WRONG_NETWORK',
        self::PRIVATE_TRAFFIC_TO_INTERNET => 'PRIVATE_TRAFFIC_TO_INTERNET',
        self::PRIVATE_GOOGLE_ACCESS_DISALLOWED => 'PRIVATE_GOOGLE_ACCESS_DISALLOWED',
        self::NO_EXTERNAL_ADDRESS => 'NO_EXTERNAL_ADDRESS',
        self::UNKNOWN_INTERNAL_ADDRESS => 'UNKNOWN_INTERNAL_ADDRESS',
        self::FORWARDING_RULE_MISMATCH => 'FORWARDING_RULE_MISMATCH',
        self::FORWARDING_RULE_NO_INSTANCES => 'FORWARDING_RULE_NO_INSTANCES',
        self::FIREWALL_BLOCKING_LOAD_BALANCER_BACKEND_HEALTH_CHECK => 'FIREWALL_BLOCKING_LOAD_BALANCER_BACKEND_HEALTH_CHECK',
        self::INSTANCE_NOT_RUNNING => 'INSTANCE_NOT_RUNNING',
        self::TRAFFIC_TYPE_BLOCKED => 'TRAFFIC_TYPE_BLOCKED',
        self::GKE_MASTER_UNAUTHORIZED_ACCESS => 'GKE_MASTER_UNAUTHORIZED_ACCESS',
        self::CLOUD_SQL_INSTANCE_UNAUTHORIZED_ACCESS => 'CLOUD_SQL_INSTANCE_UNAUTHORIZED_ACCESS',
        self::DROPPED_INSIDE_GKE_SERVICE => 'DROPPED_INSIDE_GKE_SERVICE',
        self::DROPPED_INSIDE_CLOUD_SQL_SERVICE => 'DROPPED_INSIDE_CLOUD_SQL_SERVICE',
        self::GOOGLE_MANAGED_SERVICE_NO_PEERING => 'GOOGLE_MANAGED_SERVICE_NO_PEERING',
        self::CLOUD_SQL_INSTANCE_NO_IP_ADDRESS => 'CLOUD_SQL_INSTANCE_NO_IP_ADDRESS',
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
class_alias(Cause::class, \Google\Cloud\NetworkManagement\V1\DropInfo_Cause::class);

