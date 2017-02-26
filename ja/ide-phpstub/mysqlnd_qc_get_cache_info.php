/**
 * (PECL mysqlnd_qc >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.mysqlnd-qc-get-cache-info.php
 * @return array Returns information on the current handler, the number of cache entries and
 * cache entries, if available. If and what data will be returned for the cache
 * entries is subject to the active storage handler.
 * Storage handler are free to return any data. Storage handler are
 * recommended to return at least the data provided by the default handler,
 * if technically possible.The scope of the information is the PHP process. Depending on the PHP deployment
 * model a process may serve one or more web requests.Values are aggregated for all cache activities on a per storage handler basis.
 * It is not possible to tell how much queries originating from
 * mysqli, PDO_MySQL or
 * mysql.API calls have contributed to the aggregated data values. Use
 * mysqlnd_qc_get_core_stats
 * to get timing data aggregated for all storage handlers.mysqliPDO_MySQLmysqlmysqlnd_qc_get_core_statsArray of cache informationhandler
 * string
 * The active storage handler.
 * All storage handler. Since 1.0.0.
 * handler_version
 * string
 * The version of the active storage handler.
 * All storage handler. Since 1.0.0.
 * num_entries
 * int
 * The number of cache entries. The value depends on the storage handler in use.
 * The default, APC and SQLite storage handler provide the actual
 * number of cache entries.
 * The MEMCACHE storage handler always returns 0.
 * MEMCACHE does not support counting the number of cache entries.
 * If a user defined handler is used, the number of
 * entries of the data property is reported.
 * Since 1.0.0.
 * data
 * array
 * The version of the active storage handler.
 * Additional storage handler dependent data on the cache entries.
 * Storage handler are requested to provide similar and comparable
 * information. A user defined storage handler is free to return any data.
 * Since 1.0.0.
 * The following information is provided by the default storage handler
 * for the data property.
 * The data
 * property holds a hash. The hash is indexed by the internal
 * cache entry identifier of the storage handler. The cache entry identifier
 * is human-readable and contains the query string leading to the cache entry.
 * Please, see also the example below. The following data is given for
 * every cache entry.
 * statistics
 * array
 * Statistics of the cache entry.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * rows
 * Number of rows of the cached result set.
 * Since 1.0.0.
 * stored_size
 * The size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.
 * Since 1.0.0.
 * cache_hits
 * How often the cached entry has been returned.
 * Since 1.0.0.
 * run_time
 * Run time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).
 * Since 1.0.0.
 * store_time
 * Store time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.
 * Since 1.0.0.
 * min_run_time
 * Minimum run time of the cached statement. How long it took
 * to find the statement in the cache.
 * Since 1.0.0.
 * min_store_time
 * Minimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decoding
 * Since 1.0.0.
 * avg_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * avg_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * max_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * max_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * valid_until
 * Timestamp when the cache entry expires.
 * Since 1.1.0.
 * metadata
 * array
 * Metadata of the cache entry.
 * This is the metadata provided by MySQL together with the
 * result set of the statement in question. Different versions
 * of the MySQL server may return different metadata. Unlike with
 * some of the PHP MySQL extensions no attempt is made to hide
 * MySQL server version dependencies and version details from the
 * caller. Please, refer to the MySQL C API documentation that
 * belongs to the MySQL server in use for further details.
 * The metadata list contains one entry for every column.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * name
 * The field name. Depending on the MySQL version this
 * may be the fields alias name.
 * Since 1.0.0.
 * org_name
 * The field name.
 * Since 1.0.0.
 * table
 * The table name. If an alias name was used for the table, this
 * usually holds the alias name.
 * Since 1.0.0.
 * org_table
 * The table name.
 * Since 1.0.0.
 * db
 * The database/schema name.
 * Since 1.0.0.
 * max_length
 * The maximum width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * length
 * The width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * type
 * The data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.
 * Since 1.0.0.
 * The APC storage handler returns the same information
 * for the data property but no metadata.
 * The metadata of a cache entry is set to NULL.
 * The MEMCACHE storage handler does not fill the data property.
 * Statistics are not available on a per cache entry basis with the MEMCACHE storage
 * handler.
 * A user defined storage handler is free to provide any data.handler
 * string
 * The active storage handler.
 * All storage handler. Since 1.0.0.
 * handler_version
 * string
 * The version of the active storage handler.
 * All storage handler. Since 1.0.0.
 * num_entries
 * int
 * The number of cache entries. The value depends on the storage handler in use.
 * The default, APC and SQLite storage handler provide the actual
 * number of cache entries.
 * The MEMCACHE storage handler always returns 0.
 * MEMCACHE does not support counting the number of cache entries.
 * If a user defined handler is used, the number of
 * entries of the data property is reported.
 * Since 1.0.0.
 * data
 * array
 * The version of the active storage handler.
 * Additional storage handler dependent data on the cache entries.
 * Storage handler are requested to provide similar and comparable
 * information. A user defined storage handler is free to return any data.
 * Since 1.0.0.
 * The following information is provided by the default storage handler
 * for the data property.
 * The data
 * property holds a hash. The hash is indexed by the internal
 * cache entry identifier of the storage handler. The cache entry identifier
 * is human-readable and contains the query string leading to the cache entry.
 * Please, see also the example below. The following data is given for
 * every cache entry.
 * statistics
 * array
 * Statistics of the cache entry.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * rows
 * Number of rows of the cached result set.
 * Since 1.0.0.
 * stored_size
 * The size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.
 * Since 1.0.0.
 * cache_hits
 * How often the cached entry has been returned.
 * Since 1.0.0.
 * run_time
 * Run time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).
 * Since 1.0.0.
 * store_time
 * Store time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.
 * Since 1.0.0.
 * min_run_time
 * Minimum run time of the cached statement. How long it took
 * to find the statement in the cache.
 * Since 1.0.0.
 * min_store_time
 * Minimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decoding
 * Since 1.0.0.
 * avg_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * avg_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * max_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * max_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * valid_until
 * Timestamp when the cache entry expires.
 * Since 1.1.0.
 * metadata
 * array
 * Metadata of the cache entry.
 * This is the metadata provided by MySQL together with the
 * result set of the statement in question. Different versions
 * of the MySQL server may return different metadata. Unlike with
 * some of the PHP MySQL extensions no attempt is made to hide
 * MySQL server version dependencies and version details from the
 * caller. Please, refer to the MySQL C API documentation that
 * belongs to the MySQL server in use for further details.
 * The metadata list contains one entry for every column.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * name
 * The field name. Depending on the MySQL version this
 * may be the fields alias name.
 * Since 1.0.0.
 * org_name
 * The field name.
 * Since 1.0.0.
 * table
 * The table name. If an alias name was used for the table, this
 * usually holds the alias name.
 * Since 1.0.0.
 * org_table
 * The table name.
 * Since 1.0.0.
 * db
 * The database/schema name.
 * Since 1.0.0.
 * max_length
 * The maximum width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * length
 * The width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * type
 * The data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.
 * Since 1.0.0.
 * The APC storage handler returns the same information
 * for the data property but no metadata.
 * The metadata of a cache entry is set to NULL.
 * The MEMCACHE storage handler does not fill the data property.
 * Statistics are not available on a per cache entry basis with the MEMCACHE storage
 * handler.
 * A user defined storage handler is free to provide any data.handler
 * string
 * The active storage handler.
 * All storage handler. Since 1.0.0.handler
 * stringhandlerstringThe active storage handler.
 * All storage handler. Since 1.0.0.The active storage handler.All storage handler. Since 1.0.0.handler_version
 * string
 * The version of the active storage handler.
 * All storage handler. Since 1.0.0.handler_version
 * stringhandler_versionstringThe version of the active storage handler.
 * All storage handler. Since 1.0.0.The version of the active storage handler.All storage handler. Since 1.0.0.num_entries
 * int
 * The number of cache entries. The value depends on the storage handler in use.
 * The default, APC and SQLite storage handler provide the actual
 * number of cache entries.
 * The MEMCACHE storage handler always returns 0.
 * MEMCACHE does not support counting the number of cache entries.
 * If a user defined handler is used, the number of
 * entries of the data property is reported.
 * Since 1.0.0.num_entries
 * intnum_entriesintThe number of cache entries. The value depends on the storage handler in use.
 * The default, APC and SQLite storage handler provide the actual
 * number of cache entries.
 * The MEMCACHE storage handler always returns 0.
 * MEMCACHE does not support counting the number of cache entries.
 * If a user defined handler is used, the number of
 * entries of the data property is reported.
 * Since 1.0.0.The number of cache entries. The value depends on the storage handler in use.The default, APC and SQLite storage handler provide the actual
 * number of cache entries.The MEMCACHE storage handler always returns 0.
 * MEMCACHE does not support counting the number of cache entries.0If a user defined handler is used, the number of
 * entries of the data property is reported.dataSince 1.0.0.data
 * array
 * The version of the active storage handler.
 * Additional storage handler dependent data on the cache entries.
 * Storage handler are requested to provide similar and comparable
 * information. A user defined storage handler is free to return any data.
 * Since 1.0.0.
 * The following information is provided by the default storage handler
 * for the data property.
 * The data
 * property holds a hash. The hash is indexed by the internal
 * cache entry identifier of the storage handler. The cache entry identifier
 * is human-readable and contains the query string leading to the cache entry.
 * Please, see also the example below. The following data is given for
 * every cache entry.
 * statistics
 * array
 * Statistics of the cache entry.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * rows
 * Number of rows of the cached result set.
 * Since 1.0.0.
 * stored_size
 * The size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.
 * Since 1.0.0.
 * cache_hits
 * How often the cached entry has been returned.
 * Since 1.0.0.
 * run_time
 * Run time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).
 * Since 1.0.0.
 * store_time
 * Store time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.
 * Since 1.0.0.
 * min_run_time
 * Minimum run time of the cached statement. How long it took
 * to find the statement in the cache.
 * Since 1.0.0.
 * min_store_time
 * Minimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decoding
 * Since 1.0.0.
 * avg_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * avg_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * max_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * max_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * valid_until
 * Timestamp when the cache entry expires.
 * Since 1.1.0.
 * metadata
 * array
 * Metadata of the cache entry.
 * This is the metadata provided by MySQL together with the
 * result set of the statement in question. Different versions
 * of the MySQL server may return different metadata. Unlike with
 * some of the PHP MySQL extensions no attempt is made to hide
 * MySQL server version dependencies and version details from the
 * caller. Please, refer to the MySQL C API documentation that
 * belongs to the MySQL server in use for further details.
 * The metadata list contains one entry for every column.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * name
 * The field name. Depending on the MySQL version this
 * may be the fields alias name.
 * Since 1.0.0.
 * org_name
 * The field name.
 * Since 1.0.0.
 * table
 * The table name. If an alias name was used for the table, this
 * usually holds the alias name.
 * Since 1.0.0.
 * org_table
 * The table name.
 * Since 1.0.0.
 * db
 * The database/schema name.
 * Since 1.0.0.
 * max_length
 * The maximum width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * length
 * The width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * type
 * The data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.
 * Since 1.0.0.
 * The APC storage handler returns the same information
 * for the data property but no metadata.
 * The metadata of a cache entry is set to NULL.
 * The MEMCACHE storage handler does not fill the data property.
 * Statistics are not available on a per cache entry basis with the MEMCACHE storage
 * handler.
 * A user defined storage handler is free to provide any data.data
 * arraydataarrayThe version of the active storage handler.
 * Additional storage handler dependent data on the cache entries.
 * Storage handler are requested to provide similar and comparable
 * information. A user defined storage handler is free to return any data.
 * Since 1.0.0.
 * The following information is provided by the default storage handler
 * for the data property.
 * The data
 * property holds a hash. The hash is indexed by the internal
 * cache entry identifier of the storage handler. The cache entry identifier
 * is human-readable and contains the query string leading to the cache entry.
 * Please, see also the example below. The following data is given for
 * every cache entry.
 * statistics
 * array
 * Statistics of the cache entry.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * rows
 * Number of rows of the cached result set.
 * Since 1.0.0.
 * stored_size
 * The size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.
 * Since 1.0.0.
 * cache_hits
 * How often the cached entry has been returned.
 * Since 1.0.0.
 * run_time
 * Run time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).
 * Since 1.0.0.
 * store_time
 * Store time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.
 * Since 1.0.0.
 * min_run_time
 * Minimum run time of the cached statement. How long it took
 * to find the statement in the cache.
 * Since 1.0.0.
 * min_store_time
 * Minimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decoding
 * Since 1.0.0.
 * avg_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * avg_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * max_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * max_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * valid_until
 * Timestamp when the cache entry expires.
 * Since 1.1.0.
 * metadata
 * array
 * Metadata of the cache entry.
 * This is the metadata provided by MySQL together with the
 * result set of the statement in question. Different versions
 * of the MySQL server may return different metadata. Unlike with
 * some of the PHP MySQL extensions no attempt is made to hide
 * MySQL server version dependencies and version details from the
 * caller. Please, refer to the MySQL C API documentation that
 * belongs to the MySQL server in use for further details.
 * The metadata list contains one entry for every column.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * name
 * The field name. Depending on the MySQL version this
 * may be the fields alias name.
 * Since 1.0.0.
 * org_name
 * The field name.
 * Since 1.0.0.
 * table
 * The table name. If an alias name was used for the table, this
 * usually holds the alias name.
 * Since 1.0.0.
 * org_table
 * The table name.
 * Since 1.0.0.
 * db
 * The database/schema name.
 * Since 1.0.0.
 * max_length
 * The maximum width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * length
 * The width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * type
 * The data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.
 * Since 1.0.0.
 * The APC storage handler returns the same information
 * for the data property but no metadata.
 * The metadata of a cache entry is set to NULL.
 * The MEMCACHE storage handler does not fill the data property.
 * Statistics are not available on a per cache entry basis with the MEMCACHE storage
 * handler.
 * A user defined storage handler is free to provide any data.The version of the active storage handler.Additional storage handler dependent data on the cache entries.
 * Storage handler are requested to provide similar and comparable
 * information. A user defined storage handler is free to return any data.Since 1.0.0.The following information is provided by the default storage handler
 * for the data property.dataThe data
 * property holds a hash. The hash is indexed by the internal
 * cache entry identifier of the storage handler. The cache entry identifier
 * is human-readable and contains the query string leading to the cache entry.
 * Please, see also the example below. The following data is given for
 * every cache entry.datastatistics
 * array
 * Statistics of the cache entry.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * rows
 * Number of rows of the cached result set.
 * Since 1.0.0.
 * stored_size
 * The size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.
 * Since 1.0.0.
 * cache_hits
 * How often the cached entry has been returned.
 * Since 1.0.0.
 * run_time
 * Run time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).
 * Since 1.0.0.
 * store_time
 * Store time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.
 * Since 1.0.0.
 * min_run_time
 * Minimum run time of the cached statement. How long it took
 * to find the statement in the cache.
 * Since 1.0.0.
 * min_store_time
 * Minimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decoding
 * Since 1.0.0.
 * avg_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * avg_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * max_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * max_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * valid_until
 * Timestamp when the cache entry expires.
 * Since 1.1.0.
 * metadata
 * array
 * Metadata of the cache entry.
 * This is the metadata provided by MySQL together with the
 * result set of the statement in question. Different versions
 * of the MySQL server may return different metadata. Unlike with
 * some of the PHP MySQL extensions no attempt is made to hide
 * MySQL server version dependencies and version details from the
 * caller. Please, refer to the MySQL C API documentation that
 * belongs to the MySQL server in use for further details.
 * The metadata list contains one entry for every column.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * name
 * The field name. Depending on the MySQL version this
 * may be the fields alias name.
 * Since 1.0.0.
 * org_name
 * The field name.
 * Since 1.0.0.
 * table
 * The table name. If an alias name was used for the table, this
 * usually holds the alias name.
 * Since 1.0.0.
 * org_table
 * The table name.
 * Since 1.0.0.
 * db
 * The database/schema name.
 * Since 1.0.0.
 * max_length
 * The maximum width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * length
 * The width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * type
 * The data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.
 * Since 1.0.0.statistics
 * array
 * Statistics of the cache entry.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * rows
 * Number of rows of the cached result set.
 * Since 1.0.0.
 * stored_size
 * The size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.
 * Since 1.0.0.
 * cache_hits
 * How often the cached entry has been returned.
 * Since 1.0.0.
 * run_time
 * Run time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).
 * Since 1.0.0.
 * store_time
 * Store time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.
 * Since 1.0.0.
 * min_run_time
 * Minimum run time of the cached statement. How long it took
 * to find the statement in the cache.
 * Since 1.0.0.
 * min_store_time
 * Minimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decoding
 * Since 1.0.0.
 * avg_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * avg_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * max_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * max_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * valid_until
 * Timestamp when the cache entry expires.
 * Since 1.1.0.
 * metadata
 * array
 * Metadata of the cache entry.
 * This is the metadata provided by MySQL together with the
 * result set of the statement in question. Different versions
 * of the MySQL server may return different metadata. Unlike with
 * some of the PHP MySQL extensions no attempt is made to hide
 * MySQL server version dependencies and version details from the
 * caller. Please, refer to the MySQL C API documentation that
 * belongs to the MySQL server in use for further details.
 * The metadata list contains one entry for every column.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * name
 * The field name. Depending on the MySQL version this
 * may be the fields alias name.
 * Since 1.0.0.
 * org_name
 * The field name.
 * Since 1.0.0.
 * table
 * The table name. If an alias name was used for the table, this
 * usually holds the alias name.
 * Since 1.0.0.
 * org_table
 * The table name.
 * Since 1.0.0.
 * db
 * The database/schema name.
 * Since 1.0.0.
 * max_length
 * The maximum width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * length
 * The width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * type
 * The data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.
 * Since 1.0.0.statistics
 * array
 * Statistics of the cache entry.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * rows
 * Number of rows of the cached result set.
 * Since 1.0.0.
 * stored_size
 * The size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.
 * Since 1.0.0.
 * cache_hits
 * How often the cached entry has been returned.
 * Since 1.0.0.
 * run_time
 * Run time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).
 * Since 1.0.0.
 * store_time
 * Store time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.
 * Since 1.0.0.
 * min_run_time
 * Minimum run time of the cached statement. How long it took
 * to find the statement in the cache.
 * Since 1.0.0.
 * min_store_time
 * Minimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decoding
 * Since 1.0.0.
 * avg_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * avg_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * max_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * max_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * valid_until
 * Timestamp when the cache entry expires.
 * Since 1.1.0.statistics
 * arraystatisticsarrayStatistics of the cache entry.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * rows
 * Number of rows of the cached result set.
 * Since 1.0.0.
 * stored_size
 * The size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.
 * Since 1.0.0.
 * cache_hits
 * How often the cached entry has been returned.
 * Since 1.0.0.
 * run_time
 * Run time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).
 * Since 1.0.0.
 * store_time
 * Store time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.
 * Since 1.0.0.
 * min_run_time
 * Minimum run time of the cached statement. How long it took
 * to find the statement in the cache.
 * Since 1.0.0.
 * min_store_time
 * Minimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decoding
 * Since 1.0.0.
 * avg_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * avg_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * max_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * max_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * valid_until
 * Timestamp when the cache entry expires.
 * Since 1.1.0.Statistics of the cache entry.Since 1.0.0.Property
 * Description
 * Version
 * rows
 * Number of rows of the cached result set.
 * Since 1.0.0.
 * stored_size
 * The size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.
 * Since 1.0.0.
 * cache_hits
 * How often the cached entry has been returned.
 * Since 1.0.0.
 * run_time
 * Run time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).
 * Since 1.0.0.
 * store_time
 * Store time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.
 * Since 1.0.0.
 * min_run_time
 * Minimum run time of the cached statement. How long it took
 * to find the statement in the cache.
 * Since 1.0.0.
 * min_store_time
 * Minimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decoding
 * Since 1.0.0.
 * avg_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * avg_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * max_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * max_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * valid_until
 * Timestamp when the cache entry expires.
 * Since 1.1.0.Property
 * Description
 * Version
 * rows
 * Number of rows of the cached result set.
 * Since 1.0.0.
 * stored_size
 * The size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.
 * Since 1.0.0.
 * cache_hits
 * How often the cached entry has been returned.
 * Since 1.0.0.
 * run_time
 * Run time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).
 * Since 1.0.0.
 * store_time
 * Store time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.
 * Since 1.0.0.
 * min_run_time
 * Minimum run time of the cached statement. How long it took
 * to find the statement in the cache.
 * Since 1.0.0.
 * min_store_time
 * Minimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decoding
 * Since 1.0.0.
 * avg_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * avg_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * max_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * max_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * valid_until
 * Timestamp when the cache entry expires.
 * Since 1.1.0.Property
 * Description
 * VersionProperty
 * Description
 * VersionPropertyDescriptionVersionrows
 * Number of rows of the cached result set.
 * Since 1.0.0.
 * stored_size
 * The size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.
 * Since 1.0.0.
 * cache_hits
 * How often the cached entry has been returned.
 * Since 1.0.0.
 * run_time
 * Run time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).
 * Since 1.0.0.
 * store_time
 * Store time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.
 * Since 1.0.0.
 * min_run_time
 * Minimum run time of the cached statement. How long it took
 * to find the statement in the cache.
 * Since 1.0.0.
 * min_store_time
 * Minimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decoding
 * Since 1.0.0.
 * avg_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * avg_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * max_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.
 * max_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.
 * valid_until
 * Timestamp when the cache entry expires.
 * Since 1.1.0.rows
 * Number of rows of the cached result set.
 * Since 1.0.0.rowsrowsNumber of rows of the cached result set.Since 1.0.0.stored_size
 * The size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.
 * Since 1.0.0.stored_sizestored_sizeThe size of the cached result set in bytes. This is the size
 * of the payload. The value is not suited for calculating the
 * total memory consumption of all cache entries including the
 * administrative overhead of the cache entries.Since 1.0.0.cache_hits
 * How often the cached entry has been returned.
 * Since 1.0.0.cache_hitscache_hitsHow often the cached entry has been returned.Since 1.0.0.run_time
 * Run time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).
 * Since 1.0.0.run_timerun_timeRun time of the statement to which the cache entry belongs.
 * This is the run time of the uncached statement. It is the time
 * between sending the statement to MySQL receiving a reply from MySQL.
 * Run time saved by using the query cache plugin can be calculated
 * like this: cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time)).cache_hits * ((run_time - avg_run_time) + (store_time - avg_store_time))Since 1.0.0.store_time
 * Store time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.
 * Since 1.0.0.store_timestore_timeStore time of the statements result set to which the cache entry belongs.
 * This is the time it took to fetch and store the results of the uncached
 * statement.Since 1.0.0.min_run_time
 * Minimum run time of the cached statement. How long it took
 * to find the statement in the cache.
 * Since 1.0.0.min_run_timemin_run_timeMinimum run time of the cached statement. How long it took
 * to find the statement in the cache.Since 1.0.0.min_store_time
 * Minimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decoding
 * Since 1.0.0.min_store_timemin_store_timeMinimum store time of the cached statement. The time taken
 * for fetching the cached result set from the storage medium and
 * decodingSince 1.0.0.avg_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.avg_run_timeavg_run_timeAverage run time of the cached statement.Since 1.0.0.avg_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.avg_store_timeavg_store_timeAverage store time of the cached statement.Since 1.0.0.max_run_time
 * Average run time of the cached statement.
 * Since 1.0.0.max_run_timemax_run_timeAverage run time of the cached statement.Since 1.0.0.max_store_time
 * Average store time of the cached statement.
 * Since 1.0.0.max_store_timemax_store_timeAverage store time of the cached statement.Since 1.0.0.valid_until
 * Timestamp when the cache entry expires.
 * Since 1.1.0.valid_untilvalid_untilTimestamp when the cache entry expires.Since 1.1.0.metadata
 * array
 * Metadata of the cache entry.
 * This is the metadata provided by MySQL together with the
 * result set of the statement in question. Different versions
 * of the MySQL server may return different metadata. Unlike with
 * some of the PHP MySQL extensions no attempt is made to hide
 * MySQL server version dependencies and version details from the
 * caller. Please, refer to the MySQL C API documentation that
 * belongs to the MySQL server in use for further details.
 * The metadata list contains one entry for every column.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * name
 * The field name. Depending on the MySQL version this
 * may be the fields alias name.
 * Since 1.0.0.
 * org_name
 * The field name.
 * Since 1.0.0.
 * table
 * The table name. If an alias name was used for the table, this
 * usually holds the alias name.
 * Since 1.0.0.
 * org_table
 * The table name.
 * Since 1.0.0.
 * db
 * The database/schema name.
 * Since 1.0.0.
 * max_length
 * The maximum width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * length
 * The width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * type
 * The data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.
 * Since 1.0.0.metadata
 * arraymetadataarrayMetadata of the cache entry.
 * This is the metadata provided by MySQL together with the
 * result set of the statement in question. Different versions
 * of the MySQL server may return different metadata. Unlike with
 * some of the PHP MySQL extensions no attempt is made to hide
 * MySQL server version dependencies and version details from the
 * caller. Please, refer to the MySQL C API documentation that
 * belongs to the MySQL server in use for further details.
 * The metadata list contains one entry for every column.
 * Since 1.0.0.
 * Property
 * Description
 * Version
 * name
 * The field name. Depending on the MySQL version this
 * may be the fields alias name.
 * Since 1.0.0.
 * org_name
 * The field name.
 * Since 1.0.0.
 * table
 * The table name. If an alias name was used for the table, this
 * usually holds the alias name.
 * Since 1.0.0.
 * org_table
 * The table name.
 * Since 1.0.0.
 * db
 * The database/schema name.
 * Since 1.0.0.
 * max_length
 * The maximum width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * length
 * The width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * type
 * The data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.
 * Since 1.0.0.Metadata of the cache entry.
 * This is the metadata provided by MySQL together with the
 * result set of the statement in question. Different versions
 * of the MySQL server may return different metadata. Unlike with
 * some of the PHP MySQL extensions no attempt is made to hide
 * MySQL server version dependencies and version details from the
 * caller. Please, refer to the MySQL C API documentation that
 * belongs to the MySQL server in use for further details.The metadata list contains one entry for every column.Since 1.0.0.Property
 * Description
 * Version
 * name
 * The field name. Depending on the MySQL version this
 * may be the fields alias name.
 * Since 1.0.0.
 * org_name
 * The field name.
 * Since 1.0.0.
 * table
 * The table name. If an alias name was used for the table, this
 * usually holds the alias name.
 * Since 1.0.0.
 * org_table
 * The table name.
 * Since 1.0.0.
 * db
 * The database/schema name.
 * Since 1.0.0.
 * max_length
 * The maximum width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * length
 * The width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * type
 * The data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.
 * Since 1.0.0.Property
 * Description
 * Version
 * name
 * The field name. Depending on the MySQL version this
 * may be the fields alias name.
 * Since 1.0.0.
 * org_name
 * The field name.
 * Since 1.0.0.
 * table
 * The table name. If an alias name was used for the table, this
 * usually holds the alias name.
 * Since 1.0.0.
 * org_table
 * The table name.
 * Since 1.0.0.
 * db
 * The database/schema name.
 * Since 1.0.0.
 * max_length
 * The maximum width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * length
 * The width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * type
 * The data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.
 * Since 1.0.0.Property
 * Description
 * VersionProperty
 * Description
 * VersionPropertyDescriptionVersionname
 * The field name. Depending on the MySQL version this
 * may be the fields alias name.
 * Since 1.0.0.
 * org_name
 * The field name.
 * Since 1.0.0.
 * table
 * The table name. If an alias name was used for the table, this
 * usually holds the alias name.
 * Since 1.0.0.
 * org_table
 * The table name.
 * Since 1.0.0.
 * db
 * The database/schema name.
 * Since 1.0.0.
 * max_length
 * The maximum width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * length
 * The width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.
 * type
 * The data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.
 * Since 1.0.0.name
 * The field name. Depending on the MySQL version this
 * may be the fields alias name.
 * Since 1.0.0.namenameThe field name. Depending on the MySQL version this
 * may be the fields alias name.Since 1.0.0.org_name
 * The field name.
 * Since 1.0.0.org_nameorg_nameThe field name.Since 1.0.0.table
 * The table name. If an alias name was used for the table, this
 * usually holds the alias name.
 * Since 1.0.0.tabletableThe table name. If an alias name was used for the table, this
 * usually holds the alias name.Since 1.0.0.org_table
 * The table name.
 * Since 1.0.0.org_tableorg_tableThe table name.Since 1.0.0.db
 * The database/schema name.
 * Since 1.0.0.dbdbThe database/schema name.Since 1.0.0.max_length
 * The maximum width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.max_lengthmax_lengthThe maximum width of the field. Details may vary by MySQL server version.Since 1.0.0.length
 * The width of the field. Details may vary by MySQL server version.
 * Since 1.0.0.lengthlengthThe width of the field. Details may vary by MySQL server version.Since 1.0.0.type
 * The data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.
 * Since 1.0.0.typetypeThe data type of the field. Details may vary by the MySQL server in use.
 * This is the MySQL C API type constants value. It is recommended
 * to use type constants provided by the mysqli extension
 * to test for its meaning. You should not test for certain type values
 * by comparing with certain numbers.mysqliSince 1.0.0.The APC storage handler returns the same information
 * for the data property but no metadata.
 * The metadata of a cache entry is set to NULL.datametadatametadataNULLThe MEMCACHE storage handler does not fill the data property.
 * Statistics are not available on a per cache entry basis with the MEMCACHE storage
 * handler.dataA user defined storage handler is free to provide any data.
 */
function mysqlnd_qc_get_cache_info() {}