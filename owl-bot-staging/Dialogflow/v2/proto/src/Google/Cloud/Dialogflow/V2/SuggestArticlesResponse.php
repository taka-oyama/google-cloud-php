<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [Participants.SuggestArticles][google.cloud.dialogflow.v2.Participants.SuggestArticles].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SuggestArticlesResponse</code>
 */
class SuggestArticlesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Articles ordered by score in descending order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.ArticleAnswer article_answers = 1;</code>
     */
    private $article_answers;
    /**
     * The name of the latest conversation message used to compile
     * suggestion for.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *
     * Generated from protobuf field <code>string latest_message = 2;</code>
     */
    protected $latest_message = '';
    /**
     * Number of messages prior to and including
     * [latest_message][google.cloud.dialogflow.v2.SuggestArticlesResponse.latest_message] to compile the
     * suggestion. It may be smaller than the
     * [SuggestArticlesRequest.context_size][google.cloud.dialogflow.v2.SuggestArticlesRequest.context_size] field in the request if there
     * aren't that many messages in the conversation.
     *
     * Generated from protobuf field <code>int32 context_size = 3;</code>
     */
    protected $context_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\V2\ArticleAnswer>|\Google\Protobuf\Internal\RepeatedField $article_answers
     *           Articles ordered by score in descending order.
     *     @type string $latest_message
     *           The name of the latest conversation message used to compile
     *           suggestion for.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *     @type int $context_size
     *           Number of messages prior to and including
     *           [latest_message][google.cloud.dialogflow.v2.SuggestArticlesResponse.latest_message] to compile the
     *           suggestion. It may be smaller than the
     *           [SuggestArticlesRequest.context_size][google.cloud.dialogflow.v2.SuggestArticlesRequest.context_size] field in the request if there
     *           aren't that many messages in the conversation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * Articles ordered by score in descending order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.ArticleAnswer article_answers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArticleAnswers()
    {
        return $this->article_answers;
    }

    /**
     * Articles ordered by score in descending order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.ArticleAnswer article_answers = 1;</code>
     * @param array<\Google\Cloud\Dialogflow\V2\ArticleAnswer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArticleAnswers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\ArticleAnswer::class);
        $this->article_answers = $arr;

        return $this;
    }

    /**
     * The name of the latest conversation message used to compile
     * suggestion for.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *
     * Generated from protobuf field <code>string latest_message = 2;</code>
     * @return string
     */
    public function getLatestMessage()
    {
        return $this->latest_message;
    }

    /**
     * The name of the latest conversation message used to compile
     * suggestion for.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/messages/<Message ID>`.
     *
     * Generated from protobuf field <code>string latest_message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLatestMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->latest_message = $var;

        return $this;
    }

    /**
     * Number of messages prior to and including
     * [latest_message][google.cloud.dialogflow.v2.SuggestArticlesResponse.latest_message] to compile the
     * suggestion. It may be smaller than the
     * [SuggestArticlesRequest.context_size][google.cloud.dialogflow.v2.SuggestArticlesRequest.context_size] field in the request if there
     * aren't that many messages in the conversation.
     *
     * Generated from protobuf field <code>int32 context_size = 3;</code>
     * @return int
     */
    public function getContextSize()
    {
        return $this->context_size;
    }

    /**
     * Number of messages prior to and including
     * [latest_message][google.cloud.dialogflow.v2.SuggestArticlesResponse.latest_message] to compile the
     * suggestion. It may be smaller than the
     * [SuggestArticlesRequest.context_size][google.cloud.dialogflow.v2.SuggestArticlesRequest.context_size] field in the request if there
     * aren't that many messages in the conversation.
     *
     * Generated from protobuf field <code>int32 context_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setContextSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->context_size = $var;

        return $this;
    }

}

