<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A form field detected on the page.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Page.FormField</code>
 */
class FormField extends \Google\Protobuf\Internal\Message
{
    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for the
     * [FormField][google.cloud.documentai.v1.Document.Page.FormField] name.
     * e.g. `Address`, `Email`, `Grand total`, `Phone number`, etc.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout field_name = 1;</code>
     */
    protected $field_name = null;
    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for the
     * [FormField][google.cloud.documentai.v1.Document.Page.FormField] value.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout field_value = 2;</code>
     */
    protected $field_value = null;
    /**
     * A list of detected languages for name together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage name_detected_languages = 3;</code>
     */
    private $name_detected_languages;
    /**
     * A list of detected languages for value together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage value_detected_languages = 4;</code>
     */
    private $value_detected_languages;
    /**
     * If the value is non-textual, this field represents the type. Current
     * valid values are:
     * - blank (this indicates the field_value is normal text)
     * - "unfilled_checkbox"
     * - "filled_checkbox"
     *
     * Generated from protobuf field <code>string value_type = 5;</code>
     */
    protected $value_type = '';
    /**
     * The history of this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance provenance = 8;</code>
     */
    protected $provenance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\Layout $field_name
     *           [Layout][google.cloud.documentai.v1.Document.Page.Layout] for the
     *           [FormField][google.cloud.documentai.v1.Document.Page.FormField] name.
     *           e.g. `Address`, `Email`, `Grand total`, `Phone number`, etc.
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\Layout $field_value
     *           [Layout][google.cloud.documentai.v1.Document.Page.Layout] for the
     *           [FormField][google.cloud.documentai.v1.Document.Page.FormField] value.
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage>|\Google\Protobuf\Internal\RepeatedField $name_detected_languages
     *           A list of detected languages for name together with confidence.
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage>|\Google\Protobuf\Internal\RepeatedField $value_detected_languages
     *           A list of detected languages for value together with confidence.
     *     @type string $value_type
     *           If the value is non-textual, this field represents the type. Current
     *           valid values are:
     *           - blank (this indicates the field_value is normal text)
     *           - "unfilled_checkbox"
     *           - "filled_checkbox"
     *     @type \Google\Cloud\DocumentAI\V1\Document\Provenance $provenance
     *           The history of this annotation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for the
     * [FormField][google.cloud.documentai.v1.Document.Page.FormField] name.
     * e.g. `Address`, `Email`, `Grand total`, `Phone number`, etc.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout field_name = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Page\Layout|null
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    public function hasFieldName()
    {
        return isset($this->field_name);
    }

    public function clearFieldName()
    {
        unset($this->field_name);
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for the
     * [FormField][google.cloud.documentai.v1.Document.Page.FormField] name.
     * e.g. `Address`, `Email`, `Grand total`, `Phone number`, etc.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout field_name = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Page\Layout $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Page\Layout::class);
        $this->field_name = $var;

        return $this;
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for the
     * [FormField][google.cloud.documentai.v1.Document.Page.FormField] value.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout field_value = 2;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Page\Layout|null
     */
    public function getFieldValue()
    {
        return $this->field_value;
    }

    public function hasFieldValue()
    {
        return isset($this->field_value);
    }

    public function clearFieldValue()
    {
        unset($this->field_value);
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for the
     * [FormField][google.cloud.documentai.v1.Document.Page.FormField] value.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout field_value = 2;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Page\Layout $var
     * @return $this
     */
    public function setFieldValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Page\Layout::class);
        $this->field_value = $var;

        return $this;
    }

    /**
     * A list of detected languages for name together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage name_detected_languages = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNameDetectedLanguages()
    {
        return $this->name_detected_languages;
    }

    /**
     * A list of detected languages for name together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage name_detected_languages = 3;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNameDetectedLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage::class);
        $this->name_detected_languages = $arr;

        return $this;
    }

    /**
     * A list of detected languages for value together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage value_detected_languages = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValueDetectedLanguages()
    {
        return $this->value_detected_languages;
    }

    /**
     * A list of detected languages for value together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage value_detected_languages = 4;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValueDetectedLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage::class);
        $this->value_detected_languages = $arr;

        return $this;
    }

    /**
     * If the value is non-textual, this field represents the type. Current
     * valid values are:
     * - blank (this indicates the field_value is normal text)
     * - "unfilled_checkbox"
     * - "filled_checkbox"
     *
     * Generated from protobuf field <code>string value_type = 5;</code>
     * @return string
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * If the value is non-textual, this field represents the type. Current
     * valid values are:
     * - blank (this indicates the field_value is normal text)
     * - "unfilled_checkbox"
     * - "filled_checkbox"
     *
     * Generated from protobuf field <code>string value_type = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setValueType($var)
    {
        GPBUtil::checkString($var, True);
        $this->value_type = $var;

        return $this;
    }

    /**
     * The history of this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance provenance = 8;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Provenance|null
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    public function hasProvenance()
    {
        return isset($this->provenance);
    }

    public function clearProvenance()
    {
        unset($this->provenance);
    }

    /**
     * The history of this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance provenance = 8;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Provenance $var
     * @return $this
     */
    public function setProvenance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Provenance::class);
        $this->provenance = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FormField::class, \Google\Cloud\DocumentAI\V1\Document_Page_FormField::class);

