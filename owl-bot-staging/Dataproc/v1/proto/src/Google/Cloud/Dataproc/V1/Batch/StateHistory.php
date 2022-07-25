<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/batches.proto

namespace Google\Cloud\Dataproc\V1\Batch;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Historical state information.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.Batch.StateHistory</code>
 */
class StateHistory extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The state of the batch at this point in history.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Batch.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. Details about the state at this point in history.
     *
     * Generated from protobuf field <code>string state_message = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_message = '';
    /**
     * Output only. The time when the batch entered the historical state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_start_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Output only. The state of the batch at this point in history.
     *     @type string $state_message
     *           Output only. Details about the state at this point in history.
     *     @type \Google\Protobuf\Timestamp $state_start_time
     *           Output only. The time when the batch entered the historical state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Batches::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The state of the batch at this point in history.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Batch.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of the batch at this point in history.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Batch.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1\Batch\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Details about the state at this point in history.
     *
     * Generated from protobuf field <code>string state_message = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStateMessage()
    {
        return $this->state_message;
    }

    /**
     * Output only. Details about the state at this point in history.
     *
     * Generated from protobuf field <code>string state_message = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStateMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_message = $var;

        return $this;
    }

    /**
     * Output only. The time when the batch entered the historical state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStateStartTime()
    {
        return $this->state_start_time;
    }

    public function hasStateStartTime()
    {
        return isset($this->state_start_time);
    }

    public function clearStateStartTime()
    {
        unset($this->state_start_time);
    }

    /**
     * Output only. The time when the batch entered the historical state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStateStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->state_start_time = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StateHistory::class, \Google\Cloud\Dataproc\V1\Batch_StateHistory::class);

