<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message containing what to include in the cache key for a request for Cloud CDN.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.CacheKeyPolicy</code>
 */
class CacheKeyPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * If true, requests to different hosts will be cached separately.
     *
     * Generated from protobuf field <code>optional bool include_host = 486867679;</code>
     */
    protected $include_host = null;
    /**
     * Allows HTTP request headers (by name) to be used in the cache key.
     *
     * Generated from protobuf field <code>repeated string include_http_headers = 2489606;</code>
     */
    private $include_http_headers;
    /**
     * Allows HTTP cookies (by name) to be used in the cache key. The name=value pair will be used in the cache key Cloud CDN generates.
     *
     * Generated from protobuf field <code>repeated string include_named_cookies = 87316530;</code>
     */
    private $include_named_cookies;
    /**
     * If true, http and https requests will be cached separately.
     *
     * Generated from protobuf field <code>optional bool include_protocol = 303507535;</code>
     */
    protected $include_protocol = null;
    /**
     * If true, include query string parameters in the cache key according to query_string_whitelist and query_string_blacklist. If neither is set, the entire query string will be included. If false, the query string will be excluded from the cache key entirely.
     *
     * Generated from protobuf field <code>optional bool include_query_string = 474036639;</code>
     */
    protected $include_query_string = null;
    /**
     * Names of query string parameters to exclude in cache keys. All other parameters will be included. Either specify query_string_whitelist or query_string_blacklist, not both. '&' and '=' will be percent encoded and not treated as delimiters.
     *
     * Generated from protobuf field <code>repeated string query_string_blacklist = 354964742;</code>
     */
    private $query_string_blacklist;
    /**
     * Names of query string parameters to include in cache keys. All other parameters will be excluded. Either specify query_string_whitelist or query_string_blacklist, not both. '&' and '=' will be percent encoded and not treated as delimiters.
     *
     * Generated from protobuf field <code>repeated string query_string_whitelist = 52456496;</code>
     */
    private $query_string_whitelist;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $include_host
     *           If true, requests to different hosts will be cached separately.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $include_http_headers
     *           Allows HTTP request headers (by name) to be used in the cache key.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $include_named_cookies
     *           Allows HTTP cookies (by name) to be used in the cache key. The name=value pair will be used in the cache key Cloud CDN generates.
     *     @type bool $include_protocol
     *           If true, http and https requests will be cached separately.
     *     @type bool $include_query_string
     *           If true, include query string parameters in the cache key according to query_string_whitelist and query_string_blacklist. If neither is set, the entire query string will be included. If false, the query string will be excluded from the cache key entirely.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $query_string_blacklist
     *           Names of query string parameters to exclude in cache keys. All other parameters will be included. Either specify query_string_whitelist or query_string_blacklist, not both. '&' and '=' will be percent encoded and not treated as delimiters.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $query_string_whitelist
     *           Names of query string parameters to include in cache keys. All other parameters will be excluded. Either specify query_string_whitelist or query_string_blacklist, not both. '&' and '=' will be percent encoded and not treated as delimiters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * If true, requests to different hosts will be cached separately.
     *
     * Generated from protobuf field <code>optional bool include_host = 486867679;</code>
     * @return bool
     */
    public function getIncludeHost()
    {
        return isset($this->include_host) ? $this->include_host : false;
    }

    public function hasIncludeHost()
    {
        return isset($this->include_host);
    }

    public function clearIncludeHost()
    {
        unset($this->include_host);
    }

    /**
     * If true, requests to different hosts will be cached separately.
     *
     * Generated from protobuf field <code>optional bool include_host = 486867679;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeHost($var)
    {
        GPBUtil::checkBool($var);
        $this->include_host = $var;

        return $this;
    }

    /**
     * Allows HTTP request headers (by name) to be used in the cache key.
     *
     * Generated from protobuf field <code>repeated string include_http_headers = 2489606;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeHttpHeaders()
    {
        return $this->include_http_headers;
    }

    /**
     * Allows HTTP request headers (by name) to be used in the cache key.
     *
     * Generated from protobuf field <code>repeated string include_http_headers = 2489606;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeHttpHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_http_headers = $arr;

        return $this;
    }

    /**
     * Allows HTTP cookies (by name) to be used in the cache key. The name=value pair will be used in the cache key Cloud CDN generates.
     *
     * Generated from protobuf field <code>repeated string include_named_cookies = 87316530;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeNamedCookies()
    {
        return $this->include_named_cookies;
    }

    /**
     * Allows HTTP cookies (by name) to be used in the cache key. The name=value pair will be used in the cache key Cloud CDN generates.
     *
     * Generated from protobuf field <code>repeated string include_named_cookies = 87316530;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeNamedCookies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_named_cookies = $arr;

        return $this;
    }

    /**
     * If true, http and https requests will be cached separately.
     *
     * Generated from protobuf field <code>optional bool include_protocol = 303507535;</code>
     * @return bool
     */
    public function getIncludeProtocol()
    {
        return isset($this->include_protocol) ? $this->include_protocol : false;
    }

    public function hasIncludeProtocol()
    {
        return isset($this->include_protocol);
    }

    public function clearIncludeProtocol()
    {
        unset($this->include_protocol);
    }

    /**
     * If true, http and https requests will be cached separately.
     *
     * Generated from protobuf field <code>optional bool include_protocol = 303507535;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeProtocol($var)
    {
        GPBUtil::checkBool($var);
        $this->include_protocol = $var;

        return $this;
    }

    /**
     * If true, include query string parameters in the cache key according to query_string_whitelist and query_string_blacklist. If neither is set, the entire query string will be included. If false, the query string will be excluded from the cache key entirely.
     *
     * Generated from protobuf field <code>optional bool include_query_string = 474036639;</code>
     * @return bool
     */
    public function getIncludeQueryString()
    {
        return isset($this->include_query_string) ? $this->include_query_string : false;
    }

    public function hasIncludeQueryString()
    {
        return isset($this->include_query_string);
    }

    public function clearIncludeQueryString()
    {
        unset($this->include_query_string);
    }

    /**
     * If true, include query string parameters in the cache key according to query_string_whitelist and query_string_blacklist. If neither is set, the entire query string will be included. If false, the query string will be excluded from the cache key entirely.
     *
     * Generated from protobuf field <code>optional bool include_query_string = 474036639;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeQueryString($var)
    {
        GPBUtil::checkBool($var);
        $this->include_query_string = $var;

        return $this;
    }

    /**
     * Names of query string parameters to exclude in cache keys. All other parameters will be included. Either specify query_string_whitelist or query_string_blacklist, not both. '&' and '=' will be percent encoded and not treated as delimiters.
     *
     * Generated from protobuf field <code>repeated string query_string_blacklist = 354964742;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryStringBlacklist()
    {
        return $this->query_string_blacklist;
    }

    /**
     * Names of query string parameters to exclude in cache keys. All other parameters will be included. Either specify query_string_whitelist or query_string_blacklist, not both. '&' and '=' will be percent encoded and not treated as delimiters.
     *
     * Generated from protobuf field <code>repeated string query_string_blacklist = 354964742;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryStringBlacklist($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->query_string_blacklist = $arr;

        return $this;
    }

    /**
     * Names of query string parameters to include in cache keys. All other parameters will be excluded. Either specify query_string_whitelist or query_string_blacklist, not both. '&' and '=' will be percent encoded and not treated as delimiters.
     *
     * Generated from protobuf field <code>repeated string query_string_whitelist = 52456496;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryStringWhitelist()
    {
        return $this->query_string_whitelist;
    }

    /**
     * Names of query string parameters to include in cache keys. All other parameters will be excluded. Either specify query_string_whitelist or query_string_blacklist, not both. '&' and '=' will be percent encoded and not treated as delimiters.
     *
     * Generated from protobuf field <code>repeated string query_string_whitelist = 52456496;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryStringWhitelist($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->query_string_whitelist = $arr;

        return $this;
    }

}

