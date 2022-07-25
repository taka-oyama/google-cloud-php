<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/common.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A description of the context in which an error occurred.
 * This data should be provided by the application when reporting an error,
 * unless the
 * error report has been generated automatically from Google App Engine logs.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.ErrorContext</code>
 */
class ErrorContext extends \Google\Protobuf\Internal\Message
{
    /**
     * The HTTP request which was processed when the error was
     * triggered.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.HttpRequestContext http_request = 1;</code>
     */
    protected $http_request = null;
    /**
     * The user who caused or was affected by the crash.
     * This can be a user ID, an email address, or an arbitrary token that
     * uniquely identifies the user.
     * When sending an error report, leave this field empty if the user was not
     * logged in. In this case the
     * Error Reporting system will use other data, such as remote IP address, to
     * distinguish affected users. See `affected_users_count` in
     * `ErrorGroupStats`.
     *
     * Generated from protobuf field <code>string user = 2;</code>
     */
    protected $user = '';
    /**
     * The location in the source code where the decision was made to
     * report the error, usually the place where it was logged.
     * For a logged exception this would be the source line where the
     * exception is logged, usually close to the place where it was
     * caught.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.SourceLocation report_location = 3;</code>
     */
    protected $report_location = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ErrorReporting\V1beta1\HttpRequestContext $http_request
     *           The HTTP request which was processed when the error was
     *           triggered.
     *     @type string $user
     *           The user who caused or was affected by the crash.
     *           This can be a user ID, an email address, or an arbitrary token that
     *           uniquely identifies the user.
     *           When sending an error report, leave this field empty if the user was not
     *           logged in. In this case the
     *           Error Reporting system will use other data, such as remote IP address, to
     *           distinguish affected users. See `affected_users_count` in
     *           `ErrorGroupStats`.
     *     @type \Google\Cloud\ErrorReporting\V1beta1\SourceLocation $report_location
     *           The location in the source code where the decision was made to
     *           report the error, usually the place where it was logged.
     *           For a logged exception this would be the source line where the
     *           exception is logged, usually close to the place where it was
     *           caught.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The HTTP request which was processed when the error was
     * triggered.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.HttpRequestContext http_request = 1;</code>
     * @return \Google\Cloud\ErrorReporting\V1beta1\HttpRequestContext|null
     */
    public function getHttpRequest()
    {
        return $this->http_request;
    }

    public function hasHttpRequest()
    {
        return isset($this->http_request);
    }

    public function clearHttpRequest()
    {
        unset($this->http_request);
    }

    /**
     * The HTTP request which was processed when the error was
     * triggered.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.HttpRequestContext http_request = 1;</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\HttpRequestContext $var
     * @return $this
     */
    public function setHttpRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ErrorReporting\V1beta1\HttpRequestContext::class);
        $this->http_request = $var;

        return $this;
    }

    /**
     * The user who caused or was affected by the crash.
     * This can be a user ID, an email address, or an arbitrary token that
     * uniquely identifies the user.
     * When sending an error report, leave this field empty if the user was not
     * logged in. In this case the
     * Error Reporting system will use other data, such as remote IP address, to
     * distinguish affected users. See `affected_users_count` in
     * `ErrorGroupStats`.
     *
     * Generated from protobuf field <code>string user = 2;</code>
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * The user who caused or was affected by the crash.
     * This can be a user ID, an email address, or an arbitrary token that
     * uniquely identifies the user.
     * When sending an error report, leave this field empty if the user was not
     * logged in. In this case the
     * Error Reporting system will use other data, such as remote IP address, to
     * distinguish affected users. See `affected_users_count` in
     * `ErrorGroupStats`.
     *
     * Generated from protobuf field <code>string user = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->user = $var;

        return $this;
    }

    /**
     * The location in the source code where the decision was made to
     * report the error, usually the place where it was logged.
     * For a logged exception this would be the source line where the
     * exception is logged, usually close to the place where it was
     * caught.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.SourceLocation report_location = 3;</code>
     * @return \Google\Cloud\ErrorReporting\V1beta1\SourceLocation|null
     */
    public function getReportLocation()
    {
        return $this->report_location;
    }

    public function hasReportLocation()
    {
        return isset($this->report_location);
    }

    public function clearReportLocation()
    {
        unset($this->report_location);
    }

    /**
     * The location in the source code where the decision was made to
     * report the error, usually the place where it was logged.
     * For a logged exception this would be the source line where the
     * exception is logged, usually close to the place where it was
     * caught.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.SourceLocation report_location = 3;</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\SourceLocation $var
     * @return $this
     */
    public function setReportLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ErrorReporting\V1beta1\SourceLocation::class);
        $this->report_location = $var;

        return $this;
    }

}

