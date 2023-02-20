<?php

namespace Release;

class DbConfig
{
    /**
     * Global DB settings.
     */
    const DB_Params = [
        /**
         * This allows you to use different database drivers.
         * 
         * Supported drivers:
         * 
         * pdo_mysql (DB_PARAMS_PDO_MySQL)
         * pdo_sqlite (DB_PARAMS_PDO_SQLite)
         * pdo_pgsql, pgsql (DB_PARAMS_PgSQL)
         * pdo_oci, oci8 (DB_PARAMS_OCI)
         * pdo_sqlsrv, sqlsrv (DB_PARAMS_SQLSrv)
         * 
         * For PDO requires a PHP PDO extension.
         * 
         * mysqli (DB_PARAMS_MySQLi)
         * 
         * sqlite3 (DB_PARAMS_SQLite3) (Ignore user and password.)
         * 
         * ibm_db2 (DB_PARAMS_IBM_DB2)
         * 
         * Warning: you must fill in the following settings according to the driver you choose. Indicated in parentheses.
         * 
         * All list and requirements here: https://www.doctrine-project.org/projects/doctrine-dbal/en/current/reference/configuration.html#driver
         */
        'driver' => 'pdo_mysql',

        /**
         * Username to use when connecting to the database.
         */
        'user' => 'root',

        /**
         * Password to use when connecting to the database.
         */
        'password' => ''
    ];

    /**
     * @pdo_mysql
     */
    const DB_Params_PDO_MySQL = [
        /**
         * Name of the database/schema to connect to.
         */
        'dbname' => 'sf',

        /**
         * Hostname of the database to connect to.
         */
        'host' => 'localhost',

        /**
         * The charset used when connecting to the database.
         */
        'charset' => 'utf8mb4',

        /**
         * Port of the database to connect to.
         */
        'port' => 3306
    ];

    /**
     * @mysqli
     */
    const DB_PARAMS_MySQLi = [
        /**
         * Name of the database/schema to connect to.
         */
        'dbname' => '',

        /**
         * Hostname of the database to connect to.
         */
        'host' => 'localhost',

        /**
         * 
         */
        'charset' => 'utf8mb4',

        /**
         * Port of the database to connect to.
         */
        'port' => 3306
    ];

    /**
     * @sqlite3
     */
    const DB_PARAMS_SQLite3 = [
        /**
         * The filesystem path to the database file. Mutually exclusive with memory.
         */
        'path' => '',

        /**
         * True if the SQLite database should be in-memory (non-persistent). Mutually exclusive with path.
         */
        'memory' => false
    ];

    /**
     * @pdo_sqlite
     */
    const DB_PARAMS_PDO_SQLite = [
        /**
         * The filesystem path to the database file. Mutually exclusive with memory. path takes precedence.
         */
        'path' => '',

        /**
         * True if the SQLite database should be in-memory (non-persistent). Mutually exclusive with path. path takes precedence.
         */
        'memory' => false
    ];

    /**
     * @pdo_pgsql, @pgsql
     */
    const DB_PARAMS_PgSQL = [
        /**
         * Hostname of the database to connect to.
         */
        'host' => 'localhost',

        /**
         * Port of the database to connect to.
         */
        'port' => '',

        /**
         * Name of the database/schema to connect to.
         */
        'dbname' => '',

        /**
         * The charset used when connecting to the database.
         */
        'charset' => 'utf8mb4'
    ];

    /**
     * @pdo_oci, oci8
     */
    const DB_PARAMS_OCI = [
        /**
         * Hostname of the database to connect to.
         */
        'host' => 'localhost',

        /**
         * Port of the database to connect to.
         */
        'port' => '',

        /**
         * Name of the database/schema to connect to.
         */
        'dbname' => '',

        /**
         * The charset used when connecting to the database.
         */
        'charset' => 'utf8mb4'
    ];

    /**
     * @pdo_sqlsrv, @sqlsrv
     */
    const DB_PARAMS_SQLSrv = [
        /**
         * Hostname of the database to connect to.
         */
        'host' => 'localhost',

        /**
         * Port of the database to connect to.
         */
        'port' => '',

        /**
         * Name of the database/schema to connect to.
         */
        'dbname' => ''
    ];

    /**
     * @ibm_db2
     */
    const DB_PARAMS_IBM_DB2 = [
        /**
         * Hostname of the database to connect to.
         */
        'host' => 'localhost',

        /**
         * Port of the database to connect to.
         */
        'port' => '',

        /**
         * Name of the database/schema to connect to.
         */
        'dbname' => '',

        /**
         * The charset used when connecting to the database.
         */
        'charset' => 'utf8mb4'
    ];
}
