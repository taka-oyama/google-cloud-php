<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an output piece of text.
 *
 * Generated from protobuf message <code>google.cloud.language.v1beta2.TextSpan</code>
 */
class TextSpan extends \Google\Protobuf\Internal\Message
{
    /**
     * The content of the output text.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     */
    protected $content = '';
    /**
     * The API calculates the beginning offset of the content in the original
     * document according to the [EncodingType][google.cloud.language.v1beta2.EncodingType] specified in the API request.
     *
     * Generated from protobuf field <code>int32 begin_offset = 2;</code>
     */
    protected $begin_offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $content
     *           The content of the output text.
     *     @type int $begin_offset
     *           The API calculates the beginning offset of the content in the original
     *           document according to the [EncodingType][google.cloud.language.v1beta2.EncodingType] specified in the API request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * The content of the output text.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The content of the output text.
     *
     * Generated from protobuf field <code>string content = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * The API calculates the beginning offset of the content in the original
     * document according to the [EncodingType][google.cloud.language.v1beta2.EncodingType] specified in the API request.
     *
     * Generated from protobuf field <code>int32 begin_offset = 2;</code>
     * @return int
     */
    public function getBeginOffset()
    {
        return $this->begin_offset;
    }

    /**
     * The API calculates the beginning offset of the content in the original
     * document according to the [EncodingType][google.cloud.language.v1beta2.EncodingType] specified in the API request.
     *
     * Generated from protobuf field <code>int32 begin_offset = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBeginOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->begin_offset = $var;

        return $this;
    }

}

