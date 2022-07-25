<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech_adaptation.proto

namespace Google\Cloud\Speech\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message returned to the client by the `ListPhraseSet` method.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.ListPhraseSetResponse</code>
 */
class ListPhraseSetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The phrase set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1p1beta1.PhraseSet phrase_sets = 1;</code>
     */
    private $phrase_sets;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Speech\V1p1beta1\PhraseSet>|\Google\Protobuf\Internal\RepeatedField $phrase_sets
     *           The phrase set.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\CloudSpeechAdaptation::initOnce();
        parent::__construct($data);
    }

    /**
     * The phrase set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1p1beta1.PhraseSet phrase_sets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhraseSets()
    {
        return $this->phrase_sets;
    }

    /**
     * The phrase set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1p1beta1.PhraseSet phrase_sets = 1;</code>
     * @param array<\Google\Cloud\Speech\V1p1beta1\PhraseSet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPhraseSets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1p1beta1\PhraseSet::class);
        $this->phrase_sets = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
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

}

