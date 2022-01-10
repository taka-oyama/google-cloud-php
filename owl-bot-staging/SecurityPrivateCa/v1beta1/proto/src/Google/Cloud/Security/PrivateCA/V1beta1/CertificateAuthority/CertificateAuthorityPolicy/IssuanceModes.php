<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [IssuanceModes][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.IssuanceModes] specifies the allowed ways in which
 * [Certificates][google.cloud.security.privateca.v1beta1.Certificate] may be requested from this
 * [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.IssuanceModes</code>
 */
class IssuanceModes extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. When true, allows callers to create [Certificates][google.cloud.security.privateca.v1beta1.Certificate] by
     * specifying a CSR.
     *
     * Generated from protobuf field <code>bool allow_csr_based_issuance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $allow_csr_based_issuance = false;
    /**
     * Required. When true, allows callers to create [Certificates][google.cloud.security.privateca.v1beta1.Certificate] by
     * specifying a [CertificateConfig][google.cloud.security.privateca.v1beta1.CertificateConfig].
     *
     * Generated from protobuf field <code>bool allow_config_based_issuance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $allow_config_based_issuance = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $allow_csr_based_issuance
     *           Required. When true, allows callers to create [Certificates][google.cloud.security.privateca.v1beta1.Certificate] by
     *           specifying a CSR.
     *     @type bool $allow_config_based_issuance
     *           Required. When true, allows callers to create [Certificates][google.cloud.security.privateca.v1beta1.Certificate] by
     *           specifying a [CertificateConfig][google.cloud.security.privateca.v1beta1.CertificateConfig].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. When true, allows callers to create [Certificates][google.cloud.security.privateca.v1beta1.Certificate] by
     * specifying a CSR.
     *
     * Generated from protobuf field <code>bool allow_csr_based_issuance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return bool
     */
    public function getAllowCsrBasedIssuance()
    {
        return $this->allow_csr_based_issuance;
    }

    /**
     * Required. When true, allows callers to create [Certificates][google.cloud.security.privateca.v1beta1.Certificate] by
     * specifying a CSR.
     *
     * Generated from protobuf field <code>bool allow_csr_based_issuance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowCsrBasedIssuance($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_csr_based_issuance = $var;

        return $this;
    }

    /**
     * Required. When true, allows callers to create [Certificates][google.cloud.security.privateca.v1beta1.Certificate] by
     * specifying a [CertificateConfig][google.cloud.security.privateca.v1beta1.CertificateConfig].
     *
     * Generated from protobuf field <code>bool allow_config_based_issuance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return bool
     */
    public function getAllowConfigBasedIssuance()
    {
        return $this->allow_config_based_issuance;
    }

    /**
     * Required. When true, allows callers to create [Certificates][google.cloud.security.privateca.v1beta1.Certificate] by
     * specifying a [CertificateConfig][google.cloud.security.privateca.v1beta1.CertificateConfig].
     *
     * Generated from protobuf field <code>bool allow_config_based_issuance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowConfigBasedIssuance($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_config_based_issuance = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IssuanceModes::class, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority_CertificateAuthorityPolicy_IssuanceModes::class);

