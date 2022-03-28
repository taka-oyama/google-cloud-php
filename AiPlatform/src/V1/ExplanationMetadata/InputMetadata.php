<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation_metadata.proto

namespace Google\Cloud\AIPlatform\V1\ExplanationMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata of the input of a feature.
 * Fields other than [InputMetadata.input_baselines][google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.input_baselines] are applicable only
 * for Models that are using Vertex AI-provided images for Tensorflow.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata</code>
 */
class InputMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Baseline inputs for this feature.
     * If no baseline is specified, Vertex AI chooses the baseline for this
     * feature. If multiple baselines are specified, Vertex AI returns the
     * average attributions across them in [Attribution.feature_attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions].
     * For Vertex AI-provided Tensorflow images (both 1.x and 2.x), the shape
     * of each baseline must match the shape of the input tensor. If a scalar is
     * provided, we broadcast to the same shape as the input tensor.
     * For custom images, the element of the baselines must be in the same
     * format as the feature's input in the
     * [instance][google.cloud.aiplatform.v1.ExplainRequest.instances][]. The schema of any single instance
     * may be specified via Endpoint's DeployedModels'
     * [Model's][google.cloud.aiplatform.v1.DeployedModel.model]
     * [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     * [instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value input_baselines = 1;</code>
     */
    private $input_baselines;
    /**
     * Name of the input tensor for this feature. Required and is only
     * applicable to Vertex AI-provided images for Tensorflow.
     *
     * Generated from protobuf field <code>string input_tensor_name = 2;</code>
     */
    private $input_tensor_name = '';
    /**
     * Defines how the feature is encoded into the input tensor. Defaults to
     * IDENTITY.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Encoding encoding = 3;</code>
     */
    private $encoding = 0;
    /**
     * Modality of the feature. Valid values are: numeric, image. Defaults to
     * numeric.
     *
     * Generated from protobuf field <code>string modality = 4;</code>
     */
    private $modality = '';
    /**
     * The domain details of the input feature value. Like min/max, original
     * mean or standard deviation if normalized.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.FeatureValueDomain feature_value_domain = 5;</code>
     */
    private $feature_value_domain = null;
    /**
     * Specifies the index of the values of the input tensor.
     * Required when the input tensor is a sparse representation. Refer to
     * Tensorflow documentation for more details:
     * https://www.tensorflow.org/api_docs/python/tf/sparse/SparseTensor.
     *
     * Generated from protobuf field <code>string indices_tensor_name = 6;</code>
     */
    private $indices_tensor_name = '';
    /**
     * Specifies the shape of the values of the input if the input is a sparse
     * representation. Refer to Tensorflow documentation for more details:
     * https://www.tensorflow.org/api_docs/python/tf/sparse/SparseTensor.
     *
     * Generated from protobuf field <code>string dense_shape_tensor_name = 7;</code>
     */
    private $dense_shape_tensor_name = '';
    /**
     * A list of feature names for each index in the input tensor.
     * Required when the input [InputMetadata.encoding][google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.encoding] is BAG_OF_FEATURES,
     * BAG_OF_FEATURES_SPARSE, INDICATOR.
     *
     * Generated from protobuf field <code>repeated string index_feature_mapping = 8;</code>
     */
    private $index_feature_mapping;
    /**
     * Encoded tensor is a transformation of the input tensor. Must be provided
     * if choosing
     * [Integrated Gradients attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution]
     * or [XRAI attribution][google.cloud.aiplatform.v1.ExplanationParameters.xrai_attribution] and the
     * input tensor is not differentiable.
     * An encoded tensor is generated if the input tensor is encoded by a lookup
     * table.
     *
     * Generated from protobuf field <code>string encoded_tensor_name = 9;</code>
     */
    private $encoded_tensor_name = '';
    /**
     * A list of baselines for the encoded tensor.
     * The shape of each baseline should match the shape of the encoded tensor.
     * If a scalar is provided, Vertex AI broadcasts to the same shape as the
     * encoded tensor.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value encoded_baselines = 10;</code>
     */
    private $encoded_baselines;
    /**
     * Visualization configurations for image explanation.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization visualization = 11;</code>
     */
    private $visualization = null;
    /**
     * Name of the group that the input belongs to. Features with the same group
     * name will be treated as one feature when computing attributions. Features
     * grouped together can have different shapes in value. If provided, there
     * will be one single attribution generated in
     * [Attribution.feature_attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions], keyed by the group name.
     *
     * Generated from protobuf field <code>string group_name = 12;</code>
     */
    private $group_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Value[]|\Google\Protobuf\Internal\RepeatedField $input_baselines
     *           Baseline inputs for this feature.
     *           If no baseline is specified, Vertex AI chooses the baseline for this
     *           feature. If multiple baselines are specified, Vertex AI returns the
     *           average attributions across them in [Attribution.feature_attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions].
     *           For Vertex AI-provided Tensorflow images (both 1.x and 2.x), the shape
     *           of each baseline must match the shape of the input tensor. If a scalar is
     *           provided, we broadcast to the same shape as the input tensor.
     *           For custom images, the element of the baselines must be in the same
     *           format as the feature's input in the
     *           [instance][google.cloud.aiplatform.v1.ExplainRequest.instances][]. The schema of any single instance
     *           may be specified via Endpoint's DeployedModels'
     *           [Model's][google.cloud.aiplatform.v1.DeployedModel.model]
     *           [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     *           [instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri].
     *     @type string $input_tensor_name
     *           Name of the input tensor for this feature. Required and is only
     *           applicable to Vertex AI-provided images for Tensorflow.
     *     @type int $encoding
     *           Defines how the feature is encoded into the input tensor. Defaults to
     *           IDENTITY.
     *     @type string $modality
     *           Modality of the feature. Valid values are: numeric, image. Defaults to
     *           numeric.
     *     @type \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\FeatureValueDomain $feature_value_domain
     *           The domain details of the input feature value. Like min/max, original
     *           mean or standard deviation if normalized.
     *     @type string $indices_tensor_name
     *           Specifies the index of the values of the input tensor.
     *           Required when the input tensor is a sparse representation. Refer to
     *           Tensorflow documentation for more details:
     *           https://www.tensorflow.org/api_docs/python/tf/sparse/SparseTensor.
     *     @type string $dense_shape_tensor_name
     *           Specifies the shape of the values of the input if the input is a sparse
     *           representation. Refer to Tensorflow documentation for more details:
     *           https://www.tensorflow.org/api_docs/python/tf/sparse/SparseTensor.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $index_feature_mapping
     *           A list of feature names for each index in the input tensor.
     *           Required when the input [InputMetadata.encoding][google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.encoding] is BAG_OF_FEATURES,
     *           BAG_OF_FEATURES_SPARSE, INDICATOR.
     *     @type string $encoded_tensor_name
     *           Encoded tensor is a transformation of the input tensor. Must be provided
     *           if choosing
     *           [Integrated Gradients attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution]
     *           or [XRAI attribution][google.cloud.aiplatform.v1.ExplanationParameters.xrai_attribution] and the
     *           input tensor is not differentiable.
     *           An encoded tensor is generated if the input tensor is encoded by a lookup
     *           table.
     *     @type \Google\Protobuf\Value[]|\Google\Protobuf\Internal\RepeatedField $encoded_baselines
     *           A list of baselines for the encoded tensor.
     *           The shape of each baseline should match the shape of the encoded tensor.
     *           If a scalar is provided, Vertex AI broadcasts to the same shape as the
     *           encoded tensor.
     *     @type \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\Visualization $visualization
     *           Visualization configurations for image explanation.
     *     @type string $group_name
     *           Name of the group that the input belongs to. Features with the same group
     *           name will be treated as one feature when computing attributions. Features
     *           grouped together can have different shapes in value. If provided, there
     *           will be one single attribution generated in
     *           [Attribution.feature_attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions], keyed by the group name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ExplanationMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Baseline inputs for this feature.
     * If no baseline is specified, Vertex AI chooses the baseline for this
     * feature. If multiple baselines are specified, Vertex AI returns the
     * average attributions across them in [Attribution.feature_attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions].
     * For Vertex AI-provided Tensorflow images (both 1.x and 2.x), the shape
     * of each baseline must match the shape of the input tensor. If a scalar is
     * provided, we broadcast to the same shape as the input tensor.
     * For custom images, the element of the baselines must be in the same
     * format as the feature's input in the
     * [instance][google.cloud.aiplatform.v1.ExplainRequest.instances][]. The schema of any single instance
     * may be specified via Endpoint's DeployedModels'
     * [Model's][google.cloud.aiplatform.v1.DeployedModel.model]
     * [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     * [instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value input_baselines = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputBaselines()
    {
        return $this->input_baselines;
    }

    /**
     * Baseline inputs for this feature.
     * If no baseline is specified, Vertex AI chooses the baseline for this
     * feature. If multiple baselines are specified, Vertex AI returns the
     * average attributions across them in [Attribution.feature_attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions].
     * For Vertex AI-provided Tensorflow images (both 1.x and 2.x), the shape
     * of each baseline must match the shape of the input tensor. If a scalar is
     * provided, we broadcast to the same shape as the input tensor.
     * For custom images, the element of the baselines must be in the same
     * format as the feature's input in the
     * [instance][google.cloud.aiplatform.v1.ExplainRequest.instances][]. The schema of any single instance
     * may be specified via Endpoint's DeployedModels'
     * [Model's][google.cloud.aiplatform.v1.DeployedModel.model]
     * [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     * [instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value input_baselines = 1;</code>
     * @param \Google\Protobuf\Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputBaselines($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->input_baselines = $arr;

        return $this;
    }

    /**
     * Name of the input tensor for this feature. Required and is only
     * applicable to Vertex AI-provided images for Tensorflow.
     *
     * Generated from protobuf field <code>string input_tensor_name = 2;</code>
     * @return string
     */
    public function getInputTensorName()
    {
        return $this->input_tensor_name;
    }

    /**
     * Name of the input tensor for this feature. Required and is only
     * applicable to Vertex AI-provided images for Tensorflow.
     *
     * Generated from protobuf field <code>string input_tensor_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInputTensorName($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_tensor_name = $var;

        return $this;
    }

    /**
     * Defines how the feature is encoded into the input tensor. Defaults to
     * IDENTITY.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Encoding encoding = 3;</code>
     * @return int
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Defines how the feature is encoded into the input tensor. Defaults to
     * IDENTITY.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Encoding encoding = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEncoding($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\Encoding::class);
        $this->encoding = $var;

        return $this;
    }

    /**
     * Modality of the feature. Valid values are: numeric, image. Defaults to
     * numeric.
     *
     * Generated from protobuf field <code>string modality = 4;</code>
     * @return string
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * Modality of the feature. Valid values are: numeric, image. Defaults to
     * numeric.
     *
     * Generated from protobuf field <code>string modality = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setModality($var)
    {
        GPBUtil::checkString($var, True);
        $this->modality = $var;

        return $this;
    }

    /**
     * The domain details of the input feature value. Like min/max, original
     * mean or standard deviation if normalized.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.FeatureValueDomain feature_value_domain = 5;</code>
     * @return \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\FeatureValueDomain|null
     */
    public function getFeatureValueDomain()
    {
        return $this->feature_value_domain;
    }

    public function hasFeatureValueDomain()
    {
        return isset($this->feature_value_domain);
    }

    public function clearFeatureValueDomain()
    {
        unset($this->feature_value_domain);
    }

    /**
     * The domain details of the input feature value. Like min/max, original
     * mean or standard deviation if normalized.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.FeatureValueDomain feature_value_domain = 5;</code>
     * @param \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\FeatureValueDomain $var
     * @return $this
     */
    public function setFeatureValueDomain($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\FeatureValueDomain::class);
        $this->feature_value_domain = $var;

        return $this;
    }

    /**
     * Specifies the index of the values of the input tensor.
     * Required when the input tensor is a sparse representation. Refer to
     * Tensorflow documentation for more details:
     * https://www.tensorflow.org/api_docs/python/tf/sparse/SparseTensor.
     *
     * Generated from protobuf field <code>string indices_tensor_name = 6;</code>
     * @return string
     */
    public function getIndicesTensorName()
    {
        return $this->indices_tensor_name;
    }

    /**
     * Specifies the index of the values of the input tensor.
     * Required when the input tensor is a sparse representation. Refer to
     * Tensorflow documentation for more details:
     * https://www.tensorflow.org/api_docs/python/tf/sparse/SparseTensor.
     *
     * Generated from protobuf field <code>string indices_tensor_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setIndicesTensorName($var)
    {
        GPBUtil::checkString($var, True);
        $this->indices_tensor_name = $var;

        return $this;
    }

    /**
     * Specifies the shape of the values of the input if the input is a sparse
     * representation. Refer to Tensorflow documentation for more details:
     * https://www.tensorflow.org/api_docs/python/tf/sparse/SparseTensor.
     *
     * Generated from protobuf field <code>string dense_shape_tensor_name = 7;</code>
     * @return string
     */
    public function getDenseShapeTensorName()
    {
        return $this->dense_shape_tensor_name;
    }

    /**
     * Specifies the shape of the values of the input if the input is a sparse
     * representation. Refer to Tensorflow documentation for more details:
     * https://www.tensorflow.org/api_docs/python/tf/sparse/SparseTensor.
     *
     * Generated from protobuf field <code>string dense_shape_tensor_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDenseShapeTensorName($var)
    {
        GPBUtil::checkString($var, True);
        $this->dense_shape_tensor_name = $var;

        return $this;
    }

    /**
     * A list of feature names for each index in the input tensor.
     * Required when the input [InputMetadata.encoding][google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.encoding] is BAG_OF_FEATURES,
     * BAG_OF_FEATURES_SPARSE, INDICATOR.
     *
     * Generated from protobuf field <code>repeated string index_feature_mapping = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexFeatureMapping()
    {
        return $this->index_feature_mapping;
    }

    /**
     * A list of feature names for each index in the input tensor.
     * Required when the input [InputMetadata.encoding][google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.encoding] is BAG_OF_FEATURES,
     * BAG_OF_FEATURES_SPARSE, INDICATOR.
     *
     * Generated from protobuf field <code>repeated string index_feature_mapping = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexFeatureMapping($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->index_feature_mapping = $arr;

        return $this;
    }

    /**
     * Encoded tensor is a transformation of the input tensor. Must be provided
     * if choosing
     * [Integrated Gradients attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution]
     * or [XRAI attribution][google.cloud.aiplatform.v1.ExplanationParameters.xrai_attribution] and the
     * input tensor is not differentiable.
     * An encoded tensor is generated if the input tensor is encoded by a lookup
     * table.
     *
     * Generated from protobuf field <code>string encoded_tensor_name = 9;</code>
     * @return string
     */
    public function getEncodedTensorName()
    {
        return $this->encoded_tensor_name;
    }

    /**
     * Encoded tensor is a transformation of the input tensor. Must be provided
     * if choosing
     * [Integrated Gradients attribution][google.cloud.aiplatform.v1.ExplanationParameters.integrated_gradients_attribution]
     * or [XRAI attribution][google.cloud.aiplatform.v1.ExplanationParameters.xrai_attribution] and the
     * input tensor is not differentiable.
     * An encoded tensor is generated if the input tensor is encoded by a lookup
     * table.
     *
     * Generated from protobuf field <code>string encoded_tensor_name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setEncodedTensorName($var)
    {
        GPBUtil::checkString($var, True);
        $this->encoded_tensor_name = $var;

        return $this;
    }

    /**
     * A list of baselines for the encoded tensor.
     * The shape of each baseline should match the shape of the encoded tensor.
     * If a scalar is provided, Vertex AI broadcasts to the same shape as the
     * encoded tensor.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value encoded_baselines = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEncodedBaselines()
    {
        return $this->encoded_baselines;
    }

    /**
     * A list of baselines for the encoded tensor.
     * The shape of each baseline should match the shape of the encoded tensor.
     * If a scalar is provided, Vertex AI broadcasts to the same shape as the
     * encoded tensor.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value encoded_baselines = 10;</code>
     * @param \Google\Protobuf\Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEncodedBaselines($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->encoded_baselines = $arr;

        return $this;
    }

    /**
     * Visualization configurations for image explanation.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization visualization = 11;</code>
     * @return \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\Visualization|null
     */
    public function getVisualization()
    {
        return $this->visualization;
    }

    public function hasVisualization()
    {
        return isset($this->visualization);
    }

    public function clearVisualization()
    {
        unset($this->visualization);
    }

    /**
     * Visualization configurations for image explanation.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.Visualization visualization = 11;</code>
     * @param \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\Visualization $var
     * @return $this
     */
    public function setVisualization($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata\Visualization::class);
        $this->visualization = $var;

        return $this;
    }

    /**
     * Name of the group that the input belongs to. Features with the same group
     * name will be treated as one feature when computing attributions. Features
     * grouped together can have different shapes in value. If provided, there
     * will be one single attribution generated in
     * [Attribution.feature_attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions], keyed by the group name.
     *
     * Generated from protobuf field <code>string group_name = 12;</code>
     * @return string
     */
    public function getGroupName()
    {
        return $this->group_name;
    }

    /**
     * Name of the group that the input belongs to. Features with the same group
     * name will be treated as one feature when computing attributions. Features
     * grouped together can have different shapes in value. If provided, there
     * will be one single attribution generated in
     * [Attribution.feature_attributions][google.cloud.aiplatform.v1.Attribution.feature_attributions], keyed by the group name.
     *
     * Generated from protobuf field <code>string group_name = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_name = $var;

        return $this;
    }

}


