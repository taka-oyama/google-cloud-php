<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The shipment of a single item, from one of its pickups to one of its
 * deliveries. For the shipment to be considered as performed, a unique vehicle
 * must visit one of its pickup locations (and decrease its spare capacities
 * accordingly), then visit one of its delivery locations later on (and
 * therefore re-increase its spare capacities accordingly).
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.Shipment</code>
 */
class Shipment extends \Google\Protobuf\Internal\Message
{
    /**
     * Set of pickup alternatives associated to the shipment. If not specified,
     * the vehicle only needs to visit a location corresponding to the deliveries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.Shipment.VisitRequest pickups = 1;</code>
     */
    private $pickups;
    /**
     * Set of delivery alternatives associated to the shipment. If not specified,
     * the vehicle only needs to visit a location corresponding to the pickups.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.Shipment.VisitRequest deliveries = 2;</code>
     */
    private $deliveries;
    /**
     * Load demands of the shipment (for example weight, volume, number of
     * pallets etc). The keys in the map should be identifiers describing the type
     * of the corresponding load, ideally also including the units.
     * For example: "weight_kg", "volume_gallons", "pallet_count", etc.
     * If a given key does not appear in the map, the corresponding load is
     * considered as null.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.optimization.v1.Shipment.Load> load_demands = 14;</code>
     */
    private $load_demands;
    /**
     * If the shipment is not completed, this penalty is added to the overall
     * cost of the routes. A shipment is considered completed if one of its pickup
     * and delivery alternatives is visited. The cost may be expressed in the
     * same unit used for all other cost-related fields in the model and must be
     * positive.
     * *IMPORTANT*: If this penalty is not specified, it is considered infinite,
     * i.e. the shipment must be completed.
     *
     * Generated from protobuf field <code>optional double penalty_cost = 4;</code>
     */
    protected $penalty_cost = null;
    /**
     * The set of vehicles that may perform this shipment. If empty, all vehicles
     * may perform it. Vehicles are given by their index in the `ShipmentModel`'s
     * `vehicles` list.
     *
     * Generated from protobuf field <code>repeated int32 allowed_vehicle_indices = 5;</code>
     */
    private $allowed_vehicle_indices;
    /**
     * Specifies the cost that is incurred when this shipment is delivered by each
     * vehicle. If specified, it must have EITHER:
     *   * the same number of elements as `costs_per_vehicle_indices`.
     *     `costs_per_vehicle[i]` corresponds to vehicle
     *     `costs_per_vehicle_indices[i]` of the model.
     *   * the same number of elements as there are vehicles in the model. The
     *     i-th element corresponds to vehicle #i of the model.
     * These costs must be in the same unit as `penalty_cost` and must not be
     * negative. Leave this field empty, if there are no such costs.
     *
     * Generated from protobuf field <code>repeated double costs_per_vehicle = 6;</code>
     */
    private $costs_per_vehicle;
    /**
     * Indices of the vehicles to which `costs_per_vehicle` applies. If non-empty,
     * it must have the same number of elements as `costs_per_vehicle`. A vehicle
     * index may not be specified more than once. If a vehicle is excluded from
     * `costs_per_vehicle_indices`, its cost is zero.
     *
     * Generated from protobuf field <code>repeated int32 costs_per_vehicle_indices = 7;</code>
     */
    private $costs_per_vehicle_indices;
    /**
     * Specifies the maximum relative detour time compared to the shortest path
     * from pickup to delivery. If specified, it must be nonnegative, and the
     * shipment must contain at least a pickup and a delivery.
     * For example, let t be the shortest time taken to go from the selected
     * pickup alternative directly to the selected delivery alternative. Then
     * setting `pickup_to_delivery_relative_detour_limit` enforces:
     * ```
     * start_time(delivery) - start_time(pickup) <=
     * std::ceil(t * (1.0 + pickup_to_delivery_relative_detour_limit))
     * ```
     * If both relative and absolute limits are specified on the same shipment,
     * the more constraining limit is used for each possible pickup/delivery pair.
     * As of 2017/10, detours are only supported when travel durations do not
     * depend on vehicles.
     *
     * Generated from protobuf field <code>optional double pickup_to_delivery_relative_detour_limit = 8;</code>
     */
    protected $pickup_to_delivery_relative_detour_limit = null;
    /**
     * Specifies the maximum absolute detour time compared to the shortest path
     * from pickup to delivery. If specified, it must be nonnegative, and the
     * shipment must contain at least a pickup and a delivery.
     * For example, let t be the shortest time taken to go from the selected
     * pickup alternative directly to the selected delivery alternative. Then
     * setting `pickup_to_delivery_absolute_detour_limit` enforces:
     * ```
     * start_time(delivery) - start_time(pickup) <=
     * t + pickup_to_delivery_absolute_detour_limit
     * ```
     * If both relative and absolute limits are specified on the same shipment,
     * the more constraining limit is used for each possible pickup/delivery pair.
     * As of 2017/10, detours are only supported when travel durations do not
     * depend on vehicles.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration pickup_to_delivery_absolute_detour_limit = 9;</code>
     */
    protected $pickup_to_delivery_absolute_detour_limit = null;
    /**
     * Specifies the maximum duration from start of pickup to start of delivery of
     * a shipment. If specified, it must be nonnegative, and the shipment must
     * contain at least a pickup and a delivery. This does not depend on which
     * alternatives are selected for pickup and delivery, nor on vehicle speed.
     * This can be specified alongside maximum detour constraints: the solution
     * will respect both specifications.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration pickup_to_delivery_time_limit = 10;</code>
     */
    protected $pickup_to_delivery_time_limit = null;
    /**
     * Non-empty string specifying a "type" for this shipment.
     * This feature can be used to define incompatibilities or requirements
     * between `shipment_types` (see `shipment_type_incompatibilities` and
     * `shipment_type_requirements` in `ShipmentModel`).
     * Differs from `visit_types` which is specified for a single visit: All
     * pickup/deliveries belonging to the same shipment share the same
     * `shipment_type`.
     *
     * Generated from protobuf field <code>string shipment_type = 11;</code>
     */
    protected $shipment_type = '';
    /**
     * Specifies a label for this shipment. This label is reported in the response
     * in the `shipment_label` of the corresponding [ShipmentRoute.Visit][google.cloud.optimization.v1.ShipmentRoute.Visit].
     *
     * Generated from protobuf field <code>string label = 12;</code>
     */
    protected $label = '';
    /**
     * If true, skip this shipment, but don't apply a `penalty_cost`.
     * Ignoring a shipment results in a validation error when there are any
     * `shipment_type_requirements` in the model.
     * Ignoring a shipment that is performed in `injected_first_solution_routes`
     * or `injected_solution_constraint` is permitted; the solver removes the
     * related pickup/delivery visits from the performing route.
     * `precedence_rules` that reference ignored shipments will also be ignored.
     *
     * Generated from protobuf field <code>bool ignore = 13;</code>
     */
    protected $ignore = false;
    /**
     * Deprecated: Use [Shipment.load_demands][] instead.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.CapacityQuantity demands = 3 [deprecated = true];</code>
     * @deprecated
     */
    private $demands;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Optimization\V1\Shipment\VisitRequest>|\Google\Protobuf\Internal\RepeatedField $pickups
     *           Set of pickup alternatives associated to the shipment. If not specified,
     *           the vehicle only needs to visit a location corresponding to the deliveries.
     *     @type array<\Google\Cloud\Optimization\V1\Shipment\VisitRequest>|\Google\Protobuf\Internal\RepeatedField $deliveries
     *           Set of delivery alternatives associated to the shipment. If not specified,
     *           the vehicle only needs to visit a location corresponding to the pickups.
     *     @type array|\Google\Protobuf\Internal\MapField $load_demands
     *           Load demands of the shipment (for example weight, volume, number of
     *           pallets etc). The keys in the map should be identifiers describing the type
     *           of the corresponding load, ideally also including the units.
     *           For example: "weight_kg", "volume_gallons", "pallet_count", etc.
     *           If a given key does not appear in the map, the corresponding load is
     *           considered as null.
     *     @type float $penalty_cost
     *           If the shipment is not completed, this penalty is added to the overall
     *           cost of the routes. A shipment is considered completed if one of its pickup
     *           and delivery alternatives is visited. The cost may be expressed in the
     *           same unit used for all other cost-related fields in the model and must be
     *           positive.
     *           *IMPORTANT*: If this penalty is not specified, it is considered infinite,
     *           i.e. the shipment must be completed.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $allowed_vehicle_indices
     *           The set of vehicles that may perform this shipment. If empty, all vehicles
     *           may perform it. Vehicles are given by their index in the `ShipmentModel`'s
     *           `vehicles` list.
     *     @type array<float>|\Google\Protobuf\Internal\RepeatedField $costs_per_vehicle
     *           Specifies the cost that is incurred when this shipment is delivered by each
     *           vehicle. If specified, it must have EITHER:
     *             * the same number of elements as `costs_per_vehicle_indices`.
     *               `costs_per_vehicle[i]` corresponds to vehicle
     *               `costs_per_vehicle_indices[i]` of the model.
     *             * the same number of elements as there are vehicles in the model. The
     *               i-th element corresponds to vehicle #i of the model.
     *           These costs must be in the same unit as `penalty_cost` and must not be
     *           negative. Leave this field empty, if there are no such costs.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $costs_per_vehicle_indices
     *           Indices of the vehicles to which `costs_per_vehicle` applies. If non-empty,
     *           it must have the same number of elements as `costs_per_vehicle`. A vehicle
     *           index may not be specified more than once. If a vehicle is excluded from
     *           `costs_per_vehicle_indices`, its cost is zero.
     *     @type float $pickup_to_delivery_relative_detour_limit
     *           Specifies the maximum relative detour time compared to the shortest path
     *           from pickup to delivery. If specified, it must be nonnegative, and the
     *           shipment must contain at least a pickup and a delivery.
     *           For example, let t be the shortest time taken to go from the selected
     *           pickup alternative directly to the selected delivery alternative. Then
     *           setting `pickup_to_delivery_relative_detour_limit` enforces:
     *           ```
     *           start_time(delivery) - start_time(pickup) <=
     *           std::ceil(t * (1.0 + pickup_to_delivery_relative_detour_limit))
     *           ```
     *           If both relative and absolute limits are specified on the same shipment,
     *           the more constraining limit is used for each possible pickup/delivery pair.
     *           As of 2017/10, detours are only supported when travel durations do not
     *           depend on vehicles.
     *     @type \Google\Protobuf\Duration $pickup_to_delivery_absolute_detour_limit
     *           Specifies the maximum absolute detour time compared to the shortest path
     *           from pickup to delivery. If specified, it must be nonnegative, and the
     *           shipment must contain at least a pickup and a delivery.
     *           For example, let t be the shortest time taken to go from the selected
     *           pickup alternative directly to the selected delivery alternative. Then
     *           setting `pickup_to_delivery_absolute_detour_limit` enforces:
     *           ```
     *           start_time(delivery) - start_time(pickup) <=
     *           t + pickup_to_delivery_absolute_detour_limit
     *           ```
     *           If both relative and absolute limits are specified on the same shipment,
     *           the more constraining limit is used for each possible pickup/delivery pair.
     *           As of 2017/10, detours are only supported when travel durations do not
     *           depend on vehicles.
     *     @type \Google\Protobuf\Duration $pickup_to_delivery_time_limit
     *           Specifies the maximum duration from start of pickup to start of delivery of
     *           a shipment. If specified, it must be nonnegative, and the shipment must
     *           contain at least a pickup and a delivery. This does not depend on which
     *           alternatives are selected for pickup and delivery, nor on vehicle speed.
     *           This can be specified alongside maximum detour constraints: the solution
     *           will respect both specifications.
     *     @type string $shipment_type
     *           Non-empty string specifying a "type" for this shipment.
     *           This feature can be used to define incompatibilities or requirements
     *           between `shipment_types` (see `shipment_type_incompatibilities` and
     *           `shipment_type_requirements` in `ShipmentModel`).
     *           Differs from `visit_types` which is specified for a single visit: All
     *           pickup/deliveries belonging to the same shipment share the same
     *           `shipment_type`.
     *     @type string $label
     *           Specifies a label for this shipment. This label is reported in the response
     *           in the `shipment_label` of the corresponding [ShipmentRoute.Visit][google.cloud.optimization.v1.ShipmentRoute.Visit].
     *     @type bool $ignore
     *           If true, skip this shipment, but don't apply a `penalty_cost`.
     *           Ignoring a shipment results in a validation error when there are any
     *           `shipment_type_requirements` in the model.
     *           Ignoring a shipment that is performed in `injected_first_solution_routes`
     *           or `injected_solution_constraint` is permitted; the solver removes the
     *           related pickup/delivery visits from the performing route.
     *           `precedence_rules` that reference ignored shipments will also be ignored.
     *     @type array<\Google\Cloud\Optimization\V1\CapacityQuantity>|\Google\Protobuf\Internal\RepeatedField $demands
     *           Deprecated: Use [Shipment.load_demands][] instead.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * Set of pickup alternatives associated to the shipment. If not specified,
     * the vehicle only needs to visit a location corresponding to the deliveries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.Shipment.VisitRequest pickups = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPickups()
    {
        return $this->pickups;
    }

