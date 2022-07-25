<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/tables.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for a dataset used for AutoML Tables.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.TablesDatasetMetadata</code>
 */
class TablesDatasetMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The table_spec_id of the primary table of this dataset.
     *
     * Generated from protobuf field <code>string primary_table_spec_id = 1;</code>
     */
    protected $primary_table_spec_id = '';
    /**
     * column_spec_id of the primary table's column that should be used as the
     * training & prediction target.
     * This column must be non-nullable and have one of following data types
     * (otherwise model creation will error):
     * * CATEGORY
     * * FLOAT64
     * If the type is CATEGORY , only up to
     * 100 unique values may exist in that column across all rows.
     * NOTE: Updates of this field will instantly affect any other users
     * concurrently working with the dataset.
     *
     * Generated from protobuf field <code>string target_column_spec_id = 2;</code>
     */
    protected $target_column_spec_id = '';
    /**
     * column_spec_id of the primary table's column that should be used as the
     * weight column, i.e. the higher the value the more important the row will be
     * during model training.
     * Required type: FLOAT64.
     * Allowed values: 0 to 10000, inclusive on both ends; 0 means the row is
     *                 ignored for training.
     * If not set all rows are assumed to have equal weight of 1.
     * NOTE: Updates of this field will instantly affect any other users
     * concurrently working with the dataset.
     *
     * Generated from protobuf field <code>string weight_column_spec_id = 3;</code>
     */
    protected $weight_column_spec_id = '';
    /**
     * column_spec_id of the primary table column which specifies a possible ML
     * use of the row, i.e. the column will be used to split the rows into TRAIN,
     * VALIDATE and TEST sets.
     * Required type: STRING.
     * This column, if set, must either have all of `TRAIN`, `VALIDATE`, `TEST`
     * among its values, or only have `TEST`, `UNASSIGNED` values. In the latter
     * case the rows with `UNASSIGNED` value will be assigned by AutoML. Note
     * that if a given ml use distribution makes it impossible to create a "good"
     * model, that call will error describing the issue.
     * If both this column_spec_id and primary table's time_column_spec_id are not
     * set, then all rows are treated as `UNASSIGNED`.
     * NOTE: Updates of this field will instantly affect any other users
     * concurrently working with the dataset.
     *
     * Generated from protobuf field <code>string ml_use_column_spec_id = 4;</code>
     */
    protected $ml_use_column_spec_id = '';
    /**
     * Output only. Correlations between
     * [TablesDatasetMetadata.target_column_spec_id][google.cloud.automl.v1beta1.TablesDatasetMetadata.target_column_spec_id],
     * and other columns of the
     * [TablesDatasetMetadataprimary_table][google.cloud.automl.v1beta1.TablesDatasetMetadata.primary_table_spec_id].
     * Only set if the target column is set. Mapping from other column spec id to
     * its CorrelationStats with the target column.
     * This field may be stale, see the stats_update_time field for
     * for the timestamp at which these stats were last updated.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.automl.v1beta1.CorrelationStats> target_column_correlations = 6;</code>
     */
    private $target_column_correlations;
    /**
     * Output only. The most recent timestamp when target_column_correlations
     * field and all descendant ColumnSpec.data_stats and
     * ColumnSpec.top_correlated_columns fields were last (re-)generated. Any
     * changes that happened to the dataset afterwards are not reflected in these
     * fields values. The regeneration happens in the background on a best effort
     * basis.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp stats_update_time = 7;</code>
     */
    protected $stats_update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $primary_table_spec_id
     *           Output only. The table_spec_id of the primary table of this dataset.
     *     @type string $target_column_spec_id
     *           column_spec_id of the primary table's column that should be used as the
     *           training & prediction target.
     *           This column must be non-nullable and have one of following data types
     *           (otherwise model creation will error):
     *           * CATEGORY
     *           * FLOAT64
     *           If the type is CATEGORY , only up to
     *           100 unique values may exist in that column across all rows.
     *           NOTE: Updates of this field will instantly affect any other users
     *           concurrently working with the dataset.
     *     @type string $weight_column_spec_id
     *           column_spec_id of the primary table's column that should be used as the
     *           weight column, i.e. the higher the value the more important the row will be
     *           during model training.
     *           Required type: FLOAT64.
     *           Allowed values: 0 to 10000, inclusive on both ends; 0 means the row is
     *                           ignored for training.
     *           If not set all rows are assumed to have equal weight of 1.
     *           NOTE: Updates of this field will instantly affect any other users
     *           concurrently working with the dataset.
     *     @type string $ml_use_column_spec_id
     *           column_spec_id of the primary table column which specifies a possible ML
     *           use of the row, i.e. the column will be used to split the rows into TRAIN,
     *           VALIDATE and TEST sets.
     *           Required type: STRING.
     *           This column, if set, must either have all of `TRAIN`, `VALIDATE`, `TEST`
     *           among its values, or only have `TEST`, `UNASSIGNED` values. In the latter
     *           case the rows with `UNASSIGNED` value will be assigned by AutoML. Note
     *           that if a given ml use distribution makes it impossible to create a "good"
     *           model, that call will error describing the issue.
     *           If both this column_spec_id and primary table's time_column_spec_id are not
     *           set, then all rows are treated as `UNASSIGNED`.
     *           NOTE: Updates of this field will instantly affect any other users
     *           concurrently working with the dataset.
     *     @type array|\Google\Protobuf\Internal\MapField $target_column_correlations
     *           Output only. Correlations between
     *           [TablesDatasetMetadata.target_column_spec_id][google.cloud.automl.v1beta1.TablesDatasetMetadata.target_column_spec_id],
     *           and other columns of the
     *           [TablesDatasetMetadataprimary_table][google.cloud.automl.v1beta1.TablesDatasetMetadata.primary_table_spec_id].
     *           Only set if the target column is set. Mapping from other column spec id to
     *           its CorrelationStats with the target column.
     *           This field may be stale, see the stats_update_time field for
     *           for the timestamp at which these stats were last updated.
     *     @type \Google\Protobuf\Timestamp $stats_update_time
     *           Output only. The most recent timestamp when target_column_correlations
     *           field and all descendant ColumnSpec.data_stats and
     *           ColumnSpec.top_correlated_columns fields were last (re-)generated. Any
     *           changes that happened to the dataset afterwards are not reflected in these
     *           fields values. The regeneration happens in the background on a best effort
     *           basis.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Tables::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The table_spec_id of the primary table of this dataset.
     *
     * Generated from protobuf field <code>string primary_table_spec_id = 1;</code>
     * @return string
     */
    public function getPrimaryTableSpecId()
    {
        return $this->primary_table_spec_id;
    }

    /**
     * Output only. The table_spec_id of the primary table of this dataset.
     *
     * Generated from protobuf field <code>string primary_table_spec_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryTableSpecId($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_table_spec_id = $var;

        return $this;
    }

    /**
     * column_spec_id of the primary table's column that should be used as the
     * training & prediction target.
     * This column must be non-nullable and have one of following data types
     * (otherwise model creation will error):
     * * CATEGORY
     * * FLOAT64
     * If the type is CATEGORY , only up to
     * 100 unique values may exist in that column across all rows.
     * NOTE: Updates of this field will instantly affect any other users
     * concurrently working with the dataset.
     *
     * Generated from protobuf field <code>string target_column_spec_id = 2;</code>
     * @return string
     */
    public function getTargetColumnSpecId()
    {
        return $this->target_column_spec_id;
    }

    /**
     * column_spec_id of the primary table's column that should be used as the
     * training & prediction target.
     * This column must be non-nullable and have one of following data types
     * (otherwise model creation will error):
     * * CATEGORY
     * * FLOAT64
     * If the type is CATEGORY , only up to
     * 100 unique values may exist in that column across all rows.
     * NOTE: Updates of this field will instantly affect any other users
     * concurrently working with the dataset.
     *
     * Generated from protobuf field <code>string target_column_spec_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetColumnSpecId($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_column_spec_id = $var;

        return $this;
    }

    /**
     * column_spec_id of the primary table's column that should be used as the
     * weight column, i.e. the higher the value the more important the row will be
     * during model training.
     * Required type: FLOAT64.
     * Allowed values: 0 to 10000, inclusive on both ends; 0 means the row is
     *                 ignored for training.
     * If not set all rows are assumed to have equal weight of 1.
     * NOTE: Updates of this field will instantly affect any other users
     * concurrently working with the dataset.
     *
     * Generated from protobuf field <code>string weight_column_spec_id = 3;</code>
     * @return string
     */
    public function getWeightColumnSpecId()
    {
        return $this->weight_column_spec_id;
    }

    /**
     * column_spec_id of the primary table's column that should be used as the
     * weight column, i.e. the higher the value the more important the row will be
     * during model training.
     * Required type: FLOAT64.
     * Allowed values: 0 to 10000, inclusive on both ends; 0 means the row is
     *                 ignored for training.
     * If not set all rows are assumed to have equal weight of 1.
     * NOTE: Updates of this field will instantly affect any other users
     * concurrently working with the dataset.
     *
     * Generated from protobuf field <code>string weight_column_spec_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setWeightColumnSpecId($var)
    {
        GPBUtil::checkString($var, True);
        $this->weight_column_spec_id = $var;

        return $this;
    }

    /**
     * column_spec_id of the primary table column which specifies a possible ML
     * use of the row, i.e. the column will be used to split the rows into TRAIN,
     * VALIDATE and TEST sets.
     * Required type: STRING.
     * This column, if set, must either have all of `TRAIN`, `VALIDATE`, `TEST`
     * among its values, or only have `TEST`, `UNASSIGNED` values. In the latter
     * case the rows with `UNASSIGNED` value will be assigned by AutoML. Note
     * that if a given ml use distribution makes it impossible to create a "good"
     * model, that call will error describing the issue.
     * If both this column_spec_id and primary table's time_column_spec_id are not
     * set, then all rows are treated as `UNASSIGNED`.
     * NOTE: Updates of this field will instantly affect any other users
     * concurrently working with the dataset.
     *
     * Generated from protobuf field <code>string ml_use_column_spec_id = 4;</code>
     * @return string
     */
    public function getMlUseColumnSpecId()
    {
        return $this->ml_use_column_spec_id;
    }

    /**
     * column_spec_id of the primary table column which specifies a possible ML
     * use of the row, i.e. the column will be used to split the rows into TRAIN,
     * VALIDATE and TEST sets.
     * Required type: STRING.
     * This column, if set, must either have all of `TRAIN`, `VALIDATE`, `TEST`
     * among its values, or only have `TEST`, `UNASSIGNED` values. In the latter
     * case the rows with `UNASSIGNED` value will be assigned by AutoML. Note
     * that if a given ml use distribution makes it impossible to create a "good"
     * model, that call will error describing the issue.
     * If both this column_spec_id and primary table's time_column_spec_id are not
     * set, then all rows are treated as `UNASSIGNED`.
     * NOTE: Updates of this field will instantly affect any other users
     * concurrently working with the dataset.
     *
     * Generated from protobuf field <code>string ml_use_column_spec_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMlUseColumnSpecId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ml_use_column_spec_id = $var;

        return $this;
    }

    /**
     * Output only. Correlations between
     * [TablesDatasetMetadata.target_column_spec_id][google.cloud.automl.v1beta1.TablesDatasetMetadata.target_column_spec_id],
     * and other columns of the
     * [TablesDatasetMetadataprimary_table][google.cloud.automl.v1beta1.TablesDatasetMetadata.primary_table_spec_id].
     * Only set if the target column is set. Mapping from other column spec id to
     * its CorrelationStats with the target column.
     * This field may be stale, see the stats_update_time field for
     * for the timestamp at which these stats were last updated.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.automl.v1beta1.CorrelationStats> target_column_correlations = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTargetColumnCorrelations()
    {
        return $this->target_column_correlations;
    }

    /**
     * Output only. Correlations between
     * [TablesDatasetMetadata.target_column_spec_id][google.cloud.automl.v1beta1.TablesDatasetMetadata.target_column_spec_id],
     * and other columns of the
     * [TablesDatasetMetadataprimary_table][google.cloud.automl.v1beta1.TablesDatasetMetadata.primary_table_spec_id].
     * Only set if the target column is set. Mapping from other column spec id to
     * its CorrelationStats with the target column.
     * This field may be stale, see the stats_update_time field for
     * for the timestamp at which these stats were last updated.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.automl.v1beta1.CorrelationStats> target_column_correlations = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTargetColumnCorrelations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1beta1\CorrelationStats::class);
        $this->target_column_correlations = $arr;

        return $this;
    }

    /**
     * Output only. The most recent timestamp when target_column_correlations
     * field and all descendant ColumnSpec.data_stats and
     * ColumnSpec.top_correlated_columns fields were last (re-)generated. Any
     * changes that happened to the dataset afterwards are not reflected in these
     * fields values. The regeneration happens in the background on a best effort
     * basis.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp stats_update_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStatsUpdateTime()
    {
        return $this->stats_update_time;
    }

    public function hasStatsUpdateTime()
    {
        return isset($this->stats_update_time);
    }

    public function clearStatsUpdateTime()
    {
        unset($this->stats_update_time);
    }

    /**
     * Output only. The most recent timestamp when target_column_correlations
     * field and all descendant ColumnSpec.data_stats and
     * ColumnSpec.top_correlated_columns fields were last (re-)generated. Any
     * changes that happened to the dataset afterwards are not reflected in these
     * fields values. The regeneration happens in the background on a best effort
     * basis.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp stats_update_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStatsUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->stats_update_time = $var;

        return $this;
    }

}

