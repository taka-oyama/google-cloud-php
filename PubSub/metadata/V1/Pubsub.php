<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace GPBMetadata\Google\Pubsub\V1;

class Pubsub
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Pubsub\V1\Schema::initOnce();
        $pool->internalAddGeneratedFile(
            '
�_
google/pubsub/v1/pubsub.protogoogle.pubsub.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/pubsub/v1/schema.proto";
MessageStoragePolicy#
allowed_persistence_regions (	"�
SchemaSettings4
schema (	B$�A�A
pubsub.googleapis.com/Schema,
encoding (2.google.pubsub.v1.Encoding
first_revision_id (	
last_revision_id (	"�
Topic
name (	B�A3
labels (2#.google.pubsub.v1.Topic.LabelsEntryF
message_storage_policy (2&.google.pubsub.v1.MessageStoragePolicy
kms_key_name (	9
schema_settings (2 .google.pubsub.v1.SchemaSettings
satisfies_pzs (=
message_retention_duration (2.google.protobuf.Duration-
LabelsEntry
key (	
value (	:8:T�AQ
pubsub.googleapis.com/Topic!projects/{project}/topics/{topic}_deleted-topic_"�
PubsubMessage
data (C

attributes (2/.google.pubsub.v1.PubsubMessage.AttributesEntry

message_id (	0
publish_time (2.google.protobuf.Timestamp
ordering_key (	1
AttributesEntry
key (	
value (	:8"E
GetTopicRequest2
topic (	B#�A�A
pubsub.googleapis.com/Topic"w
UpdateTopicRequest+
topic (2.google.pubsub.v1.TopicB�A4
update_mask (2.google.protobuf.FieldMaskB�A"|
PublishRequest2
topic (	B#�A�A
pubsub.googleapis.com/Topic6
messages (2.google.pubsub.v1.PubsubMessageB�A"&
PublishResponse
message_ids (	"�
ListTopicsRequestD
project (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (

page_token (	"V
ListTopicsResponse\'
topics (2.google.pubsub.v1.Topic
next_page_token (	"z
ListTopicSubscriptionsRequest2
topic (	B#�A�A
pubsub.googleapis.com/Topic
	page_size (

page_token (	"y
ListTopicSubscriptionsResponse>
subscriptions (	B\'�A$
"pubsub.googleapis.com/Subscription
next_page_token (	"v
ListTopicSnapshotsRequest2
topic (	B#�A�A
pubsub.googleapis.com/Topic
	page_size (

page_token (	"H
ListTopicSnapshotsResponse
	snapshots (	
next_page_token (	"H
DeleteTopicRequest2
topic (	B#�A�A
pubsub.googleapis.com/Topic"]
DetachSubscriptionRequest@
subscription (	B*�A�A$
"pubsub.googleapis.com/Subscription"
DetachSubscriptionResponse"�
Subscription
name (	B�A2
topic (	B#�A�A
pubsub.googleapis.com/Topic1
push_config (2.google.pubsub.v1.PushConfig9
bigquery_config (2 .google.pubsub.v1.BigQueryConfig
ack_deadline_seconds (
retain_acked_messages (=
message_retention_duration (2.google.protobuf.Duration:
labels	 (2*.google.pubsub.v1.Subscription.LabelsEntry
enable_message_ordering
 (=
expiration_policy (2".google.pubsub.v1.ExpirationPolicy
filter (	>
dead_letter_policy (2".google.pubsub.v1.DeadLetterPolicy3
retry_policy (2.google.pubsub.v1.RetryPolicy
detached ($
enable_exactly_once_delivery (H
 topic_message_retention_duration (2.google.protobuf.DurationB�A8
state (2$.google.pubsub.v1.Subscription.StateB�A-
LabelsEntry
key (	
value (	:8">
State
STATE_UNSPECIFIED 

ACTIVE
RESOURCE_ERROR:X�AU
"pubsub.googleapis.com/Subscription/projects/{project}/subscriptions/{subscription}"u
RetryPolicy2
minimum_backoff (2.google.protobuf.Duration2
maximum_backoff (2.google.protobuf.Duration"L
DeadLetterPolicy
dead_letter_topic (	
max_delivery_attempts (":
ExpirationPolicy&
ttl (2.google.protobuf.Duration"�

PushConfig
push_endpoint (	@

attributes (2,.google.pubsub.v1.PushConfig.AttributesEntry<

oidc_token (2&.google.pubsub.v1.PushConfig.OidcTokenH <
	OidcToken
service_account_email (	
audience (	1
AttributesEntry
key (	
value (	:8B
authentication_method"�
BigQueryConfig
table (	
use_topic_schema (
write_metadata (
drop_unknown_fields (:
state (2&.google.pubsub.v1.BigQueryConfig.StateB�A"e
State
STATE_UNSPECIFIED 

ACTIVE
PERMISSION_DENIED
	NOT_FOUND
SCHEMA_MISMATCH"m
ReceivedMessage
ack_id (	0
message (2.google.pubsub.v1.PubsubMessage
delivery_attempt ("Z
GetSubscriptionRequest@
subscription (	B*�A�A$
"pubsub.googleapis.com/Subscription"�
UpdateSubscriptionRequest9
subscription (2.google.pubsub.v1.SubscriptionB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
ListSubscriptionsRequestD
project (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (

page_token (	"k
ListSubscriptionsResponse5
subscriptions (2.google.pubsub.v1.Subscription
next_page_token (	"]
DeleteSubscriptionRequest@
subscription (	B*�A�A$
"pubsub.googleapis.com/Subscription"�
ModifyPushConfigRequest@
subscription (	B*�A�A$
"pubsub.googleapis.com/Subscription6
push_config (2.google.pubsub.v1.PushConfigB�A"�
PullRequest@
subscription (	B*�A�A$
"pubsub.googleapis.com/Subscription!
return_immediately (B�A
max_messages (B�A"L
PullResponse<
received_messages (2!.google.pubsub.v1.ReceivedMessage"�
ModifyAckDeadlineRequest@
subscription (	B*�A�A$
"pubsub.googleapis.com/Subscription
ack_ids (	B�A!
ack_deadline_seconds (B�A"l
AcknowledgeRequest@
subscription (	B*�A�A$
"pubsub.googleapis.com/Subscription
ack_ids (	B�A"�
StreamingPullRequest@
subscription (	B*�A�A$
"pubsub.googleapis.com/Subscription
ack_ids (	
modify_deadline_seconds (
modify_deadline_ack_ids (	(
stream_ack_deadline_seconds (B�A
	client_id (	 
max_outstanding_messages (
max_outstanding_bytes ("�
StreamingPullResponse<
received_messages (2!.google.pubsub.v1.ReceivedMessagea
acknowledge_confirmation (2?.google.pubsub.v1.StreamingPullResponse.AcknowledgeConfirmationo
 modify_ack_deadline_confirmation (2E.google.pubsub.v1.StreamingPullResponse.ModifyAckDeadlineConfirmation_
subscription_properties (2>.google.pubsub.v1.StreamingPullResponse.SubscriptionProperties^
AcknowledgeConfirmation
ack_ids (	
invalid_ack_ids (	
unordered_ack_ids (	I
ModifyAckDeadlineConfirmation
ack_ids (	
invalid_ack_ids (	a
SubscriptionProperties%
exactly_once_delivery_enabled ( 
message_ordering_enabled (J"�
CreateSnapshotRequest4
name (	B&�A�A 
pubsub.googleapis.com/Snapshot@
subscription (	B*�A�A$
"pubsub.googleapis.com/SubscriptionC
labels (23.google.pubsub.v1.CreateSnapshotRequest.LabelsEntry-
LabelsEntry
key (	
value (	:8"�
UpdateSnapshotRequest1
snapshot (2.google.pubsub.v1.SnapshotB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
Snapshot
name (	/
topic (	B �A
pubsub.googleapis.com/Topic/
expire_time (2.google.protobuf.Timestamp6
labels (2&.google.pubsub.v1.Snapshot.LabelsEntry-
LabelsEntry
key (	
value (	:8:L�AI
pubsub.googleapis.com/Snapshot\'projects/{project}/snapshots/{snapshot}"N
GetSnapshotRequest8
snapshot (	B&�A�A 
pubsub.googleapis.com/Snapshot"�
ListSnapshotsRequestD
project (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (

page_token (	"_
ListSnapshotsResponse-
	snapshots (2.google.pubsub.v1.Snapshot
next_page_token (	"Q
DeleteSnapshotRequest8
snapshot (	B&�A�A 
pubsub.googleapis.com/Snapshot"�
SeekRequest@
subscription (	B*�A�A$
"pubsub.googleapis.com/Subscription*
time (2.google.protobuf.TimestampH 7
snapshot (	B#�A 
pubsub.googleapis.com/SnapshotH B
target"
SeekResponse2�
	Publisherq
CreateTopic.google.pubsub.v1.Topic.google.pubsub.v1.Topic"0���#/v1/{name=projects/*/topics/*}:*�Aname}
UpdateTopic$.google.pubsub.v1.UpdateTopicRequest.google.pubsub.v1.Topic"/���)2$/v1/{topic.name=projects/*/topics/*}:*�
Publish .google.pubsub.v1.PublishRequest!.google.pubsub.v1.PublishResponse"C���,"\'/v1/{topic=projects/*/topics/*}:publish:*�Atopic,messagesw
GetTopic!.google.pubsub.v1.GetTopicRequest.google.pubsub.v1.Topic"/���!/v1/{topic=projects/*/topics/*}�Atopic�

ListTopics#.google.pubsub.v1.ListTopicsRequest$.google.pubsub.v1.ListTopicsResponse"1���!/v1/{project=projects/*}/topics�Aproject�
ListTopicSubscriptions/.google.pubsub.v1.ListTopicSubscriptionsRequest0.google.pubsub.v1.ListTopicSubscriptionsResponse"=���/-/v1/{topic=projects/*/topics/*}/subscriptions�Atopic�
ListTopicSnapshots+.google.pubsub.v1.ListTopicSnapshotsRequest,.google.pubsub.v1.ListTopicSnapshotsResponse"9���+)/v1/{topic=projects/*/topics/*}/snapshots�Atopic|
DeleteTopic$.google.pubsub.v1.DeleteTopicRequest.google.protobuf.Empty"/���!*/v1/{topic=projects/*/topics/*}�Atopic�
DetachSubscription+.google.pubsub.v1.DetachSubscriptionRequest,.google.pubsub.v1.DetachSubscriptionResponse"<���6"4/v1/{subscription=projects/*/subscriptions/*}:detachp�Apubsub.googleapis.com�AUhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/pubsub2�

Subscriber�
CreateSubscription.google.pubsub.v1.Subscription.google.pubsub.v1.Subscription"^���*%/v1/{name=projects/*/subscriptions/*}:*�A+name,topic,push_config,ack_deadline_seconds�
GetSubscription(.google.pubsub.v1.GetSubscriptionRequest.google.pubsub.v1.Subscription"D���/-/v1/{subscription=projects/*/subscriptions/*}�Asubscription�
UpdateSubscription+.google.pubsub.v1.UpdateSubscriptionRequest.google.pubsub.v1.Subscription"=���722/v1/{subscription.name=projects/*/subscriptions/*}:*�
ListSubscriptions*.google.pubsub.v1.ListSubscriptionsRequest+.google.pubsub.v1.ListSubscriptionsResponse"8���(&/v1/{project=projects/*}/subscriptions�Aproject�
DeleteSubscription+.google.pubsub.v1.DeleteSubscriptionRequest.google.protobuf.Empty"D���/*-/v1/{subscription=projects/*/subscriptions/*}�Asubscription�
ModifyAckDeadline*.google.pubsub.v1.ModifyAckDeadlineRequest.google.protobuf.Empty"v���D"?/v1/{subscription=projects/*/subscriptions/*}:modifyAckDeadline:*�A)subscription,ack_ids,ack_deadline_seconds�
Acknowledge$.google.pubsub.v1.AcknowledgeRequest.google.protobuf.Empty"[���>"9/v1/{subscription=projects/*/subscriptions/*}:acknowledge:*�Asubscription,ack_ids�
Pull.google.pubsub.v1.PullRequest.google.pubsub.v1.PullResponse"����7"2/v1/{subscription=projects/*/subscriptions/*}:pull:*�A,subscription,return_immediately,max_messages�Asubscription,max_messagesf
StreamingPull&.google.pubsub.v1.StreamingPullRequest\'.google.pubsub.v1.StreamingPullResponse" (0�
ModifyPushConfig).google.pubsub.v1.ModifyPushConfigRequest.google.protobuf.Empty"d���C">/v1/{subscription=projects/*/subscriptions/*}:modifyPushConfig:*�Asubscription,push_config�
GetSnapshot$.google.pubsub.v1.GetSnapshotRequest.google.pubsub.v1.Snapshot"8���\'%/v1/{snapshot=projects/*/snapshots/*}�Asnapshot�
ListSnapshots&.google.pubsub.v1.ListSnapshotsRequest\'.google.pubsub.v1.ListSnapshotsResponse"4���$"/v1/{project=projects/*}/snapshots�Aproject�
CreateSnapshot\'.google.pubsub.v1.CreateSnapshotRequest.google.pubsub.v1.Snapshot"@���&!/v1/{name=projects/*/snapshots/*}:*�Aname,subscription�
UpdateSnapshot\'.google.pubsub.v1.UpdateSnapshotRequest.google.pubsub.v1.Snapshot"5���/2*/v1/{snapshot.name=projects/*/snapshots/*}:*�
DeleteSnapshot\'.google.pubsub.v1.DeleteSnapshotRequest.google.protobuf.Empty"8���\'*%/v1/{snapshot=projects/*/snapshots/*}�Asnapshot�
Seek.google.pubsub.v1.SeekRequest.google.pubsub.v1.SeekResponse"=���7"2/v1/{subscription=projects/*/subscriptions/*}:seek:*p�Apubsub.googleapis.com�AUhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/pubsubB�
com.google.pubsub.v1BPubsubProtoPZ6google.golang.org/genproto/googleapis/pubsub/v1;pubsub��Google.Cloud.PubSub.V1�Google\\Cloud\\PubSub\\V1�Google::Cloud::PubSub::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