    /**
     * Set of pickup alternatives associated to the shipment. If not specified,
     * the vehicle only needs to visit a location corresponding to the deliveries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.Shipment.VisitRequest pickups = 1;</code>
     * @param array<\Google\Cloud\Optimization\V1\Shipment\VisitRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPickups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\Shipment\VisitRequest::class);
        $this->pickups = $arr;

        return $this;
    }

    /**
     * Set of delivery alternatives associated to the shipment. If not specified,
     * the vehicle only needs to visit a location corresponding to the pickups.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.Shipment.VisitRequest deliveries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeliveries()
    {
        return $this->deliveries;
    }

    /**
     * Set of delivery alternatives associated to the shipment. If not specified,
     * the vehicle only needs to visit a location corresponding to the pickups.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.Shipment.VisitRequest deliveries = 2;</code>
     * @param array<\Google\Cloud\Optimization\V1\Shipment\VisitRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeliveries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\Shipment\VisitRequest::class);
        $this->deliveries = $arr;

        return $this;
    }

    /**
     * Load demands of the shipment (for example weight, volume, number of
     * pallets etc). The keys in the map should be identifiers describing the type
     * of the corresponding load, ideally also including the units.
     * For example: "weight_kg", "volume_gallons", "pallet_count", etc.
     * If a given key does not appear in the map, the corresponding load is
     * considered as null.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.optimization.v1.Shipment.Load> load_demands = 14;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLoadDemands()
    {
        return $this->load_demands;
    }

    /**
     * Load demands of the shipment (for example weight, volume, number of
     * pallets etc). The keys in the map should be identifiers describing the type
     * of the corresponding load, ideally also including the units.
     * For example: "weight_kg", "volume_gallons", "pallet_count", etc.
     * If a given key does not appear in the map, the corresponding load is
     * considered as null.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.optimization.v1.Shipment.Load> load_demands = 14;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLoadDemands($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\Shipment\Load::class);
        $this->load_demands = $arr;

        return $this;
    }

    /**
     * If the shipment is not completed, this penalty is added to the overall
     * cost of the routes. A shipment is considered completed if one of its pickup
     * and delivery alternatives is visited. The cost may be expressed in the
     * same unit used for all other cost-related fields in the model and must be
     * positive.
     * *IMPORTANT*: If this penalty is not specified, it is considered infinite,
     * i.e. the shipment must be completed.
     *
     * Generated from protobuf field <code>optional double penalty_cost = 4;</code>
     * @return float
     */
    public function getPenaltyCost()
    {
        return isset($this->penalty_cost) ? $this->penalty_cost : 0.0;
    }

