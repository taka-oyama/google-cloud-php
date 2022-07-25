<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1beta1/managed_identities_service.proto

namespace Google\Cloud\ManagedIdentities\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ResetAdminPassword][google.cloud.managedidentities.v1beta1.ResetAdminPassword]
 *
 * Generated from protobuf message <code>google.cloud.managedidentities.v1beta1.ResetAdminPasswordRequest</code>
 */
class ResetAdminPasswordRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The domain resource name using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
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
     *           Required. The domain resource name using the form:
     *           `projects/{project_id}/locations/global/domains/{domain_name}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedidentities\V1Beta1\ManagedIdentitiesService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The domain resource name using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The domain resource name using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
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

