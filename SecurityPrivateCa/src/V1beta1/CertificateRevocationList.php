<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] corresponds to a signed X.509 certificate
 * Revocation List (CRL). A CRL contains the serial numbers of certificates that
 * should no longer be trusted.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.CertificateRevocationList</code>
 */
class CertificateRevocationList extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource path for this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] in
     * the format
     * `projects/&#42;&#47;locations/&#42;&#47;certificateAuthorities/&#42;&#47;
     *    certificateRevocationLists/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. The CRL sequence number that appears in pem_crl.
     *
     * Generated from protobuf field <code>int64 sequence_number = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $sequence_number = 0;
    /**
     * Output only. The revoked serial numbers that appear in pem_crl.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1beta1.CertificateRevocationList.RevokedCertificate revoked_certificates = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $revoked_certificates;
    /**
     * Output only. The PEM-encoded X.509 CRL.
     *
     * Generated from protobuf field <code>string pem_crl = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $pem_crl = '';
    /**
     * Output only. The location where 'pem_crl' can be accessed.
     *
     * Generated from protobuf field <code>string access_url = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $access_url = '';
    /**
     * Output only. The [State][google.cloud.security.privateca.v1beta1.CertificateRevocationList.State] for this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateRevocationList.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The time at which this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time at which this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource path for this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] in
     *           the format
     *           `projects/&#42;&#47;locations/&#42;&#47;certificateAuthorities/&#42;&#47;
     *              certificateRevocationLists/&#42;`.
     *     @type int|string $sequence_number
     *           Output only. The CRL sequence number that appears in pem_crl.
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\CertificateRevocationList\RevokedCertificate[]|\Google\Protobuf\Internal\RepeatedField $revoked_certificates
     *           Output only. The revoked serial numbers that appear in pem_crl.
     *     @type string $pem_crl
     *           Output only. The PEM-encoded X.509 CRL.
     *     @type string $access_url
     *           Output only. The location where 'pem_crl' can be accessed.
     *     @type int $state
     *           Output only. The [State][google.cloud.security.privateca.v1beta1.CertificateRevocationList.State] for this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList].
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] was updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels with user-defined metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource path for this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] in
     * the format
     * `projects/&#42;&#47;locations/&#42;&#47;certificateAuthorities/&#42;&#47;
     *    certificateRevocationLists/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource path for this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] in
     * the format
     * `projects/&#42;&#47;locations/&#42;&#47;certificateAuthorities/&#42;&#47;
     *    certificateRevocationLists/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The CRL sequence number that appears in pem_crl.
     *
     * Generated from protobuf field <code>int64 sequence_number = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSequenceNumber()
    {
        return $this->sequence_number;
    }

    /**
     * Output only. The CRL sequence number that appears in pem_crl.
     *
     * Generated from protobuf field <code>int64 sequence_number = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequenceNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->sequence_number = $var;

        return $this;
    }

    /**
     * Output only. The revoked serial numbers that appear in pem_crl.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1beta1.CertificateRevocationList.RevokedCertificate revoked_certificates = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRevokedCertificates()
    {
        return $this->revoked_certificates;
    }

    /**
     * Output only. The revoked serial numbers that appear in pem_crl.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1beta1.CertificateRevocationList.RevokedCertificate revoked_certificates = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\CertificateRevocationList\RevokedCertificate[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRevokedCertificates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateRevocationList\RevokedCertificate::class);
        $this->revoked_certificates = $arr;

        return $this;
    }

    /**
     * Output only. The PEM-encoded X.509 CRL.
     *
     * Generated from protobuf field <code>string pem_crl = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPemCrl()
    {
        return $this->pem_crl;
    }

    /**
     * Output only. The PEM-encoded X.509 CRL.
     *
     * Generated from protobuf field <code>string pem_crl = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPemCrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->pem_crl = $var;

        return $this;
    }

    /**
     * Output only. The location where 'pem_crl' can be accessed.
     *
     * Generated from protobuf field <code>string access_url = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getAccessUrl()
    {
        return $this->access_url;
    }

    /**
     * Output only. The location where 'pem_crl' can be accessed.
     *
     * Generated from protobuf field <code>string access_url = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setAccessUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_url = $var;

        return $this;
    }

    /**
     * Output only. The [State][google.cloud.security.privateca.v1beta1.CertificateRevocationList.State] for this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateRevocationList.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The [State][google.cloud.security.privateca.v1beta1.CertificateRevocationList.State] for this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateRevocationList.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateRevocationList\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The time at which this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time at which this [CertificateRevocationList][google.cloud.security.privateca.v1beta1.CertificateRevocationList] was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

