<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/service.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CertificateAuthorityService.ActivateCertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthorityService.ActivateCertificateAuthority].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.ActivateCertificateAuthorityRequest</code>
 */
class ActivateCertificateAuthorityRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name for this [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] in the
     * format `projects/&#42;&#47;locations/&#42;&#47;certificateAuthorities/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The signed CA certificate issued from
     * [FetchCertificateAuthorityCsrResponse.pem_csr][google.cloud.security.privateca.v1beta1.FetchCertificateAuthorityCsrResponse.pem_csr].
     *
     * Generated from protobuf field <code>string pem_ca_certificate = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $pem_ca_certificate = '';
    /**
     * Required. Must include information about the issuer of 'pem_ca_certificate', and any
     * further issuers until the self-signed CA.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.SubordinateConfig subordinate_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $subordinate_config = null;
    /**
     * Optional. An ID to identify requests. Specify a unique request ID so that if you must
     * retry your request, the server will know to ignore the request if it has
     * already been completed. The server will guarantee that for at least 60
     * minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name for this [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] in the
     *           format `projects/&#42;&#47;locations/&#42;&#47;certificateAuthorities/&#42;`.
     *     @type string $pem_ca_certificate
     *           Required. The signed CA certificate issued from
     *           [FetchCertificateAuthorityCsrResponse.pem_csr][google.cloud.security.privateca.v1beta1.FetchCertificateAuthorityCsrResponse.pem_csr].
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\SubordinateConfig $subordinate_config
     *           Required. Must include information about the issuer of 'pem_ca_certificate', and any
     *           further issuers until the self-signed CA.
     *     @type string $request_id
     *           Optional. An ID to identify requests. Specify a unique request ID so that if you must
     *           retry your request, the server will know to ignore the request if it has
     *           already been completed. The server will guarantee that for at least 60
     *           minutes since the first request.
     *           For example, consider a situation where you make an initial request and t
     *           he request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name for this [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] in the
     * format `projects/&#42;&#47;locations/&#42;&#47;certificateAuthorities/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name for this [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] in the
     * format `projects/&#42;&#47;locations/&#42;&#47;certificateAuthorities/&#42;`.
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

    /**
     * Required. The signed CA certificate issued from
     * [FetchCertificateAuthorityCsrResponse.pem_csr][google.cloud.security.privateca.v1beta1.FetchCertificateAuthorityCsrResponse.pem_csr].
     *
     * Generated from protobuf field <code>string pem_ca_certificate = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPemCaCertificate()
    {
        return $this->pem_ca_certificate;
    }

    /**
     * Required. The signed CA certificate issued from
     * [FetchCertificateAuthorityCsrResponse.pem_csr][google.cloud.security.privateca.v1beta1.FetchCertificateAuthorityCsrResponse.pem_csr].
     *
     * Generated from protobuf field <code>string pem_ca_certificate = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPemCaCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->pem_ca_certificate = $var;

        return $this;
    }

    /**
     * Required. Must include information about the issuer of 'pem_ca_certificate', and any
     * further issuers until the self-signed CA.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.SubordinateConfig subordinate_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\SubordinateConfig|null
     */
    public function getSubordinateConfig()
    {
        return $this->subordinate_config;
    }

    public function hasSubordinateConfig()
    {
        return isset($this->subordinate_config);
    }

    public function clearSubordinateConfig()
    {
        unset($this->subordinate_config);
    }

    /**
     * Required. Must include information about the issuer of 'pem_ca_certificate', and any
     * further issuers until the self-signed CA.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.SubordinateConfig subordinate_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\SubordinateConfig $var
     * @return $this
     */
    public function setSubordinateConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\SubordinateConfig::class);
        $this->subordinate_config = $var;

        return $this;
    }

    /**
     * Optional. An ID to identify requests. Specify a unique request ID so that if you must
     * retry your request, the server will know to ignore the request if it has
     * already been completed. The server will guarantee that for at least 60
     * minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An ID to identify requests. Specify a unique request ID so that if you must
     * retry your request, the server will know to ignore the request if it has
     * already been completed. The server will guarantee that for at least 60
     * minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

