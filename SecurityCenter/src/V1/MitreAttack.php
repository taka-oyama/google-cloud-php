<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/mitre_attack.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MITRE ATT&CK tactics and techniques related to this finding.
 * See: https://attack.mitre.org
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.MitreAttack</code>
 */
class MitreAttack extends \Google\Protobuf\Internal\Message
{
    /**
     * The MITRE ATT&CK tactic most closely represented by this finding, if any.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.MitreAttack.Tactic primary_tactic = 1;</code>
     */
    private $primary_tactic = 0;
    /**
     * The MITRE ATT&CK technique most closely represented by this finding, if
     * any. primary_techniques is a repeated field because there are multiple
     * levels of MITRE ATT&CK techniques.  If the technique most closely
     * represented by this finding is a sub-technique (e.g. `SCANNING_IP_BLOCKS`),
     * both the sub-technique and its parent technique(s) will be listed (e.g.
     * `SCANNING_IP_BLOCKS`, `ACTIVE_SCANNING`).
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.MitreAttack.Technique primary_techniques = 2;</code>
     */
    private $primary_techniques;
    /**
     * Additional MITRE ATT&CK tactics related to this finding, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.MitreAttack.Tactic additional_tactics = 3;</code>
     */
    private $additional_tactics;
    /**
     * Additional MITRE ATT&CK techniques related to this finding, if any, along
     * with any of their respective parent techniques.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.MitreAttack.Technique additional_techniques = 4;</code>
     */
    private $additional_techniques;
    /**
     * The MITRE ATT&CK version referenced by the above fields. E.g. "8".
     *
     * Generated from protobuf field <code>string version = 5;</code>
     */
    private $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $primary_tactic
     *           The MITRE ATT&CK tactic most closely represented by this finding, if any.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $primary_techniques
     *           The MITRE ATT&CK technique most closely represented by this finding, if
     *           any. primary_techniques is a repeated field because there are multiple
     *           levels of MITRE ATT&CK techniques.  If the technique most closely
     *           represented by this finding is a sub-technique (e.g. `SCANNING_IP_BLOCKS`),
     *           both the sub-technique and its parent technique(s) will be listed (e.g.
     *           `SCANNING_IP_BLOCKS`, `ACTIVE_SCANNING`).
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $additional_tactics
     *           Additional MITRE ATT&CK tactics related to this finding, if any.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $additional_techniques
     *           Additional MITRE ATT&CK techniques related to this finding, if any, along
     *           with any of their respective parent techniques.
     *     @type string $version
     *           The MITRE ATT&CK version referenced by the above fields. E.g. "8".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\MitreAttack::initOnce();
        parent::__construct($data);
    }

    /**
     * The MITRE ATT&CK tactic most closely represented by this finding, if any.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.MitreAttack.Tactic primary_tactic = 1;</code>
     * @return int
     */
    public function getPrimaryTactic()
    {
        return $this->primary_tactic;
    }

    /**
     * The MITRE ATT&CK tactic most closely represented by this finding, if any.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.MitreAttack.Tactic primary_tactic = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPrimaryTactic($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V1\MitreAttack\Tactic::class);
        $this->primary_tactic = $var;

        return $this;
    }

    /**
     * The MITRE ATT&CK technique most closely represented by this finding, if
     * any. primary_techniques is a repeated field because there are multiple
     * levels of MITRE ATT&CK techniques.  If the technique most closely
     * represented by this finding is a sub-technique (e.g. `SCANNING_IP_BLOCKS`),
     * both the sub-technique and its parent technique(s) will be listed (e.g.
     * `SCANNING_IP_BLOCKS`, `ACTIVE_SCANNING`).
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.MitreAttack.Technique primary_techniques = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrimaryTechniques()
    {
        return $this->primary_techniques;
    }

    /**
     * The MITRE ATT&CK technique most closely represented by this finding, if
     * any. primary_techniques is a repeated field because there are multiple
     * levels of MITRE ATT&CK techniques.  If the technique most closely
     * represented by this finding is a sub-technique (e.g. `SCANNING_IP_BLOCKS`),
     * both the sub-technique and its parent technique(s) will be listed (e.g.
     * `SCANNING_IP_BLOCKS`, `ACTIVE_SCANNING`).
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.MitreAttack.Technique primary_techniques = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrimaryTechniques($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\SecurityCenter\V1\MitreAttack\Technique::class);
        $this->primary_techniques = $arr;

        return $this;
    }

    /**
     * Additional MITRE ATT&CK tactics related to this finding, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.MitreAttack.Tactic additional_tactics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalTactics()
    {
        return $this->additional_tactics;
    }

    /**
     * Additional MITRE ATT&CK tactics related to this finding, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.MitreAttack.Tactic additional_tactics = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalTactics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\SecurityCenter\V1\MitreAttack\Tactic::class);
        $this->additional_tactics = $arr;

        return $this;
    }

    /**
     * Additional MITRE ATT&CK techniques related to this finding, if any, along
     * with any of their respective parent techniques.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.MitreAttack.Technique additional_techniques = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalTechniques()
    {
        return $this->additional_techniques;
    }

    /**
     * Additional MITRE ATT&CK techniques related to this finding, if any, along
     * with any of their respective parent techniques.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.MitreAttack.Technique additional_techniques = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalTechniques($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\SecurityCenter\V1\MitreAttack\Technique::class);
        $this->additional_techniques = $arr;

        return $this;
    }

    /**
     * The MITRE ATT&CK version referenced by the above fields. E.g. "8".
     *
     * Generated from protobuf field <code>string version = 5;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The MITRE ATT&CK version referenced by the above fields. E.g. "8".
     *
     * Generated from protobuf field <code>string version = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

