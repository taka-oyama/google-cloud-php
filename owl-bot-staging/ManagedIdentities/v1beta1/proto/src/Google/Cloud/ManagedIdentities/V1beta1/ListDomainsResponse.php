<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1beta1/managed_identities_service.proto

namespace Google\Cloud\ManagedIdentities\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [ListDomains][google.cloud.managedidentities.v1beta1.ListDomains]
 *
 * Generated from protobuf message <code>google.cloud.managedidentities.v1beta1.ListDomainsResponse</code>
 */
class ListDomainsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of Managed Identities Service domains in the project.
     *
     * Generated from protobuf field <code>repeated .google.cloud.managedidentities.v1beta1.Domain domains = 1;</code>
     */
    private $domains;
    /**
     * A token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * A list of locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ManagedIdentities\V1beta1\Domain>|\Google\Protobuf\Internal\RepeatedField $domains
     *           A list of Managed Identities Service domains in the project.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           A list of locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedidentities\V1Beta1\ManagedIdentitiesService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of Managed Identities Service domains in the project.
     *
     * Generated from protobuf field <code>repeated .google.cloud.managedidentities.v1beta1.Domain domains = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomains()
    {
        return $this->domains;
    }

    /**
     * A list of Managed Identities Service domains in the project.
     *
     * Generated from protobuf field <code>repeated .google.cloud.managedidentities.v1beta1.Domain domains = 1;</code>
     * @param array<\Google\Cloud\ManagedIdentities\V1beta1\Domain>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomains($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ManagedIdentities\V1beta1\Domain::class);
        $this->domains = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * A list of locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * A list of locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

