<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/event.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class Event
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
�
&google/cloud/aiplatform/v1/event.protogoogle.cloud.aiplatform.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
Event<
artifact (	B*�A�A$
"aiplatform.googleapis.com/Artifact>
	execution (	B+�A�A%
#aiplatform.googleapis.com/Execution3

event_time (2.google.protobuf.TimestampB�A9
type (2&.google.cloud.aiplatform.v1.Event.TypeB�A=
labels (2-.google.cloud.aiplatform.v1.Event.LabelsEntry-
LabelsEntry
key (	
value (	:8"3
Type
TYPE_UNSPECIFIED 	
INPUT

OUTPUTB�
com.google.cloud.aiplatform.v1B
EventProtoPZDgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1;aiplatform�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

