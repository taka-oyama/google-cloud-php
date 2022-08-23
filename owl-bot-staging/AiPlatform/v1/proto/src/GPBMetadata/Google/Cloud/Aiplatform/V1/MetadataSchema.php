<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_schema.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class MetadataSchema
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/cloud/aiplatform/v1/metadata_schema.protogoogle.cloud.aiplatform.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
MetadataSchema
name (	B�A
schema_version (	
schema (	B�AR
schema_type (2=.google.cloud.aiplatform.v1.MetadataSchema.MetadataSchemaType4
create_time (2.google.protobuf.TimestampB�A
description (	"s
MetadataSchemaType$
 METADATA_SCHEMA_TYPE_UNSPECIFIED 
ARTIFACT_TYPE
EXECUTION_TYPE
CONTEXT_TYPE:��A�
(aiplatform.googleapis.com/MetadataSchemaiprojects/{project}/locations/{location}/metadataStores/{metadata_store}/metadataSchemas/{metadata_schema}B�
com.google.cloud.aiplatform.v1BMetadataSchemaProtoPZDgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1;aiplatform�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

