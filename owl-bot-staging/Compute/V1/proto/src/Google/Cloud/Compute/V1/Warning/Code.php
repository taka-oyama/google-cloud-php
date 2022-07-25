<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Warning;

use UnexpectedValueException;

/**
 * [Output Only] A warning code, if applicable. For example, Compute Engine returns NO_RESULTS_ON_PAGE if there are no results in the response.
 *
 * Protobuf type <code>google.cloud.compute.v1.Warning.Code</code>
 */
class Code
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_CODE = 0;</code>
     */
    const UNDEFINED_CODE = 0;
    /**
     * Warning about failed cleanup of transient changes made by a failed operation.
     *
     * Generated from protobuf enum <code>CLEANUP_FAILED = 150308440;</code>
     */
    const CLEANUP_FAILED = 150308440;
    /**
     * A link to a deprecated resource was created.
     *
     * Generated from protobuf enum <code>DEPRECATED_RESOURCE_USED = 391835586;</code>
     */
    const DEPRECATED_RESOURCE_USED = 391835586;
    /**
     * When deploying and at least one of the resources has a type marked as deprecated
     *
     * Generated from protobuf enum <code>DEPRECATED_TYPE_USED = 346526230;</code>
     */
    const DEPRECATED_TYPE_USED = 346526230;
    /**
     * The user created a boot disk that is larger than image size.
     *
     * Generated from protobuf enum <code>DISK_SIZE_LARGER_THAN_IMAGE_SIZE = 369442967;</code>
     */
    const DISK_SIZE_LARGER_THAN_IMAGE_SIZE = 369442967;
    /**
     * When deploying and at least one of the resources has a type marked as experimental
     *
     * Generated from protobuf enum <code>EXPERIMENTAL_TYPE_USED = 451954443;</code>
     */
    const EXPERIMENTAL_TYPE_USED = 451954443;
    /**
     * Warning that is present in an external api call
     *
     * Generated from protobuf enum <code>EXTERNAL_API_WARNING = 175546307;</code>
     */
    const EXTERNAL_API_WARNING = 175546307;
    /**
     * Warning that value of a field has been overridden. Deprecated unused field.
     *
     * Generated from protobuf enum <code>FIELD_VALUE_OVERRIDEN = 329669423;</code>
     */
    const FIELD_VALUE_OVERRIDEN = 329669423;
    /**
     * The operation involved use of an injected kernel, which is deprecated.
     *
     * Generated from protobuf enum <code>INJECTED_KERNELS_DEPRECATED = 417377419;</code>
     */
    const INJECTED_KERNELS_DEPRECATED = 417377419;
    /**
     * When deploying a deployment with a exceedingly large number of resources
     *
     * Generated from protobuf enum <code>LARGE_DEPLOYMENT_WARNING = 481440678;</code>
     */
    const LARGE_DEPLOYMENT_WARNING = 481440678;
    /**
     * A resource depends on a missing type
     *
     * Generated from protobuf enum <code>MISSING_TYPE_DEPENDENCY = 344505463;</code>
     */
    const MISSING_TYPE_DEPENDENCY = 344505463;
    /**
     * The route's nextHopIp address is not assigned to an instance on the network.
     *
     * Generated from protobuf enum <code>NEXT_HOP_ADDRESS_NOT_ASSIGNED = 324964999;</code>
     */
    const NEXT_HOP_ADDRESS_NOT_ASSIGNED = 324964999;
    /**
     * The route's next hop instance cannot ip forward.
     *
     * Generated from protobuf enum <code>NEXT_HOP_CANNOT_IP_FORWARD = 383382887;</code>
     */
    const NEXT_HOP_CANNOT_IP_FORWARD = 383382887;
    /**
     * The route's nextHopInstance URL refers to an instance that does not have an ipv6 interface on the same network as the route.
     *
     * Generated from protobuf enum <code>NEXT_HOP_INSTANCE_HAS_NO_IPV6_INTERFACE = 146748434;</code>
     */
    const NEXT_HOP_INSTANCE_HAS_NO_IPV6_INTERFACE = 146748434;
    /**
     * The route's nextHopInstance URL refers to an instance that does not exist.
     *
     * Generated from protobuf enum <code>NEXT_HOP_INSTANCE_NOT_FOUND = 464250446;</code>
     */
    const NEXT_HOP_INSTANCE_NOT_FOUND = 464250446;
    /**
     * The route's nextHopInstance URL refers to an instance that is not on the same network as the route.
     *
     * Generated from protobuf enum <code>NEXT_HOP_INSTANCE_NOT_ON_NETWORK = 243758146;</code>
     */
    const NEXT_HOP_INSTANCE_NOT_ON_NETWORK = 243758146;
    /**
     * The route's next hop instance does not have a status of RUNNING.
     *
     * Generated from protobuf enum <code>NEXT_HOP_NOT_RUNNING = 417081265;</code>
     */
    const NEXT_HOP_NOT_RUNNING = 417081265;
    /**
     * Error which is not critical. We decided to continue the process despite the mentioned error.
     *
     * Generated from protobuf enum <code>NOT_CRITICAL_ERROR = 105763924;</code>
     */
    const NOT_CRITICAL_ERROR = 105763924;
    /**
     * No results are present on a particular list page.
     *
     * Generated from protobuf enum <code>NO_RESULTS_ON_PAGE = 30036744;</code>
     */
    const NO_RESULTS_ON_PAGE = 30036744;
    /**
     * Success is reported, but some results may be missing due to errors
     *
     * Generated from protobuf enum <code>PARTIAL_SUCCESS = 39966469;</code>
     */
    const PARTIAL_SUCCESS = 39966469;
    /**
     * The user attempted to use a resource that requires a TOS they have not accepted.
     *
     * Generated from protobuf enum <code>REQUIRED_TOS_AGREEMENT = 3745539;</code>
     */
    const REQUIRED_TOS_AGREEMENT = 3745539;
    /**
     * Warning that a resource is in use.
     *
     * Generated from protobuf enum <code>RESOURCE_IN_USE_BY_OTHER_RESOURCE_WARNING = 496728641;</code>
     */
    const RESOURCE_IN_USE_BY_OTHER_RESOURCE_WARNING = 496728641;
    /**
     * One or more of the resources set to auto-delete could not be deleted because they were in use.
     *
     * Generated from protobuf enum <code>RESOURCE_NOT_DELETED = 168598460;</code>
     */
    const RESOURCE_NOT_DELETED = 168598460;
    /**
     * When a resource schema validation is ignored.
     *
     * Generated from protobuf enum <code>SCHEMA_VALIDATION_IGNORED = 275245642;</code>
     */
    const SCHEMA_VALIDATION_IGNORED = 275245642;
    /**
     * Instance template used in instance group manager is valid as such, but its application does not make a lot of sense, because it allows only single instance in instance group.
     *
     * Generated from protobuf enum <code>SINGLE_INSTANCE_PROPERTY_TEMPLATE = 268305617;</code>
     */
    const SINGLE_INSTANCE_PROPERTY_TEMPLATE = 268305617;
    /**
     * When undeclared properties in the schema are present
     *
     * Generated from protobuf enum <code>UNDECLARED_PROPERTIES = 390513439;</code>
     */
    const UNDECLARED_PROPERTIES = 390513439;
    /**
     * A given scope cannot be reached.
     *
     * Generated from protobuf enum <code>UNREACHABLE = 13328052;</code>
     */
    const UNREACHABLE = 13328052;

    private static $valueToName = [
        self::UNDEFINED_CODE => 'UNDEFINED_CODE',
        self::CLEANUP_FAILED => 'CLEANUP_FAILED',
        self::DEPRECATED_RESOURCE_USED => 'DEPRECATED_RESOURCE_USED',
        self::DEPRECATED_TYPE_USED => 'DEPRECATED_TYPE_USED',
        self::DISK_SIZE_LARGER_THAN_IMAGE_SIZE => 'DISK_SIZE_LARGER_THAN_IMAGE_SIZE',
        self::EXPERIMENTAL_TYPE_USED => 'EXPERIMENTAL_TYPE_USED',
        self::EXTERNAL_API_WARNING => 'EXTERNAL_API_WARNING',
        self::FIELD_VALUE_OVERRIDEN => 'FIELD_VALUE_OVERRIDEN',
        self::INJECTED_KERNELS_DEPRECATED => 'INJECTED_KERNELS_DEPRECATED',
        self::LARGE_DEPLOYMENT_WARNING => 'LARGE_DEPLOYMENT_WARNING',
        self::MISSING_TYPE_DEPENDENCY => 'MISSING_TYPE_DEPENDENCY',
        self::NEXT_HOP_ADDRESS_NOT_ASSIGNED => 'NEXT_HOP_ADDRESS_NOT_ASSIGNED',
        self::NEXT_HOP_CANNOT_IP_FORWARD => 'NEXT_HOP_CANNOT_IP_FORWARD',
        self::NEXT_HOP_INSTANCE_HAS_NO_IPV6_INTERFACE => 'NEXT_HOP_INSTANCE_HAS_NO_IPV6_INTERFACE',
        self::NEXT_HOP_INSTANCE_NOT_FOUND => 'NEXT_HOP_INSTANCE_NOT_FOUND',
        self::NEXT_HOP_INSTANCE_NOT_ON_NETWORK => 'NEXT_HOP_INSTANCE_NOT_ON_NETWORK',
        self::NEXT_HOP_NOT_RUNNING => 'NEXT_HOP_NOT_RUNNING',
        self::NOT_CRITICAL_ERROR => 'NOT_CRITICAL_ERROR',
        self::NO_RESULTS_ON_PAGE => 'NO_RESULTS_ON_PAGE',
        self::PARTIAL_SUCCESS => 'PARTIAL_SUCCESS',
        self::REQUIRED_TOS_AGREEMENT => 'REQUIRED_TOS_AGREEMENT',
        self::RESOURCE_IN_USE_BY_OTHER_RESOURCE_WARNING => 'RESOURCE_IN_USE_BY_OTHER_RESOURCE_WARNING',
        self::RESOURCE_NOT_DELETED => 'RESOURCE_NOT_DELETED',
        self::SCHEMA_VALIDATION_IGNORED => 'SCHEMA_VALIDATION_IGNORED',
        self::SINGLE_INSTANCE_PROPERTY_TEMPLATE => 'SINGLE_INSTANCE_PROPERTY_TEMPLATE',
        self::UNDECLARED_PROPERTIES => 'UNDECLARED_PROPERTIES',
        self::UNREACHABLE => 'UNREACHABLE',
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
class_alias(Code::class, \Google\Cloud\Compute\V1\Warning_Code::class);

