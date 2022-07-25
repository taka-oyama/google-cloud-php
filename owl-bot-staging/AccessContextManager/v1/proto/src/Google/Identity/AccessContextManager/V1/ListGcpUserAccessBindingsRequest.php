<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request of [ListGcpUserAccessBindings]
 * [google.identity.accesscontextmanager.v1.AccessContextManager.ListGcpUserAccessBindings].
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.ListGcpUserAccessBindingsRequest</code>
 */
class ListGcpUserAccessBindingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Example: "organizations/256"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Maximum number of items to return. The server may return fewer items.
     * If left blank, the server may return any number of items.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. If left blank, returns the first page. To enumerate all items, use the
     * [next_page_token]
     * [google.identity.accesscontextmanager.v1.ListGcpUserAccessBindingsResponse.next_page_token]
     * from your previous list operation.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Example: "organizations/256"
     *     @type int $page_size
     *           Optional. Maximum number of items to return. The server may return fewer items.
     *           If left blank, the server may return any number of items.
     *     @type string $page_token
     *           Optional. If left blank, returns the first page. To enumerate all items, use the
     *           [next_page_token]
     *           [google.identity.accesscontextmanager.v1.ListGcpUserAccessBindingsResponse.next_page_token]
     *           from your previous list operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Example: "organizations/256"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Example: "organizations/256"
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
     * Optional. Maximum number of items to return. The server may return fewer items.
     * If left blank, the server may return any number of items.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Maximum number of items to return. The server may return fewer items.
     * If left blank, the server may return any number of items.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. If left blank, returns the first page. To enumerate all items, use the
     * [next_page_token]
     * [google.identity.accesscontextmanager.v1.ListGcpUserAccessBindingsResponse.next_page_token]
     * from your previous list operation.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. If left blank, returns the first page. To enumerate all items, use the
     * [next_page_token]
     * [google.identity.accesscontextmanager.v1.ListGcpUserAccessBindingsResponse.next_page_token]
     * from your previous list operation.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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