    public function hasPenaltyCost()
    {
        return isset($this->penalty_cost);
    }

    public function clearPenaltyCost()
    {
        unset($this->penalty_cost);
    }

    /**
     * If the shipment is not completed, this penalty is added to the overall
     * cost of the routes. A shipment is considered completed if one of its pickup
     * and delivery alternatives is visited. The cost may be expressed in the
     * same unit used for all other cost-related fields in the model and must be
     * positive.
     * *IMPORTANT*: If this penalty is not specified, it is considered infinite,
     * i.e. the shipment must be completed.
     *
     * Generated from protobuf field <code>optional double penalty_cost = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setPenaltyCost($var)
    {
        GPBUtil::checkDouble($var);
        $this->penalty_cost = $var;

        return $this;
    }

    /**
     * The set of vehicles that may perform this shipment. If empty, all vehicles
     * may perform it. Vehicles are given by their index in the `ShipmentModel`'s
     * `vehicles` list.
     *
     * Generated from protobuf field <code>repeated int32 allowed_vehicle_indices = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedVehicleIndices()
    {
        return $this->allowed_vehicle_indices;
    }

    /**
     * The set of vehicles that may perform this shipment. If empty, all vehicles
     * may perform it. Vehicles are given by their index in the `ShipmentModel`'s
     * `vehicles` list.
     *
     * Generated from protobuf field <code>repeated int32 allowed_vehicle_indices = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedVehicleIndices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->allowed_vehicle_indices = $arr;

        return $this;
    }

    /**
     * Specifies the cost that is incurred when this shipment is delivered by each
     * vehicle. If specified, it must have EITHER:
     *   * the same number of elements as `costs_per_vehicle_indices`.
     *     `costs_per_vehicle[i]` corresponds to vehicle
     *     `costs_per_vehicle_indices[i]` of the model.
     *   * the same number of elements as there are vehicles in the model. The
     *     i-th element corresponds to vehicle #i of the model.
     * These costs must be in the same unit as `penalty_cost` and must not be
     * negative. Leave this field empty, if there are no such costs.
     *
     * Generated from protobuf field <code>repeated double costs_per_vehicle = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCostsPerVehicle()
    {
        return $this->costs_per_vehicle;
    }

    /**
     * Specifies the cost that is incurred when this shipment is delivered by each
     * vehicle. If specified, it must have EITHER:
     *   * the same number of elements as `costs_per_vehicle_indices`.
     *     `costs_per_vehicle[i]` corresponds to vehicle
     *     `costs_per_vehicle_indices[i]` of the model.
     *   * the same number of elements as there are vehicles in the model. The
     *     i-th element corresponds to vehicle #i of the model.
     * These costs must be in the same unit as `penalty_cost` and must not be
     * negative. Leave this field empty, if there are no such costs.
     *
     * Generated from protobuf field <code>repeated double costs_per_vehicle = 6;</code>
     * @param array<float>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCostsPerVehicle($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->costs_per_vehicle = $arr;

        return $this;
    }

    /**
     * Indices of the vehicles to which `costs_per_vehicle` applies. If non-empty,
     * it must have the same number of elements as `costs_per_vehicle`. A vehicle
     * index may not be specified more than once. If a vehicle is excluded from
     * `costs_per_vehicle_indices`, its cost is zero.
     *
     * Generated from protobuf field <code>repeated int32 costs_per_vehicle_indices = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCostsPerVehicleIndices()
    {
        return $this->costs_per_vehicle_indices;
    }

    /**
     * Indices of the vehicles to which `costs_per_vehicle` applies. If non-empty,
     * it must have the same number of elements as `costs_per_vehicle`. A vehicle
     * index may not be specified more than once. If a vehicle is excluded from
     * `costs_per_vehicle_indices`, its cost is zero.
     *
     * Generated from protobuf field <code>repeated int32 costs_per_vehicle_indices = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCostsPerVehicleIndices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->costs_per_vehicle_indices = $arr;

        return $this;
    }

    /**
     * Specifies the maximum relative detour time compared to the shortest path
     * from pickup to delivery. If specified, it must be nonnegative, and the
     * shipment must contain at least a pickup and a delivery.
     * For example, let t be the shortest time taken to go from the selected
     * pickup alternative directly to the selected delivery alternative. Then
     * setting `pickup_to_delivery_relative_detour_limit` enforces:
     * ```
     * start_time(delivery) - start_time(pickup) <=
     * std::ceil(t * (1.0 + pickup_to_delivery_relative_detour_limit))
     * ```
     * If both relative and absolute limits are specified on the same shipment,
     * the more constraining limit is used for each possible pickup/delivery pair.
     * As of 2017/10, detours are only supported when travel durations do not
     * depend on vehicles.
     *
     * Generated from protobuf field <code>optional double pickup_to_delivery_relative_detour_limit = 8;</code>
     * @return float
     */
    public function getPickupToDeliveryRelativeDetourLimit()
    {
        return isset($this->pickup_to_delivery_relative_detour_limit) ? $this->pickup_to_delivery_relative_detour_limit : 0.0;
    }

