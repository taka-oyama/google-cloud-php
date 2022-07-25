<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/batches.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to create a batch workload.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.CreateBatchRequest</code>
 */
class CreateBatchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource where this batch will be created.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The batch to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Batch batch = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $batch = null;
    /**
     * Optional. The ID to use for the batch, which will become the final component of
     * the batch's resource name.
     * This value must be 4-63 characters. Valid characters are `/[a-z][0-9]-/`.
     *
     * Generated from protobuf field <code>string batch_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $batch_id = '';
    /**
     * Optional. A unique ID used to identify the request. If the service
     * receives two
     * [CreateBatchRequest](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.CreateBatchRequest)s
     * with the same request_id, the second request is ignored and the
     * Operation that corresponds to the first Batch created and stored
     * in the backend is returned.
     * Recommendation: Set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The value must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource where this batch will be created.
     *     @type \Google\Cloud\Dataproc\V1\Batch $batch
     *           Required. The batch to create.
     *     @type string $batch_id
     *           Optional. The ID to use for the batch, which will become the final component of
     *           the batch's resource name.
     *           This value must be 4-63 characters. Valid characters are `/[a-z][0-9]-/`.
     *     @type string $request_id
     *           Optional. A unique ID used to identify the request. If the service
     *           receives two
     *           [CreateBatchRequest](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.CreateBatchRequest)s
     *           with the same request_id, the second request is ignored and the
     *           Operation that corresponds to the first Batch created and stored
     *           in the backend is returned.
     *           Recommendation: Set this value to a
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     *           The value must contain only letters (a-z, A-Z), numbers (0-9),
     *           underscores (_), and hyphens (-). The maximum length is 40 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Batches::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource where this batch will be created.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource where this batch will be created.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The batch to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Batch batch = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1\Batch|null
     */
    public function getBatch()
    {
        return $this->batch;
    }

    public function hasBatch()
    {
        return isset($this->batch);
    }

    public function clearBatch()
    {
        unset($this->batch);
    }

    /**
     * Required. The batch to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Batch batch = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1\Batch $var
     * @return $this
     */
    public function setBatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\Batch::class);
        $this->batch = $var;

        return $this;
    }

    /**
     * Optional. The ID to use for the batch, which will become the final component of
     * the batch's resource name.
     * This value must be 4-63 characters. Valid characters are `/[a-z][0-9]-/`.
     *
     * Generated from protobuf field <code>string batch_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getBatchId()
    {
        return $this->batch_id;
    }

    /**
     * Optional. The ID to use for the batch, which will become the final component of
     * the batch's resource name.
     * This value must be 4-63 characters. Valid characters are `/[a-z][0-9]-/`.
     *
     * Generated from protobuf field <code>string batch_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setBatchId($var)
    {
        GPBUtil::checkString($var, True);
        $this->batch_id = $var;

        return $this;
    }

    /**
     * Optional. A unique ID used to identify the request. If the service
     * receives two
     * [CreateBatchRequest](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.CreateBatchRequest)s
     * with the same request_id, the second request is ignored and the
     * Operation that corresponds to the first Batch created and stored
     * in the backend is returned.
     * Recommendation: Set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The value must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique ID used to identify the request. If the service
     * receives two
     * [CreateBatchRequest](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.CreateBatchRequest)s
     * with the same request_id, the second request is ignored and the
     * Operation that corresponds to the first Batch created and stored
     * in the backend is returned.
     * Recommendation: Set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The value must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

