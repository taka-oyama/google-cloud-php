<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use UnexpectedValueException;

/**
 * The database engine type and version.
 *
 * Protobuf type <code>google.cloud.sql.v1beta4.SqlDatabaseVersion</code>
 */
class SqlDatabaseVersion
{
    /**
     * This is an unknown database version.
     *
     * Generated from protobuf enum <code>SQL_DATABASE_VERSION_UNSPECIFIED = 0;</code>
     */
    const SQL_DATABASE_VERSION_UNSPECIFIED = 0;
    /**
     * The database version is MySQL 5.1.
     *
     * Generated from protobuf enum <code>MYSQL_5_1 = 2 [deprecated = true];</code>
     */
    const MYSQL_5_1 = 2;
    /**
     * The database version is MySQL 5.5.
     *
     * Generated from protobuf enum <code>MYSQL_5_5 = 3 [deprecated = true];</code>
     */
    const MYSQL_5_5 = 3;
    /**
     * The database version is MySQL 5.6.
     *
     * Generated from protobuf enum <code>MYSQL_5_6 = 5;</code>
     */
    const MYSQL_5_6 = 5;
    /**
     * The database version is MySQL 5.7.
     *
     * Generated from protobuf enum <code>MYSQL_5_7 = 6;</code>
     */
    const MYSQL_5_7 = 6;
    /**
     * The database version is PostgreSQL 9.6.
     *
     * Generated from protobuf enum <code>POSTGRES_9_6 = 9;</code>
     */
    const POSTGRES_9_6 = 9;
    /**
     * The database version is PostgreSQL 11.
     *
     * Generated from protobuf enum <code>POSTGRES_11 = 10;</code>
     */
    const POSTGRES_11 = 10;
    /**
     * The database version is SQL Server 2017 Standard.
     *
     * Generated from protobuf enum <code>SQLSERVER_2017_STANDARD = 11;</code>
     */
    const SQLSERVER_2017_STANDARD = 11;
    /**
     * The database version is SQL Server 2017 Enterprise.
     *
     * Generated from protobuf enum <code>SQLSERVER_2017_ENTERPRISE = 14;</code>
     */
    const SQLSERVER_2017_ENTERPRISE = 14;
    /**
     * The database version is SQL Server 2017 Express.
     *
     * Generated from protobuf enum <code>SQLSERVER_2017_EXPRESS = 15;</code>
     */
    const SQLSERVER_2017_EXPRESS = 15;
    /**
     * The database version is SQL Server 2017 Web.
     *
     * Generated from protobuf enum <code>SQLSERVER_2017_WEB = 16;</code>
     */
    const SQLSERVER_2017_WEB = 16;
    /**
     * The database version is PostgreSQL 10.
     *
     * Generated from protobuf enum <code>POSTGRES_10 = 18;</code>
     */
    const POSTGRES_10 = 18;
    /**
     * The database version is PostgreSQL 12.
     *
     * Generated from protobuf enum <code>POSTGRES_12 = 19;</code>
     */
    const POSTGRES_12 = 19;
    /**
     * The database version is MySQL 8.
     *
     * Generated from protobuf enum <code>MYSQL_8_0 = 20;</code>
     */
    const MYSQL_8_0 = 20;
    /**
     * The database major version is MySQL 8.0 and the minor version is 18.
     *
     * Generated from protobuf enum <code>MYSQL_8_0_18 = 41;</code>
     */
    const MYSQL_8_0_18 = 41;
    /**
     * The database major version is MySQL 8.0 and the minor version is 26.
     *
     * Generated from protobuf enum <code>MYSQL_8_0_26 = 85;</code>
     */
    const MYSQL_8_0_26 = 85;
    /**
     * The database major version is MySQL 8.0 and the minor version is 27.
     *
     * Generated from protobuf enum <code>MYSQL_8_0_27 = 111;</code>
     */
    const MYSQL_8_0_27 = 111;
    /**
     * The database major version is MySQL 8.0 and the minor version is 28.
     *
     * Generated from protobuf enum <code>MYSQL_8_0_28 = 132;</code>
     */
    const MYSQL_8_0_28 = 132;
    /**
     * The database version is PostgreSQL 13.
     *
     * Generated from protobuf enum <code>POSTGRES_13 = 23;</code>
     */
    const POSTGRES_13 = 23;
    /**
     * The database version is PostgreSQL 14.
     *
     * Generated from protobuf enum <code>POSTGRES_14 = 110;</code>
     */
    const POSTGRES_14 = 110;
    /**
     * The database version is SQL Server 2019 Standard.
     *
     * Generated from protobuf enum <code>SQLSERVER_2019_STANDARD = 26;</code>
     */
    const SQLSERVER_2019_STANDARD = 26;
    /**
     * The database version is SQL Server 2019 Enterprise.
     *
     * Generated from protobuf enum <code>SQLSERVER_2019_ENTERPRISE = 27;</code>
     */
    const SQLSERVER_2019_ENTERPRISE = 27;
    /**
     * The database version is SQL Server 2019 Express.
     *
     * Generated from protobuf enum <code>SQLSERVER_2019_EXPRESS = 28;</code>
     */
    const SQLSERVER_2019_EXPRESS = 28;
    /**
     * The database version is SQL Server 2019 Web.
     *
     * Generated from protobuf enum <code>SQLSERVER_2019_WEB = 29;</code>
     */
    const SQLSERVER_2019_WEB = 29;

    private static $valueToName = [
        self::SQL_DATABASE_VERSION_UNSPECIFIED => 'SQL_DATABASE_VERSION_UNSPECIFIED',
        self::MYSQL_5_1 => 'MYSQL_5_1',
        self::MYSQL_5_5 => 'MYSQL_5_5',
        self::MYSQL_5_6 => 'MYSQL_5_6',
        self::MYSQL_5_7 => 'MYSQL_5_7',
        self::POSTGRES_9_6 => 'POSTGRES_9_6',
        self::POSTGRES_11 => 'POSTGRES_11',
        self::SQLSERVER_2017_STANDARD => 'SQLSERVER_2017_STANDARD',
        self::SQLSERVER_2017_ENTERPRISE => 'SQLSERVER_2017_ENTERPRISE',
        self::SQLSERVER_2017_EXPRESS => 'SQLSERVER_2017_EXPRESS',
        self::SQLSERVER_2017_WEB => 'SQLSERVER_2017_WEB',
        self::POSTGRES_10 => 'POSTGRES_10',
        self::POSTGRES_12 => 'POSTGRES_12',
        self::MYSQL_8_0 => 'MYSQL_8_0',
        self::MYSQL_8_0_18 => 'MYSQL_8_0_18',
        self::MYSQL_8_0_26 => 'MYSQL_8_0_26',
        self::MYSQL_8_0_27 => 'MYSQL_8_0_27',
        self::MYSQL_8_0_28 => 'MYSQL_8_0_28',
        self::POSTGRES_13 => 'POSTGRES_13',
        self::POSTGRES_14 => 'POSTGRES_14',
        self::SQLSERVER_2019_STANDARD => 'SQLSERVER_2019_STANDARD',
        self::SQLSERVER_2019_ENTERPRISE => 'SQLSERVER_2019_ENTERPRISE',
        self::SQLSERVER_2019_EXPRESS => 'SQLSERVER_2019_EXPRESS',
        self::SQLSERVER_2019_WEB => 'SQLSERVER_2019_WEB',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