    public function hasPickupToDeliveryRelativeDetourLimit()
    {
        return isset($this->pickup_to_delivery_relative_detour_limit);
    }

    public function clearPickupToDeliveryRelativeDetourLimit()
    {
        unset($this->pickup_to_delivery_relative_detour_limit);
    }

    /**
     * Specifies the maximum relative detour time compared to the shortest path
     * from pickup to delivery. If specified, it must be nonnegative, and the
     * shipment must contain at least a pickup and a delivery.
     * For example, let t be the shortest time taken to go from the selected
     * pickup alternative directly to the selected delivery alternative. Then
     * setting `pickup_to_delivery_relative_detour_limit` enforces:
     * ```
     * start_time(delivery) - start_time(pickup) <=
     * std::ceil(t * (1.0 + pickup_to_delivery_relative_detour_limit))
     * ```
     * If both relative and absolute limits are specified on the same shipment,
     * the more constraining limit is used for each possible pickup/delivery pair.
     * As of 2017/10, detours are only supported when travel durations do not
     * depend on vehicles.
     *
     * Generated from protobuf field <code>optional double pickup_to_delivery_relative_detour_limit = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setPickupToDeliveryRelativeDetourLimit($var)
    {
        GPBUtil::checkDouble($var);
        $this->pickup_to_delivery_relative_detour_limit = $var;

        return $this;
    }

    /**
     * Specifies the maximum absolute detour time compared to the shortest path
     * from pickup to delivery. If specified, it must be nonnegative, and the
     * shipment must contain at least a pickup and a delivery.
     * For example, let t be the shortest time taken to go from the selected
     * pickup alternative directly to the selected delivery alternative. Then
     * setting `pickup_to_delivery_absolute_detour_limit` enforces:
     * ```
     * start_time(delivery) - start_time(pickup) <=
     * t + pickup_to_delivery_absolute_detour_limit
     * ```
     * If both relative and absolute limits are specified on the same shipment,
     * the more constraining limit is used for each possible pickup/delivery pair.
     * As of 2017/10, detours are only supported when travel durations do not
     * depend on vehicles.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration pickup_to_delivery_absolute_detour_limit = 9;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getPickupToDeliveryAbsoluteDetourLimit()
    {
        return $this->pickup_to_delivery_absolute_detour_limit;
    }

    public function hasPickupToDeliveryAbsoluteDetourLimit()
    {
        return isset($this->pickup_to_delivery_absolute_detour_limit);
    }

    public function clearPickupToDeliveryAbsoluteDetourLimit()
    {
        unset($this->pickup_to_delivery_absolute_detour_limit);
    }

    /**
     * Specifies the maximum absolute detour time compared to the shortest path
     * from pickup to delivery. If specified, it must be nonnegative, and the
     * shipment must contain at least a pickup and a delivery.
     * For example, let t be the shortest time taken to go from the selected
     * pickup alternative directly to the selected delivery alternative. Then
     * setting `pickup_to_delivery_absolute_detour_limit` enforces:
     * ```
     * start_time(delivery) - start_time(pickup) <=
     * t + pickup_to_delivery_absolute_detour_limit
     * ```
     * If both relative and absolute limits are specified on the same shipment,
     * the more constraining limit is used for each possible pickup/delivery pair.
     * As of 2017/10, detours are only supported when travel durations do not
     * depend on vehicles.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration pickup_to_delivery_absolute_detour_limit = 9;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPickupToDeliveryAbsoluteDetourLimit($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->pickup_to_delivery_absolute_detour_limit = $var;

        return $this;
    }

    /**
     * Specifies the maximum duration from start of pickup to start of delivery of
     * a shipment. If specified, it must be nonnegative, and the shipment must
     * contain at least a pickup and a delivery. This does not depend on which
     * alternatives are selected for pickup and delivery, nor on vehicle speed.
     * This can be specified alongside maximum detour constraints: the solution
     * will respect both specifications.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration pickup_to_delivery_time_limit = 10;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getPickupToDeliveryTimeLimit()
    {
        return $this->pickup_to_delivery_time_limit;
    }

    public function hasPickupToDeliveryTimeLimit()
    {
        return isset($this->pickup_to_delivery_time_limit);
    }

    public function clearPickupToDeliveryTimeLimit()
    {
        unset($this->pickup_to_delivery_time_limit);
    }

    /**
     * Specifies the maximum duration from start of pickup to start of delivery of
     * a shipment. If specified, it must be nonnegative, and the shipment must
     * contain at least a pickup and a delivery. This does not depend on which
     * alternatives are selected for pickup and delivery, nor on vehicle speed.
     * This can be specified alongside maximum detour constraints: the solution
     * will respect both specifications.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration pickup_to_delivery_time_limit = 10;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPickupToDeliveryTimeLimit($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->pickup_to_delivery_time_limit = $var;

        return $this;
    }

    /**
     * Non-empty string specifying a "type" for this shipment.
     * This feature can be used to define incompatibilities or requirements
     * between `shipment_types` (see `shipment_type_incompatibilities` and
     * `shipment_type_requirements` in `ShipmentModel`).
     * Differs from `visit_types` which is specified for a single visit: All
     * pickup/deliveries belonging to the same shipment share the same
     * `shipment_type`.
     *
     * Generated from protobuf field <code>string shipment_type = 11;</code>
     * @return string
     */
    public function getShipmentType()
    {
        return $this->shipment_type;
    }

