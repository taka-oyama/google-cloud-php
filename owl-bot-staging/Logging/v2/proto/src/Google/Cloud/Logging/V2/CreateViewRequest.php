<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to `CreateView`.
 *
 * Generated from protobuf message <code>google.logging.v2.CreateViewRequest</code>
 */
class CreateViewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The bucket in which to create the view
     *     `"projects/[PROJECT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]"`
     * For example:
     *   `"projects/my-project/locations/global/buckets/my-bucket"`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. The id to use for this view.
     *
     * Generated from protobuf field <code>string view_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $view_id = '';
    /**
     * Required. The new view.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogView view = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $view = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The bucket in which to create the view
     *               `"projects/[PROJECT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]"`
     *           For example:
     *             `"projects/my-project/locations/global/buckets/my-bucket"`
     *     @type string $view_id
     *           Required. The id to use for this view.
     *     @type \Google\Cloud\Logging\V2\LogView $view
     *           Required. The new view.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The bucket in which to create the view
     *     `"projects/[PROJECT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]"`
     * For example:
     *   `"projects/my-project/locations/global/buckets/my-bucket"`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The bucket in which to create the view
     *     `"projects/[PROJECT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]"`
     * For example:
     *   `"projects/my-project/locations/global/buckets/my-bucket"`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The id to use for this view.
     *
     * Generated from protobuf field <code>string view_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getViewId()
    {
        return $this->view_id;
    }

    /**
     * Required. The id to use for this view.
     *
     * Generated from protobuf field <code>string view_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setViewId($var)
    {
        GPBUtil::checkString($var, True);
        $this->view_id = $var;

        return $this;
    }

    /**
     * Required. The new view.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogView view = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Logging\V2\LogView|null
     */
    public function getView()
    {
        return $this->view;
    }

    public function hasView()
    {
        return isset($this->view);
    }

    public function clearView()
    {
        unset($this->view);
    }

    /**
     * Required. The new view.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogView view = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Logging\V2\LogView $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Logging\V2\LogView::class);
        $this->view = $var;

        return $this;
    }

}

