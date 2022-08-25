<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/aiplatform/v1/prediction_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AIPlatform\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\Call;
use Google\Api\HttpBody;

use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\AIPlatform\V1\ExplainRequest;
use Google\Cloud\AIPlatform\V1\ExplainResponse;
use Google\Cloud\AIPlatform\V1\ExplanationSpecOverride;
use Google\Cloud\AIPlatform\V1\PredictRequest;
use Google\Cloud\AIPlatform\V1\PredictResponse;
use Google\Cloud\AIPlatform\V1\RawPredictRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\GetPolicyOptions;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\ListLocationsResponse;
use Google\Cloud\Location\Location;
use Google\Protobuf\FieldMask;
use Google\Protobuf\Value;

/**
 * Service Description: A service for online predictions and explanations.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $predictionServiceClient = new PredictionServiceClient();
 * try {
 *     $formattedEndpoint = $predictionServiceClient->endpointName('[PROJECT]', '[LOCATION]', '[ENDPOINT]');
 *     $instances = [];
 *     $response = $predictionServiceClient->explain($formattedEndpoint, $instances);
 * } finally {
 *     $predictionServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class PredictionServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.aiplatform.v1.PredictionService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'aiplatform.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $endpointNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/prediction_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/prediction_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/prediction_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/prediction_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getEndpointNameTemplate()
    {
        if (self::$endpointNameTemplate == null) {
            self::$endpointNameTemplate = new PathTemplate('projects/{project}/locations/{location}/endpoints/{endpoint}');
        }

        return self::$endpointNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'endpoint' => self::getEndpointNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a endpoint
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted endpoint resource.
     */
    public static function endpointName($project, $location, $endpoint)
    {
        return self::getEndpointNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - endpoint: projects/{project}/locations/{location}/endpoints/{endpoint}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'aiplatform.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Perform an online explanation.
     *
     * If [deployed_model_id][google.cloud.aiplatform.v1.ExplainRequest.deployed_model_id] is specified,
     * the corresponding DeployModel must have
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * populated. If [deployed_model_id][google.cloud.aiplatform.v1.ExplainRequest.deployed_model_id]
     * is not specified, all DeployedModels must have
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * populated. Only deployed AutoML tabular Models have
     * explanation_spec.
     *
     * Sample code:
     * ```
     * $predictionServiceClient = new PredictionServiceClient();
     * try {
     *     $formattedEndpoint = $predictionServiceClient->endpointName('[PROJECT]', '[LOCATION]', '[ENDPOINT]');
     *     $instances = [];
     *     $response = $predictionServiceClient->explain($formattedEndpoint, $instances);
     * } finally {
     *     $predictionServiceClient->close();
     * }
     * ```
     *
     * @param string  $endpoint     Required. The name of the Endpoint requested to serve the explanation.
     *                              Format:
     *                              `projects/{project}/locations/{location}/endpoints/{endpoint}`
     * @param Value[] $instances    Required. The instances that are the input to the explanation call.
     *                              A DeployedModel may have an upper limit on the number of instances it
     *                              supports per request, and when it is exceeded the explanation call errors
     *                              in case of AutoML Models, or, in case of customer created Models, the
     *                              behaviour is as documented by that Model.
     *                              The schema of any single instance may be specified via Endpoint's
     *                              DeployedModels' [Model's][google.cloud.aiplatform.v1.DeployedModel.model]
     *                              [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     *                              [instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri].
     * @param array   $optionalArgs {
     *     Optional.
     *
     *     @type Value $parameters
     *           The parameters that govern the prediction. The schema of the parameters may
     *           be specified via Endpoint's DeployedModels' [Model's ][google.cloud.aiplatform.v1.DeployedModel.model]
     *           [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     *           [parameters_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.parameters_schema_uri].
     *     @type ExplanationSpecOverride $explanationSpecOverride
     *           If specified, overrides the
     *           [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec] of the DeployedModel.
     *           Can be used for explaining prediction results with different
     *           configurations, such as:
     *           - Explaining top-5 predictions results as opposed to top-1;
     *           - Increasing path count or step count of the attribution methods to reduce
     *           approximate errors;
     *           - Using different baselines for explaining the prediction results.
     *     @type string $deployedModelId
     *           If specified, this ExplainRequest will be served by the chosen
     *           DeployedModel, overriding [Endpoint.traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split].
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AIPlatform\V1\ExplainResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function explain($endpoint, $instances, array $optionalArgs = [])
    {
        $request = new ExplainRequest();
        $requestParamHeaders = [];
        $request->setEndpoint($endpoint);
        $request->setInstances($instances);
        $requestParamHeaders['endpoint'] = $endpoint;
        if (isset($optionalArgs['parameters'])) {
            $request->setParameters($optionalArgs['parameters']);
        }

        if (isset($optionalArgs['explanationSpecOverride'])) {
            $request->setExplanationSpecOverride($optionalArgs['explanationSpecOverride']);
        }

        if (isset($optionalArgs['deployedModelId'])) {
            $request->setDeployedModelId($optionalArgs['deployedModelId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('Explain', ExplainResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Perform an online prediction.
     *
     * Sample code:
     * ```
     * $predictionServiceClient = new PredictionServiceClient();
     * try {
     *     $formattedEndpoint = $predictionServiceClient->endpointName('[PROJECT]', '[LOCATION]', '[ENDPOINT]');
     *     $instances = [];
     *     $response = $predictionServiceClient->predict($formattedEndpoint, $instances);
     * } finally {
     *     $predictionServiceClient->close();
     * }
     * ```
     *
     * @param string  $endpoint     Required. The name of the Endpoint requested to serve the prediction.
     *                              Format:
     *                              `projects/{project}/locations/{location}/endpoints/{endpoint}`
     * @param Value[] $instances    Required. The instances that are the input to the prediction call.
     *                              A DeployedModel may have an upper limit on the number of instances it
     *                              supports per request, and when it is exceeded the prediction call errors
     *                              in case of AutoML Models, or, in case of customer created Models, the
     *                              behaviour is as documented by that Model.
     *                              The schema of any single instance may be specified via Endpoint's
     *                              DeployedModels' [Model's][google.cloud.aiplatform.v1.DeployedModel.model]
     *                              [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     *                              [instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri].
     * @param array   $optionalArgs {
     *     Optional.
     *
     *     @type Value $parameters
     *           The parameters that govern the prediction. The schema of the parameters may
     *           be specified via Endpoint's DeployedModels' [Model's ][google.cloud.aiplatform.v1.DeployedModel.model]
     *           [PredictSchemata's][google.cloud.aiplatform.v1.Model.predict_schemata]
     *           [parameters_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.parameters_schema_uri].
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\AIPlatform\V1\PredictResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function predict($endpoint, $instances, array $optionalArgs = [])
    {
        $request = new PredictRequest();
        $requestParamHeaders = [];
        $request->setEndpoint($endpoint);
        $request->setInstances($instances);
        $requestParamHeaders['endpoint'] = $endpoint;
        if (isset($optionalArgs['parameters'])) {
            $request->setParameters($optionalArgs['parameters']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('Predict', PredictResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Perform an online prediction with an arbitrary HTTP payload.
     *
     * The response includes the following HTTP headers:
     *
     * * `X-Vertex-AI-Endpoint-Id`: ID of the [Endpoint][google.cloud.aiplatform.v1.Endpoint] that served this
     * prediction.
     *
     * * `X-Vertex-AI-Deployed-Model-Id`: ID of the Endpoint's [DeployedModel][google.cloud.aiplatform.v1.DeployedModel]
     * that served this prediction.
     *
     * Sample code:
     * ```
     * $predictionServiceClient = new PredictionServiceClient();
     * try {
     *     $formattedEndpoint = $predictionServiceClient->endpointName('[PROJECT]', '[LOCATION]', '[ENDPOINT]');
     *     $response = $predictionServiceClient->rawPredict($formattedEndpoint);
     * } finally {
     *     $predictionServiceClient->close();
     * }
     * ```
     *
     * @param string $endpoint     Required. The name of the Endpoint requested to serve the prediction.
     *                             Format:
     *                             `projects/{project}/locations/{location}/endpoints/{endpoint}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type HttpBody $httpBody
     *           The prediction input. Supports HTTP headers and arbitrary data payload.
     *
     *           A [DeployedModel][google.cloud.aiplatform.v1.DeployedModel] may have an upper limit on the number of instances it
     *           supports per request. When this limit it is exceeded for an AutoML model,
     *           the [RawPredict][google.cloud.aiplatform.v1.PredictionService.RawPredict] method returns an error.
     *           When this limit is exceeded for a custom-trained model, the behavior varies
     *           depending on the model.
     *
     *           You can specify the schema for each instance in the
     *           [predict_schemata.instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri]
     *           field when you create a [Model][google.cloud.aiplatform.v1.Model]. This schema applies when you deploy the
     *           `Model` as a `DeployedModel` to an [Endpoint][google.cloud.aiplatform.v1.Endpoint] and use the `RawPredict`
     *           method.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Api\HttpBody
     *
     * @throws ApiException if the remote call fails
     */
    public function rawPredict($endpoint, array $optionalArgs = [])
    {
        $request = new RawPredictRequest();
        $requestParamHeaders = [];
        $request->setEndpoint($endpoint);
        $requestParamHeaders['endpoint'] = $endpoint;
        if (isset($optionalArgs['httpBody'])) {
            $request->setHttpBody($optionalArgs['httpBody']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('RawPredict', HttpBody::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets information about a location.
     *
     * Sample code:
     * ```
     * $predictionServiceClient = new PredictionServiceClient();
     * try {
     *     $response = $predictionServiceClient->getLocation();
     * } finally {
     *     $predictionServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Resource name for the location.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Location\Location
     *
     * @throws ApiException if the remote call fails
     */
    public function getLocation(array $optionalArgs = [])
    {
        $request = new GetLocationRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetLocation', Location::class, $optionalArgs, $request, Call::UNARY_CALL, 'google.cloud.location.Locations')->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * Sample code:
     * ```
     * $predictionServiceClient = new PredictionServiceClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $predictionServiceClient->listLocations();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $predictionServiceClient->listLocations();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $predictionServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           The resource that owns the locations collection, if applicable.
     *     @type string $filter
     *           The standard list filter.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listLocations(array $optionalArgs = [])
    {
        $request = new ListLocationsRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListLocations', $optionalArgs, ListLocationsResponse::class, $request, 'google.cloud.location.Locations');
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * Sample code:
     * ```
     * $predictionServiceClient = new PredictionServiceClient();
     * try {
     *     $resource = 'resource';
     *     $response = $predictionServiceClient->getIamPolicy($resource);
     * } finally {
     *     $predictionServiceClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being requested.
     *                             See the operation documentation for the appropriate value for this field.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type GetPolicyOptions $options
     *           OPTIONAL: A `GetPolicyOptions` object for specifying options to
     *           `GetIamPolicy`.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function getIamPolicy($resource, array $optionalArgs = [])
    {
        $request = new GetIamPolicyRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $requestParamHeaders['resource'] = $resource;
        if (isset($optionalArgs['options'])) {
            $request->setOptions($optionalArgs['options']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetIamPolicy', Policy::class, $optionalArgs, $request, Call::UNARY_CALL, 'google.iam.v1.IAMPolicy')->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * Sample code:
     * ```
     * $predictionServiceClient = new PredictionServiceClient();
     * try {
     *     $resource = 'resource';
     *     $policy = new Policy();
     *     $response = $predictionServiceClient->setIamPolicy($resource, $policy);
     * } finally {
     *     $predictionServiceClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being specified.
     *                             See the operation documentation for the appropriate value for this field.
     * @param Policy $policy       REQUIRED: The complete policy to be applied to the `resource`. The size of
     *                             the policy is limited to a few 10s of KB. An empty policy is a
     *                             valid policy but certain Cloud Platform services (such as Projects)
     *                             might reject them.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           OPTIONAL: A FieldMask specifying which fields of the policy to modify. Only
     *           the fields in the mask will be modified. If no mask is provided, the
     *           following default mask is used:
     *
     *           `paths: "bindings, etag"`
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function setIamPolicy($resource, $policy, array $optionalArgs = [])
    {
        $request = new SetIamPolicyRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $request->setPolicy($policy);
        $requestParamHeaders['resource'] = $resource;
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('SetIamPolicy', Policy::class, $optionalArgs, $request, Call::UNARY_CALL, 'google.iam.v1.IAMPolicy')->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * Sample code:
     * ```
     * $predictionServiceClient = new PredictionServiceClient();
     * try {
     *     $resource = 'resource';
     *     $permissions = [];
     *     $response = $predictionServiceClient->testIamPermissions($resource, $permissions);
     * } finally {
     *     $predictionServiceClient->close();
     * }
     * ```
     *
     * @param string   $resource     REQUIRED: The resource for which the policy detail is being requested.
     *                               See the operation documentation for the appropriate value for this field.
     * @param string[] $permissions  The set of permissions to check for the `resource`. Permissions with
     *                               wildcards (such as '*' or 'storage.*') are not allowed. For more
     *                               information see
     *                               [IAM Overview](https://cloud.google.com/iam/docs/overview#permissions).
     * @param array    $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\TestIamPermissionsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function testIamPermissions($resource, $permissions, array $optionalArgs = [])
    {
        $request = new TestIamPermissionsRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $request->setPermissions($permissions);
        $requestParamHeaders['resource'] = $resource;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('TestIamPermissions', TestIamPermissionsResponse::class, $optionalArgs, $request, Call::UNARY_CALL, 'google.iam.v1.IAMPolicy')->wait();
    }
}
