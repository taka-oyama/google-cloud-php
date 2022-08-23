<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [DatasetService.ListSavedQueries][google.cloud.aiplatform.v1.DatasetService.ListSavedQueries].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListSavedQueriesResponse</code>
 */
class ListSavedQueriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of SavedQueries that match the specified filter in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SavedQuery saved_queries = 1;</code>
     */
    private $saved_queries;
    /**
     * The standard List next-page token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\SavedQuery>|\Google\Protobuf\Internal\RepeatedField $saved_queries
     *           A list of SavedQueries that match the specified filter in the request.
     *     @type string $next_page_token
     *           The standard List next-page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of SavedQueries that match the specified filter in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SavedQuery saved_queries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSavedQueries()
    {
        return $this->saved_queries;
    }

    /**
     * A list of SavedQueries that match the specified filter in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SavedQuery saved_queries = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\SavedQuery>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSavedQueries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\SavedQuery::class);
        $this->saved_queries = $arr;

        return $this;
    }

    /**
     * The standard List next-page token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The standard List next-page token.
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

