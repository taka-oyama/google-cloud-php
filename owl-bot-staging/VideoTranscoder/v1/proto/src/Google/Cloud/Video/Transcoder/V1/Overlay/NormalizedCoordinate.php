<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1\Overlay;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 2D normalized coordinates. Default: `{0.0, 0.0}`
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.Overlay.NormalizedCoordinate</code>
 */
class NormalizedCoordinate extends \Google\Protobuf\Internal\Message
{
    /**
     * Normalized x coordinate.
     *
     * Generated from protobuf field <code>double x = 1;</code>
     */
    protected $x = 0.0;
    /**
     * Normalized y coordinate.
     *
     * Generated from protobuf field <code>double y = 2;</code>
     */
    protected $y = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $x
     *           Normalized x coordinate.
     *     @type float $y
     *           Normalized y coordinate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Normalized x coordinate.
     *
     * Generated from protobuf field <code>double x = 1;</code>
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Normalized x coordinate.
     *
     * Generated from protobuf field <code>double x = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setX($var)
    {
        GPBUtil::checkDouble($var);
        $this->x = $var;

        return $this;
    }

    /**
     * Normalized y coordinate.
     *
     * Generated from protobuf field <code>double y = 2;</code>
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Normalized y coordinate.
     *
     * Generated from protobuf field <code>double y = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setY($var)
    {
        GPBUtil::checkDouble($var);
        $this->y = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NormalizedCoordinate::class, \Google\Cloud\Video\Transcoder\V1\Overlay_NormalizedCoordinate::class);

