<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/scheduler/v1/cloudscheduler.proto

namespace Google\Cloud\Scheduler\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for listing jobs using [ListJobs][google.cloud.scheduler.v1.CloudScheduler.ListJobs].
 *
 * Generated from protobuf message <code>google.cloud.scheduler.v1.ListJobsResponse</code>
 */
class ListJobsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of jobs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.scheduler.v1.Job jobs = 1;</code>
     */
    private $jobs;
    /**
     * A token to retrieve next page of results. Pass this value in the
     * [page_token][google.cloud.scheduler.v1.ListJobsRequest.page_token] field in the subsequent call to
     * [ListJobs][google.cloud.scheduler.v1.CloudScheduler.ListJobs] to retrieve the next page of results.
     * If this is empty it indicates that there are no more results
     * through which to paginate.
     * The page token is valid for only 2 hours.
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
     *     @type array<\Google\Cloud\Scheduler\V1\Job>|\Google\Protobuf\Internal\RepeatedField $jobs
     *           The list of jobs.
     *     @type string $next_page_token
     *           A token to retrieve next page of results. Pass this value in the
     *           [page_token][google.cloud.scheduler.v1.ListJobsRequest.page_token] field in the subsequent call to
     *           [ListJobs][google.cloud.scheduler.v1.CloudScheduler.ListJobs] to retrieve the next page of results.
     *           If this is empty it indicates that there are no more results
     *           through which to paginate.
     *           The page token is valid for only 2 hours.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Scheduler\V1\Cloudscheduler::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of jobs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.scheduler.v1.Job jobs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * The list of jobs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.scheduler.v1.Job jobs = 1;</code>
     * @param array<\Google\Cloud\Scheduler\V1\Job>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Scheduler\V1\Job::class);
        $this->jobs = $arr;

        return $this;
    }

    /**
     * A token to retrieve next page of results. Pass this value in the
     * [page_token][google.cloud.scheduler.v1.ListJobsRequest.page_token] field in the subsequent call to
     * [ListJobs][google.cloud.scheduler.v1.CloudScheduler.ListJobs] to retrieve the next page of results.
     * If this is empty it indicates that there are no more results
     * through which to paginate.
     * The page token is valid for only 2 hours.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve next page of results. Pass this value in the
     * [page_token][google.cloud.scheduler.v1.ListJobsRequest.page_token] field in the subsequent call to
     * [ListJobs][google.cloud.scheduler.v1.CloudScheduler.ListJobs] to retrieve the next page of results.
     * If this is empty it indicates that there are no more results
     * through which to paginate.
     * The page token is valid for only 2 hours.
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

