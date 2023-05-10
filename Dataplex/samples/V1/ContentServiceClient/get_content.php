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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START dataplex_v1_generated_ContentService_GetContent_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Dataplex\V1\Client\ContentServiceClient;
use Google\Cloud\Dataplex\V1\Content;
use Google\Cloud\Dataplex\V1\GetContentRequest;

/**
 * Get a content resource.
 *
 * @param string $formattedName The resource name of the content:
 *                              projects/{project_id}/locations/{location_id}/lakes/{lake_id}/content/{content_id}
 *                              Please see {@see ContentServiceClient::contentName()} for help formatting this field.
 */
function get_content_sample(string $formattedName): void
{
    // Create a client.
    $contentServiceClient = new ContentServiceClient();

    // Prepare the request message.
    $request = (new GetContentRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var Content $response */
        $response = $contentServiceClient->getContent($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = ContentServiceClient::contentName(
        '[PROJECT]',
        '[LOCATION]',
        '[LAKE]',
        '[CONTENT]'
    );

    get_content_sample($formattedName);
}
// [END dataplex_v1_generated_ContentService_GetContent_sync]
