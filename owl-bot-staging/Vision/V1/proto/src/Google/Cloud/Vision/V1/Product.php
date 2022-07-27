<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search_service.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Product contains ReferenceImages.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.Product</code>
 */
class Product extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the product.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`.
     * This field is ignored when creating a product.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The user-provided name for this Product. Must not be empty. Must be at most
     * 4096 characters long.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * User-provided metadata to be stored with this product. Must be at most 4096
     * characters long.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Immutable. The category for the product identified by the reference image. This should
     * be one of "homegoods-v2", "apparel-v2", "toys-v2", "packagedgoods-v1" or
     * "general-v1". The legacy categories "homegoods", "apparel", and "toys" are
     * still supported, but these should not be used for new products.
     *
     * Generated from protobuf field <code>string product_category = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $product_category = '';
    /**
     * Key-value pairs that can be attached to a product. At query time,
     * constraints can be specified based on the product_labels.
     * Note that integer values can be provided as strings, e.g. "1199". Only
     * strings with integer values can match a range-based restriction which is
     * to be supported soon.
     * Multiple values can be assigned to the same key. One product may have up to
     * 500 product_labels.
     * Notice that the total number of distinct product_labels over all products
     * in one ProductSet cannot exceed 1M, otherwise the product search pipeline
     * will refuse to work for that ProductSet.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Product.KeyValue product_labels = 5;</code>
     */
    private $product_labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the product.
     *           Format is:
     *           `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`.
     *           This field is ignored when creating a product.
     *     @type string $display_name
     *           The user-provided name for this Product. Must not be empty. Must be at most
     *           4096 characters long.
     *     @type string $description
     *           User-provided metadata to be stored with this product. Must be at most 4096
     *           characters long.
     *     @type string $product_category
     *           Immutable. The category for the product identified by the reference image. This should
     *           be one of "homegoods-v2", "apparel-v2", "toys-v2", "packagedgoods-v1" or
     *           "general-v1". The legacy categories "homegoods", "apparel", and "toys" are
     *           still supported, but these should not be used for new products.
     *     @type array<\Google\Cloud\Vision\V1\Product\KeyValue>|\Google\Protobuf\Internal\RepeatedField $product_labels
     *           Key-value pairs that can be attached to a product. At query time,
     *           constraints can be specified based on the product_labels.
     *           Note that integer values can be provided as strings, e.g. "1199". Only
     *           strings with integer values can match a range-based restriction which is
     *           to be supported soon.
     *           Multiple values can be assigned to the same key. One product may have up to
     *           500 product_labels.
     *           Notice that the total number of distinct product_labels over all products
     *           in one ProductSet cannot exceed 1M, otherwise the product search pipeline
     *           will refuse to work for that ProductSet.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ProductSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the product.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`.
     * This field is ignored when creating a product.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the product.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`.
     * This field is ignored when creating a product.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The user-provided name for this Product. Must not be empty. Must be at most
     * 4096 characters long.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The user-provided name for this Product. Must not be empty. Must be at most
     * 4096 characters long.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * User-provided metadata to be stored with this product. Must be at most 4096
     * characters long.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * User-provided metadata to be stored with this product. Must be at most 4096
     * characters long.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Immutable. The category for the product identified by the reference image. This should
     * be one of "homegoods-v2", "apparel-v2", "toys-v2", "packagedgoods-v1" or
     * "general-v1". The legacy categories "homegoods", "apparel", and "toys" are
     * still supported, but these should not be used for new products.
     *
     * Generated from protobuf field <code>string product_category = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getProductCategory()
    {
        return $this->product_category;
    }

    /**
     * Immutable. The category for the product identified by the reference image. This should
     * be one of "homegoods-v2", "apparel-v2", "toys-v2", "packagedgoods-v1" or
     * "general-v1". The legacy categories "homegoods", "apparel", and "toys" are
     * still supported, but these should not be used for new products.
     *
     * Generated from protobuf field <code>string product_category = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setProductCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_category = $var;

        return $this;
    }

    /**
     * Key-value pairs that can be attached to a product. At query time,
     * constraints can be specified based on the product_labels.
     * Note that integer values can be provided as strings, e.g. "1199". Only
     * strings with integer values can match a range-based restriction which is
     * to be supported soon.
     * Multiple values can be assigned to the same key. One product may have up to
     * 500 product_labels.
     * Notice that the total number of distinct product_labels over all products
     * in one ProductSet cannot exceed 1M, otherwise the product search pipeline
     * will refuse to work for that ProductSet.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Product.KeyValue product_labels = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProductLabels()
    {
        return $this->product_labels;
    }

    /**
     * Key-value pairs that can be attached to a product. At query time,
     * constraints can be specified based on the product_labels.
     * Note that integer values can be provided as strings, e.g. "1199". Only
     * strings with integer values can match a range-based restriction which is
     * to be supported soon.
     * Multiple values can be assigned to the same key. One product may have up to
     * 500 product_labels.
     * Notice that the total number of distinct product_labels over all products
     * in one ProductSet cannot exceed 1M, otherwise the product search pipeline
     * will refuse to work for that ProductSet.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Product.KeyValue product_labels = 5;</code>
     * @param array<\Google\Cloud\Vision\V1\Product\KeyValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProductLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\Product\KeyValue::class);
        $this->product_labels = $arr;

        return $this;
    }

}

