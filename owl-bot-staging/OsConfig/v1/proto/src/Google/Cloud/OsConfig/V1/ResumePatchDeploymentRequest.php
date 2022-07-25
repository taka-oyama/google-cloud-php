<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_deployments.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for resuming a patch deployment.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.ResumePatchDeploymentRequest</code>
 */
class ResumePatchDeploymentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the patch deployment in the form
     * `projects/&#42;&#47;patchDeployments/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the patch deployment in the form
     *           `projects/&#42;&#47;patchDeployments/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchDeployments::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the patch deployment in the form
     * `projects/&#42;&#47;patchDeployments/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the patch deployment in the form
     * `projects/&#42;&#47;patchDeployments/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

