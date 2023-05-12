<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/gkebackup.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListVolumeBackups.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.ListVolumeBackupsRequest</code>
 */
class ListVolumeBackupsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Backup that contains the VolumeBackups to list.
     * Format: projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The target number of results to return in a single response.
     * If not specified, a default value will be chosen by the service.
     * Note that the response may inclue a partial list and a caller should
     * only rely on the response's
     * [next_page_token][google.cloud.gkebackup.v1.ListVolumeBackupsResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The value of
     * [next_page_token][google.cloud.gkebackup.v1.ListVolumeBackupsResponse.next_page_token]
     * received from a previous `ListVolumeBackups` call.
     * Provide this to retrieve the subsequent page in a multi-page list of
     * results. When paginating, all other parameters provided to
     * `ListVolumeBackups` must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Field match expression used to filter the results.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    private $filter = '';
    /**
     * Field by which to sort the results.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    private $order_by = '';

    /**
     * @param string $parent Required. The Backup that contains the VolumeBackups to list.
     *                       Format: projects/&#42;/locations/&#42;/backupPlans/&#42;/backups/*
     *                       Please see {@see BackupForGKEClient::backupName()} for help formatting this field.
     *
     * @return \Google\Cloud\GkeBackup\V1\ListVolumeBackupsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The Backup that contains the VolumeBackups to list.
     *           Format: projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;
     *     @type int $page_size
     *           The target number of results to return in a single response.
     *           If not specified, a default value will be chosen by the service.
     *           Note that the response may inclue a partial list and a caller should
     *           only rely on the response's
     *           [next_page_token][google.cloud.gkebackup.v1.ListVolumeBackupsResponse.next_page_token]
     *           to determine if there are more instances left to be queried.
     *     @type string $page_token
     *           The value of
     *           [next_page_token][google.cloud.gkebackup.v1.ListVolumeBackupsResponse.next_page_token]
     *           received from a previous `ListVolumeBackups` call.
     *           Provide this to retrieve the subsequent page in a multi-page list of
     *           results. When paginating, all other parameters provided to
     *           `ListVolumeBackups` must match the call that provided the page token.
     *     @type string $filter
     *           Field match expression used to filter the results.
     *     @type string $order_by
     *           Field by which to sort the results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Gkebackup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Backup that contains the VolumeBackups to list.
     * Format: projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The Backup that contains the VolumeBackups to list.
     * Format: projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;&#47;backups/&#42;
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
     * The target number of results to return in a single response.
     * If not specified, a default value will be chosen by the service.
     * Note that the response may inclue a partial list and a caller should
     * only rely on the response's
     * [next_page_token][google.cloud.gkebackup.v1.ListVolumeBackupsResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The target number of results to return in a single response.
     * If not specified, a default value will be chosen by the service.
     * Note that the response may inclue a partial list and a caller should
     * only rely on the response's
     * [next_page_token][google.cloud.gkebackup.v1.ListVolumeBackupsResponse.next_page_token]
     * to determine if there are more instances left to be queried.
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
     * The value of
     * [next_page_token][google.cloud.gkebackup.v1.ListVolumeBackupsResponse.next_page_token]
     * received from a previous `ListVolumeBackups` call.
     * Provide this to retrieve the subsequent page in a multi-page list of
     * results. When paginating, all other parameters provided to
     * `ListVolumeBackups` must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value of
     * [next_page_token][google.cloud.gkebackup.v1.ListVolumeBackupsResponse.next_page_token]
     * received from a previous `ListVolumeBackups` call.
     * Provide this to retrieve the subsequent page in a multi-page list of
     * results. When paginating, all other parameters provided to
     * `ListVolumeBackups` must match the call that provided the page token.
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

    /**
     * Field match expression used to filter the results.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Field match expression used to filter the results.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Field by which to sort the results.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Field by which to sort the results.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

