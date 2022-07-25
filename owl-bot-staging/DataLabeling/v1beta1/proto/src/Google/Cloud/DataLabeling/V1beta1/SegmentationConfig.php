<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/human_annotation_config.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for image segmentation
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.SegmentationConfig</code>
 */
class SegmentationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Annotation spec set resource name. format:
     * projects/{project_id}/annotationSpecSets/{annotation_spec_set_id}
     *
     * Generated from protobuf field <code>string annotation_spec_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $annotation_spec_set = '';
    /**
     * Instruction message showed on labelers UI.
     *
     * Generated from protobuf field <code>string instruction_message = 2;</code>
     */
    protected $instruction_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $annotation_spec_set
     *           Required. Annotation spec set resource name. format:
     *           projects/{project_id}/annotationSpecSets/{annotation_spec_set_id}
     *     @type string $instruction_message
     *           Instruction message showed on labelers UI.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\HumanAnnotationConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Annotation spec set resource name. format:
     * projects/{project_id}/annotationSpecSets/{annotation_spec_set_id}
     *
     * Generated from protobuf field <code>string annotation_spec_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAnnotationSpecSet()
    {
        return $this->annotation_spec_set;
    }

    /**
     * Required. Annotation spec set resource name. format:
     * projects/{project_id}/annotationSpecSets/{annotation_spec_set_id}
     *
     * Generated from protobuf field <code>string annotation_spec_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotationSpecSet($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotation_spec_set = $var;

        return $this;
    }

    /**
     * Instruction message showed on labelers UI.
     *
     * Generated from protobuf field <code>string instruction_message = 2;</code>
     * @return string
     */
    public function getInstructionMessage()
    {
        return $this->instruction_message;
    }

    /**
     * Instruction message showed on labelers UI.
     *
     * Generated from protobuf field <code>string instruction_message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstructionMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->instruction_message = $var;

        return $this;
    }

}

