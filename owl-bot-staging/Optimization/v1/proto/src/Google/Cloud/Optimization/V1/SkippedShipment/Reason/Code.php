<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\SkippedShipment\Reason;

use UnexpectedValueException;

/**
 * Code identifying the reason type. The order here is meaningless. In
 * particular, it gives no indication of whether a given reason will
 * appear before another in the solution, if both apply.
 *
 * Protobuf type <code>google.cloud.optimization.v1.SkippedShipment.Reason.Code</code>
 */
class Code
{
    /**
     * This should never be used. If we are unable to understand why a
     * shipment was skipped, we simply return an empty set of reasons.
     *
     * Generated from protobuf enum <code>CODE_UNSPECIFIED = 0;</code>
     */
    const CODE_UNSPECIFIED = 0;
    /**
     * There is no vehicle in the model making all shipments infeasible.
     *
     * Generated from protobuf enum <code>NO_VEHICLE = 1;</code>
     */
    const NO_VEHICLE = 1;
    /**
     * The demand of the shipment exceeds a vehicle's capacity for some
     * capacity types, one of which is `example_exceeded_capacity_type`.
     *
     * Generated from protobuf enum <code>DEMAND_EXCEEDS_VEHICLE_CAPACITY = 2;</code>
     */
    const DEMAND_EXCEEDS_VEHICLE_CAPACITY = 2;
    /**
     * The minimum distance necessary to perform this shipment, i.e. from
     * the vehicle's `start_location` to the shipment's pickup and/or delivery
     * locations and to the vehicle's end location exceeds the vehicle's
     * `route_distance_limit`.
     * Note that for this computation we use the geodesic distances.
     *
     * Generated from protobuf enum <code>CANNOT_BE_PERFORMED_WITHIN_VEHICLE_DISTANCE_LIMIT = 3;</code>
     */
    const CANNOT_BE_PERFORMED_WITHIN_VEHICLE_DISTANCE_LIMIT = 3;
    /**
     * The minimum time necessary to perform this shipment, including travel
     * time, wait time and service time exceeds the vehicle's
     * `route_duration_limit`.
     * Note: travel time is computed in the best-case scenario, namely as
     * geodesic distance x 36 m/s (roughly 130 km/hour).
     *
     * Generated from protobuf enum <code>CANNOT_BE_PERFORMED_WITHIN_VEHICLE_DURATION_LIMIT = 4;</code>
     */
    const CANNOT_BE_PERFORMED_WITHIN_VEHICLE_DURATION_LIMIT = 4;
    /**
     * Same as above but we only compare minimum travel time and the
     * vehicle's `travel_duration_limit`.
     *
     * Generated from protobuf enum <code>CANNOT_BE_PERFORMED_WITHIN_VEHICLE_TRAVEL_DURATION_LIMIT = 5;</code>
     */
    const CANNOT_BE_PERFORMED_WITHIN_VEHICLE_TRAVEL_DURATION_LIMIT = 5;
    /**
     * The vehicle cannot perform this shipment in the best-case scenario
     * (see `CANNOT_BE_PERFORMED_WITHIN_VEHICLE_DURATION_LIMIT` for time
     * computation) if it starts at its earliest start time: the total time
     * would make the vehicle end after its latest end time.
     *
     * Generated from protobuf enum <code>CANNOT_BE_PERFORMED_WITHIN_VEHICLE_TIME_WINDOWS = 6;</code>
     */
    const CANNOT_BE_PERFORMED_WITHIN_VEHICLE_TIME_WINDOWS = 6;
    /**
     * The `allowed_vehicle_indices` field of the shipment is not empty and
     * this vehicle does not belong to it.
     *
     * Generated from protobuf enum <code>VEHICLE_NOT_ALLOWED = 7;</code>
     */
    const VEHICLE_NOT_ALLOWED = 7;

    private static $valueToName = [
        self::CODE_UNSPECIFIED => 'CODE_UNSPECIFIED',
        self::NO_VEHICLE => 'NO_VEHICLE',
        self::DEMAND_EXCEEDS_VEHICLE_CAPACITY => 'DEMAND_EXCEEDS_VEHICLE_CAPACITY',
        self::CANNOT_BE_PERFORMED_WITHIN_VEHICLE_DISTANCE_LIMIT => 'CANNOT_BE_PERFORMED_WITHIN_VEHICLE_DISTANCE_LIMIT',
        self::CANNOT_BE_PERFORMED_WITHIN_VEHICLE_DURATION_LIMIT => 'CANNOT_BE_PERFORMED_WITHIN_VEHICLE_DURATION_LIMIT',
        self::CANNOT_BE_PERFORMED_WITHIN_VEHICLE_TRAVEL_DURATION_LIMIT => 'CANNOT_BE_PERFORMED_WITHIN_VEHICLE_TRAVEL_DURATION_LIMIT',
        self::CANNOT_BE_PERFORMED_WITHIN_VEHICLE_TIME_WINDOWS => 'CANNOT_BE_PERFORMED_WITHIN_VEHICLE_TIME_WINDOWS',
        self::VEHICLE_NOT_ALLOWED => 'VEHICLE_NOT_ALLOWED',
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
class_alias(Code::class, \Google\Cloud\Optimization\V1\SkippedShipment_Reason_Code::class);

