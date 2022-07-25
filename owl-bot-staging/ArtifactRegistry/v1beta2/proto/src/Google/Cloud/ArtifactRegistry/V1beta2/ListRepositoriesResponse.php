<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response from listing repositories.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1beta2.ListRepositoriesResponse</code>
 */
class ListRepositoriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The repositories returned.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1beta2.Repository repositories = 1;</code>
     */
    private $repositories;
    /**
     * The token to retrieve the next page of repositories, or empty if there are
     * no more repositories to return.
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
     *     @type array<\Google\Cloud\ArtifactRegistry\V1beta2\Repository>|\Google\Protobuf\Internal\RepeatedField $repositories
     *           The repositories returned.
     *     @type string $next_page_token
     *           The token to retrieve the next page of repositories, or empty if there are
     *           no more repositories to return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\Repository::initOnce();
        parent::__construct($data);
    }

    /**
     * The repositories returned.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1beta2.Repository repositories = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRepositories()
    {
        return $this->repositories;
    }

    /**
     * The repositories returned.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1beta2.Repository repositories = 1;</code>
     * @param array<\Google\Cloud\ArtifactRegistry\V1beta2\Repository>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRepositories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ArtifactRegistry\V1beta2\Repository::class);
        $this->repositories = $arr;

        return $this;
    }

    /**
     * The token to retrieve the next page of repositories, or empty if there are
     * no more repositories to return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The token to retrieve the next page of repositories, or empty if there are
     * no more repositories to return.
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

