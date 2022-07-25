<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/translation.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Model metadata that is specific to translation.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.TranslationModelMetadata</code>
 */
class TranslationModelMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the model to use as a baseline to train the custom
     * model. If unset, we use the default base model provided by Google
     * Translate. Format:
     * `projects/{project_id}/locations/{location_id}/models/{model_id}`
     *
     * Generated from protobuf field <code>string base_model = 1;</code>
     */
    protected $base_model = '';
    /**
     * Output only. Inferred from the dataset.
     * The source language (The BCP-47 language code) that is used for training.
     *
     * Generated from protobuf field <code>string source_language_code = 2;</code>
     */
    protected $source_language_code = '';
    /**
     * Output only. The target language (The BCP-47 language code) that is used
     * for training.
     *
     * Generated from protobuf field <code>string target_language_code = 3;</code>
     */
    protected $target_language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $base_model
     *           The resource name of the model to use as a baseline to train the custom
     *           model. If unset, we use the default base model provided by Google
     *           Translate. Format:
     *           `projects/{project_id}/locations/{location_id}/models/{model_id}`
     *     @type string $source_language_code
     *           Output only. Inferred from the dataset.
     *           The source language (The BCP-47 language code) that is used for training.
     *     @type string $target_language_code
     *           Output only. The target language (The BCP-47 language code) that is used
     *           for training.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Translation::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the model to use as a baseline to train the custom
     * model. If unset, we use the default base model provided by Google
     * Translate. Format:
     * `projects/{project_id}/locations/{location_id}/models/{model_id}`
     *
     * Generated from protobuf field <code>string base_model = 1;</code>
     * @return string
     */
    public function getBaseModel()
    {
        return $this->base_model;
    }

    /**
     * The resource name of the model to use as a baseline to train the custom
     * model. If unset, we use the default base model provided by Google
     * Translate. Format:
     * `projects/{project_id}/locations/{location_id}/models/{model_id}`
     *
     * Generated from protobuf field <code>string base_model = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_model = $var;

        return $this;
    }

    /**
     * Output only. Inferred from the dataset.
     * The source language (The BCP-47 language code) that is used for training.
     *
     * Generated from protobuf field <code>string source_language_code = 2;</code>
     * @return string
     */
    public function getSourceLanguageCode()
    {
        return $this->source_language_code;
    }

    /**
     * Output only. Inferred from the dataset.
     * The source language (The BCP-47 language code) that is used for training.
     *
     * Generated from protobuf field <code>string source_language_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_language_code = $var;

        return $this;
    }

    /**
     * Output only. The target language (The BCP-47 language code) that is used
     * for training.
     *
     * Generated from protobuf field <code>string target_language_code = 3;</code>
     * @return string
     */
    public function getTargetLanguageCode()
    {
        return $this->target_language_code;
    }

    /**
     * Output only. The target language (The BCP-47 language code) that is used
     * for training.
     *
     * Generated from protobuf field <code>string target_language_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_language_code = $var;

        return $this;
    }

}

