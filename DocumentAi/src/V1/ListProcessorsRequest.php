<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for list all processors belongs to a project.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.ListProcessorsRequest</code>
 */
class ListProcessorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent (project and location) which owns this collection of
     * Processors. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of processors to return.
     * If unspecified, at most 50 processors will be returned.
     * The maximum value is 100; values above 100 will be coerced to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * We will return the processors sorted by creation time. The page token
     * will point to the next processor.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent (project and location) which owns this collection of
     *           Processors. Format: `projects/{project}/locations/{location}`
     *     @type int $page_size
     *           The maximum number of processors to return.
     *           If unspecified, at most 50 processors will be returned.
     *           The maximum value is 100; values above 100 will be coerced to 100.
     *     @type string $page_token
     *           We will return the processors sorted by creation time. The page token
     *           will point to the next processor.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent (project and location) which owns this collection of
     * Processors. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent (project and location) which owns this collection of
     * Processors. Format: `projects/{project}/locations/{location}`
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
     * The maximum number of processors to return.
     * If unspecified, at most 50 processors will be returned.
     * The maximum value is 100; values above 100 will be coerced to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of processors to return.
     * If unspecified, at most 50 processors will be returned.
     * The maximum value is 100; values above 100 will be coerced to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * We will return the processors sorted by creation time. The page token
     * will point to the next processor.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * We will return the processors sorted by creation time. The page token
     * will point to the next processor.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

