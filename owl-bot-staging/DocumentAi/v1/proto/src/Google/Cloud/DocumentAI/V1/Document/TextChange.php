<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This message is used for text changes aka. OCR corrections.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.TextChange</code>
 */
class TextChange extends \Google\Protobuf\Internal\Message
{
    /**
     * Provenance of the correction.
     * Text anchor indexing into the
     * [Document.text][google.cloud.documentai.v1.Document.text].  There can
     * only be a single `TextAnchor.text_segments` element.  If the start and
     * end index of the text segment are the same, the text change is inserted
     * before that index.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.TextAnchor text_anchor = 1;</code>
     */
    protected $text_anchor = null;
    /**
     * The text that replaces the text identified in the `text_anchor`.
     *
     * Generated from protobuf field <code>string changed_text = 2;</code>
     */
    protected $changed_text = '';
    /**
     * The history of this annotation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Provenance provenance = 3;</code>
     */
    private $provenance;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document\TextAnchor $text_anchor
     *           Provenance of the correction.
     *           Text anchor indexing into the
     *           [Document.text][google.cloud.documentai.v1.Document.text].  There can
     *           only be a single `TextAnchor.text_segments` element.  If the start and
     *           end index of the text segment are the same, the text change is inserted
     *           before that index.
     *     @type string $changed_text
     *           The text that replaces the text identified in the `text_anchor`.
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\Provenance>|\Google\Protobuf\Internal\RepeatedField $provenance
     *           The history of this annotation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Provenance of the correction.
     * Text anchor indexing into the
     * [Document.text][google.cloud.documentai.v1.Document.text].  There can
     * only be a single `TextAnchor.text_segments` element.  If the start and
     * end index of the text segment are the same, the text change is inserted
     * before that index.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.TextAnchor text_anchor = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\TextAnchor|null
     */
    public function getTextAnchor()
    {
        return $this->text_anchor;
    }

    public function hasTextAnchor()
    {
        return isset($this->text_anchor);
    }

    public function clearTextAnchor()
    {
        unset($this->text_anchor);
    }

    /**
     * Provenance of the correction.
     * Text anchor indexing into the
     * [Document.text][google.cloud.documentai.v1.Document.text].  There can
     * only be a single `TextAnchor.text_segments` element.  If the start and
     * end index of the text segment are the same, the text change is inserted
     * before that index.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.TextAnchor text_anchor = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\TextAnchor $var
     * @return $this
     */
    public function setTextAnchor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\TextAnchor::class);
        $this->text_anchor = $var;

        return $this;
    }

    /**
     * The text that replaces the text identified in the `text_anchor`.
     *
     * Generated from protobuf field <code>string changed_text = 2;</code>
     * @return string
     */
    public function getChangedText()
    {
        return $this->changed_text;
    }

    /**
     * The text that replaces the text identified in the `text_anchor`.
     *
     * Generated from protobuf field <code>string changed_text = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setChangedText($var)
    {
        GPBUtil::checkString($var, True);
        $this->changed_text = $var;

        return $this;
    }

    /**
     * The history of this annotation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Provenance provenance = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    /**
     * The history of this annotation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Provenance provenance = 3;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\Provenance>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProvenance($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Provenance::class);
        $this->provenance = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TextChange::class, \Google\Cloud\DocumentAI\V1\Document_TextChange::class);

