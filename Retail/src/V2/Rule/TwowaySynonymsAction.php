<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2\Rule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Creates a set of terms that will be treated as synonyms of each other.
 * Example: synonyms of "sneakers" and "shoes":
 *  * "sneakers" will use a synonym of "shoes".
 *  * "shoes" will use a synonym of "sneakers".
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Rule.TwowaySynonymsAction</code>
 */
class TwowaySynonymsAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines a set of synonyms.
     * Can specify up to 100 synonyms.
     * Must specify at least 2 synonyms.
     *
     * Generated from protobuf field <code>repeated string synonyms = 1;</code>
     */
    private $synonyms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $synonyms
     *           Defines a set of synonyms.
     *           Can specify up to 100 synonyms.
     *           Must specify at least 2 synonyms.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines a set of synonyms.
     * Can specify up to 100 synonyms.
     * Must specify at least 2 synonyms.
     *
     * Generated from protobuf field <code>repeated string synonyms = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSynonyms()
    {
        return $this->synonyms;
    }

    /**
     * Defines a set of synonyms.
     * Can specify up to 100 synonyms.
     * Must specify at least 2 synonyms.
     *
     * Generated from protobuf field <code>repeated string synonyms = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSynonyms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->synonyms = $arr;

        return $this;
    }

}