    /**
     * Non-empty string specifying a "type" for this shipment.
     * This feature can be used to define incompatibilities or requirements
     * between `shipment_types` (see `shipment_type_incompatibilities` and
     * `shipment_type_requirements` in `ShipmentModel`).
     * Differs from `visit_types` which is specified for a single visit: All
     * pickup/deliveries belonging to the same shipment share the same
     * `shipment_type`.
     *
     * Generated from protobuf field <code>string shipment_type = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setShipmentType($var)
    {
        GPBUtil::checkString($var, True);
        $this->shipment_type = $var;

        return $this;
    }

    /**
     * Specifies a label for this shipment. This label is reported in the response
     * in the `shipment_label` of the corresponding [ShipmentRoute.Visit][google.cloud.optimization.v1.ShipmentRoute.Visit].
     *
     * Generated from protobuf field <code>string label = 12;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Specifies a label for this shipment. This label is reported in the response
     * in the `shipment_label` of the corresponding [ShipmentRoute.Visit][google.cloud.optimization.v1.ShipmentRoute.Visit].
     *
     * Generated from protobuf field <code>string label = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * If true, skip this shipment, but don't apply a `penalty_cost`.
     * Ignoring a shipment results in a validation error when there are any
     * `shipment_type_requirements` in the model.
     * Ignoring a shipment that is performed in `injected_first_solution_routes`
     * or `injected_solution_constraint` is permitted; the solver removes the
     * related pickup/delivery visits from the performing route.
     * `precedence_rules` that reference ignored shipments will also be ignored.
     *
     * Generated from protobuf field <code>bool ignore = 13;</code>
     * @return bool
     */
    public function getIgnore()
    {
        return $this->ignore;
    }

    /**
     * If true, skip this shipment, but don't apply a `penalty_cost`.
     * Ignoring a shipment results in a validation error when there are any
     * `shipment_type_requirements` in the model.
     * Ignoring a shipment that is performed in `injected_first_solution_routes`
     * or `injected_solution_constraint` is permitted; the solver removes the
     * related pickup/delivery visits from the performing route.
     * `precedence_rules` that reference ignored shipments will also be ignored.
     *
     * Generated from protobuf field <code>bool ignore = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnore($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore = $var;

        return $this;
    }

    /**
     * Deprecated: Use [Shipment.load_demands][] instead.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.CapacityQuantity demands = 3 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getDemands()
    {
        @trigger_error('demands is deprecated.', E_USER_DEPRECATED);
        return $this->demands;
    }

    /**
     * Deprecated: Use [Shipment.load_demands][] instead.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.CapacityQuantity demands = 3 [deprecated = true];</code>
     * @param array<\Google\Cloud\Optimization\V1\CapacityQuantity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setDemands($var)
    {
        @trigger_error('demands is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\CapacityQuantity::class);
        $this->demands = $arr;

        return $this;
    }

}

