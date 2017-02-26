/**
 * (PECL mysqlnd_qc >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.mysqlnd-qc-get-core-stats.php
 * @return array Array of core statisticsStatistic
 * Description
 * Version
 * cache_hit
 * Statement is considered cacheable and cached data has been reused.
 * Statement is considered cacheable and a cache miss happened but
 * the statement got cached by someone else while we process it and thus
 * we can fetch the result from the refreshed cache.
 * Since 1.0.0.
 * cache_miss
 * Statement is considered cacheable...
 * ... and has been added to the cache
 * ... but the
 * PHP
 * configuration directive setting of
 * mysqlnd_qc.cache_no_table = 1 has prevented caching.
 * ... but an unbuffered result set is requested.
 * ... but a buffered result set was empty.
 * Since 1.0.0.
 * cache_put
 * Statement is considered cacheable and has been added to the cache.
 * Take care when calculating derived statistics. Storage handler
 * with a storage life time beyond process scope may report
 * cache_put = 0 together with
 * cache_hit > 0, if another process has filled
 * the cache. You may want to use
 * num_entries from
 * mysqlnd_qc_get_cache_info if the handler
 * supports it (
 * default,
 * APC).
 * Since 1.0.0.
 * query_should_cache
 * Statement is considered cacheable based on query string analysis.
 * The statement may or may not be added to the cache. See also
 * cache_put.
 * Since 1.0.0.
 * query_should_not_cache
 * Statement is considered not cacheable based on query string analysis.
 * Since 1.0.0.
 * query_not_cached
 * Statement is considered not cacheable or it is
 * considered cachable but the storage handler has not returned a
 * hash key for it.
 * Since 1.0.0.
 * query_could_cache
 * Statement is considered cacheable...
 * ... and statement has been run without errors
 * ... and meta data shows at least one column in the result set
 * The statement may or may not be in the cache already.
 * It may or may not be added to the cache later on.
 * Since 1.0.0.
 * query_found_in_cache
 * Statement is considered cacheable and we have found it in the cache
 * but we have not replayed the cached data yet and we have not send
 * the result set to the client yet. This is not considered
 * a cache hit because the client might not fetch the result or
 * the cached data may be faulty.
 * Since 1.0.0.
 * query_uncached_other
 * Statement is considered cacheable and it may or may not be in
 * the cache already but either replaying cached data has failed,
 * no result set is available or some other error has happened.
 * query_uncached_no_table
 * Statement has not been cached because the result set has at least
 * one column which has no table name in its meta data. An example of
 * such a query is
 * SELECT SLEEP(1). To cache those
 * statements you have to change default value of the PHP configuration directive
 * mysqlnd_qc.cache_no_table and set
 * mysqlnd_qc.cache_no_table = 1. Often, it is not
 * desired to cache such statements.
 * Since 1.0.0.
 * query_uncached_use_result
 * Statement would have been cached if a buffered result set
 * had been used. The situation is also considered as a cache miss and
 * cache_miss will be incremented as well.
 * Since 1.0.0.
 * query_aggr_run_time_cache_hit
 * Aggregated run time (ms) of all cached queries.
 * Cached queries are those which have incremented
 * cache_hit.
 * Since 1.0.0.
 * query_aggr_run_time_cache_put
 * Aggregated run time (ms) of all uncached queries that
 * have been put into the cache. See also
 * cache_put.
 * Since 1.0.0.
 * query_aggr_run_time_total
 * Aggregated run time (ms) of all uncached and cached queries
 * that have been inspected and executed by the query cache.
 * Since 1.0.0.
 * query_aggr_store_time_cache_hit
 * Aggregated store time (ms) of all cached queries.
 * Cached queries are those which have incremented
 * cache_hit.
 * Since 1.0.0.
 * query_aggr_store_time_cache_put
 * Aggregated store time (
 * ms) of all uncached queries that
 * have been put into the cache. See also
 * cache_put.
 * Since 1.0.0.
 * query_aggr_store_time_total
 * Aggregated store time (ms) of all uncached and cached queries
 * that have been inspected and executed by the query cache.
 * Since 1.0.0.
 * receive_bytes_recorded
 * Recorded incoming network traffic (
 * bytes) send from MySQL to PHP.
 * The traffic may or may not have been added to the cache. The
 * traffic is the total for all queries regardless if cached or not.
 * Since 1.0.0.
 * receive_bytes_replayed
 * Network traffic replayed during cache. This is the total amount of
 * incoming traffic saved because of the usage of the query cache plugin.
 * Since 1.0.0.
 * send_bytes_recorded
 * Recorded outgoing network traffic (
 * bytes) send from MySQL to PHP.
 * The traffic may or may not have been added to the cache. The
 * traffic is the total for all queries regardless if cached or not.
 * Since 1.0.0.
 * send_bytes_replayed
 * Network traffic replayed during cache. This is the total amount of
 * outgoing traffic saved because of the usage of the query cache plugin.
 * Since 1.0.0.
 * slam_stale_refresh
 * Number of cache misses which triggered serving stale data until
 * the client causing the cache miss has refreshed the cache entry.
 * Since 1.0.0.
 * slam_stale_hit
 * Number of cache hits while a stale cache entry gets refreshed.
 * Since 1.0.0.Statistic
 * Description
 * Version
 * cache_hit
 * Statement is considered cacheable and cached data has been reused.
 * Statement is considered cacheable and a cache miss happened but
 * the statement got cached by someone else while we process it and thus
 * we can fetch the result from the refreshed cache.
 * Since 1.0.0.
 * cache_miss
 * Statement is considered cacheable...
 * ... and has been added to the cache
 * ... but the
 * PHP
 * configuration directive setting of
 * mysqlnd_qc.cache_no_table = 1 has prevented caching.
 * ... but an unbuffered result set is requested.
 * ... but a buffered result set was empty.
 * Since 1.0.0.
 * cache_put
 * Statement is considered cacheable and has been added to the cache.
 * Take care when calculating derived statistics. Storage handler
 * with a storage life time beyond process scope may report
 * cache_put = 0 together with
 * cache_hit > 0, if another process has filled
 * the cache. You may want to use
 * num_entries from
 * mysqlnd_qc_get_cache_info if the handler
 * supports it (
 * default,
 * APC).
 * Since 1.0.0.
 * query_should_cache
 * Statement is considered cacheable based on query string analysis.
 * The statement may or may not be added to the cache. See also
 * cache_put.
 * Since 1.0.0.
 * query_should_not_cache
 * Statement is considered not cacheable based on query string analysis.
 * Since 1.0.0.
 * query_not_cached
 * Statement is considered not cacheable or it is
 * considered cachable but the storage handler has not returned a
 * hash key for it.
 * Since 1.0.0.
 * query_could_cache
 * Statement is considered cacheable...
 * ... and statement has been run without errors
 * ... and meta data shows at least one column in the result set
 * The statement may or may not be in the cache already.
 * It may or may not be added to the cache later on.
 * Since 1.0.0.
 * query_found_in_cache
 * Statement is considered cacheable and we have found it in the cache
 * but we have not replayed the cached data yet and we have not send
 * the result set to the client yet. This is not considered
 * a cache hit because the client might not fetch the result or
 * the cached data may be faulty.
 * Since 1.0.0.
 * query_uncached_other
 * Statement is considered cacheable and it may or may not be in
 * the cache already but either replaying cached data has failed,
 * no result set is available or some other error has happened.
 * query_uncached_no_table
 * Statement has not been cached because the result set has at least
 * one column which has no table name in its meta data. An example of
 * such a query is
 * SELECT SLEEP(1). To cache those
 * statements you have to change default value of the PHP configuration directive
 * mysqlnd_qc.cache_no_table and set
 * mysqlnd_qc.cache_no_table = 1. Often, it is not
 * desired to cache such statements.
 * Since 1.0.0.
 * query_uncached_use_result
 * Statement would have been cached if a buffered result set
 * had been used. The situation is also considered as a cache miss and
 * cache_miss will be incremented as well.
 * Since 1.0.0.
 * query_aggr_run_time_cache_hit
 * Aggregated run time (ms) of all cached queries.
 * Cached queries are those which have incremented
 * cache_hit.
 * Since 1.0.0.
 * query_aggr_run_time_cache_put
 * Aggregated run time (ms) of all uncached queries that
 * have been put into the cache. See also
 * cache_put.
 * Since 1.0.0.
 * query_aggr_run_time_total
 * Aggregated run time (ms) of all uncached and cached queries
 * that have been inspected and executed by the query cache.
 * Since 1.0.0.
 * query_aggr_store_time_cache_hit
 * Aggregated store time (ms) of all cached queries.
 * Cached queries are those which have incremented
 * cache_hit.
 * Since 1.0.0.
 * query_aggr_store_time_cache_put
 * Aggregated store time (
 * ms) of all uncached queries that
 * have been put into the cache. See also
 * cache_put.
 * Since 1.0.0.
 * query_aggr_store_time_total
 * Aggregated store time (ms) of all uncached and cached queries
 * that have been inspected and executed by the query cache.
 * Since 1.0.0.
 * receive_bytes_recorded
 * Recorded incoming network traffic (
 * bytes) send from MySQL to PHP.
 * The traffic may or may not have been added to the cache. The
 * traffic is the total for all queries regardless if cached or not.
 * Since 1.0.0.
 * receive_bytes_replayed
 * Network traffic replayed during cache. This is the total amount of
 * incoming traffic saved because of the usage of the query cache plugin.
 * Since 1.0.0.
 * send_bytes_recorded
 * Recorded outgoing network traffic (
 * bytes) send from MySQL to PHP.
 * The traffic may or may not have been added to the cache. The
 * traffic is the total for all queries regardless if cached or not.
 * Since 1.0.0.
 * send_bytes_replayed
 * Network traffic replayed during cache. This is the total amount of
 * outgoing traffic saved because of the usage of the query cache plugin.
 * Since 1.0.0.
 * slam_stale_refresh
 * Number of cache misses which triggered serving stale data until
 * the client causing the cache miss has refreshed the cache entry.
 * Since 1.0.0.
 * slam_stale_hit
 * Number of cache hits while a stale cache entry gets refreshed.
 * Since 1.0.0.Statistic
 * Description
 * VersionStatistic
 * Description
 * VersionStatisticDescriptionVersioncache_hit
 * Statement is considered cacheable and cached data has been reused.
 * Statement is considered cacheable and a cache miss happened but
 * the statement got cached by someone else while we process it and thus
 * we can fetch the result from the refreshed cache.
 * Since 1.0.0.
 * cache_miss
 * Statement is considered cacheable...
 * ... and has been added to the cache
 * ... but the
 * PHP
 * configuration directive setting of
 * mysqlnd_qc.cache_no_table = 1 has prevented caching.
 * ... but an unbuffered result set is requested.
 * ... but a buffered result set was empty.
 * Since 1.0.0.
 * cache_put
 * Statement is considered cacheable and has been added to the cache.
 * Take care when calculating derived statistics. Storage handler
 * with a storage life time beyond process scope may report
 * cache_put = 0 together with
 * cache_hit > 0, if another process has filled
 * the cache. You may want to use
 * num_entries from
 * mysqlnd_qc_get_cache_info if the handler
 * supports it (
 * default,
 * APC).
 * Since 1.0.0.
 * query_should_cache
 * Statement is considered cacheable based on query string analysis.
 * The statement may or may not be added to the cache. See also
 * cache_put.
 * Since 1.0.0.
 * query_should_not_cache
 * Statement is considered not cacheable based on query string analysis.
 * Since 1.0.0.
 * query_not_cached
 * Statement is considered not cacheable or it is
 * considered cachable but the storage handler has not returned a
 * hash key for it.
 * Since 1.0.0.
 * query_could_cache
 * Statement is considered cacheable...
 * ... and statement has been run without errors
 * ... and meta data shows at least one column in the result set
 * The statement may or may not be in the cache already.
 * It may or may not be added to the cache later on.
 * Since 1.0.0.
 * query_found_in_cache
 * Statement is considered cacheable and we have found it in the cache
 * but we have not replayed the cached data yet and we have not send
 * the result set to the client yet. This is not considered
 * a cache hit because the client might not fetch the result or
 * the cached data may be faulty.
 * Since 1.0.0.
 * query_uncached_other
 * Statement is considered cacheable and it may or may not be in
 * the cache already but either replaying cached data has failed,
 * no result set is available or some other error has happened.
 * query_uncached_no_table
 * Statement has not been cached because the result set has at least
 * one column which has no table name in its meta data. An example of
 * such a query is
 * SELECT SLEEP(1). To cache those
 * statements you have to change default value of the PHP configuration directive
 * mysqlnd_qc.cache_no_table and set
 * mysqlnd_qc.cache_no_table = 1. Often, it is not
 * desired to cache such statements.
 * Since 1.0.0.
 * query_uncached_use_result
 * Statement would have been cached if a buffered result set
 * had been used. The situation is also considered as a cache miss and
 * cache_miss will be incremented as well.
 * Since 1.0.0.
 * query_aggr_run_time_cache_hit
 * Aggregated run time (ms) of all cached queries.
 * Cached queries are those which have incremented
 * cache_hit.
 * Since 1.0.0.
 * query_aggr_run_time_cache_put
 * Aggregated run time (ms) of all uncached queries that
 * have been put into the cache. See also
 * cache_put.
 * Since 1.0.0.
 * query_aggr_run_time_total
 * Aggregated run time (ms) of all uncached and cached queries
 * that have been inspected and executed by the query cache.
 * Since 1.0.0.
 * query_aggr_store_time_cache_hit
 * Aggregated store time (ms) of all cached queries.
 * Cached queries are those which have incremented
 * cache_hit.
 * Since 1.0.0.
 * query_aggr_store_time_cache_put
 * Aggregated store time (
 * ms) of all uncached queries that
 * have been put into the cache. See also
 * cache_put.
 * Since 1.0.0.
 * query_aggr_store_time_total
 * Aggregated store time (ms) of all uncached and cached queries
 * that have been inspected and executed by the query cache.
 * Since 1.0.0.
 * receive_bytes_recorded
 * Recorded incoming network traffic (
 * bytes) send from MySQL to PHP.
 * The traffic may or may not have been added to the cache. The
 * traffic is the total for all queries regardless if cached or not.
 * Since 1.0.0.
 * receive_bytes_replayed
 * Network traffic replayed during cache. This is the total amount of
 * incoming traffic saved because of the usage of the query cache plugin.
 * Since 1.0.0.
 * send_bytes_recorded
 * Recorded outgoing network traffic (
 * bytes) send from MySQL to PHP.
 * The traffic may or may not have been added to the cache. The
 * traffic is the total for all queries regardless if cached or not.
 * Since 1.0.0.
 * send_bytes_replayed
 * Network traffic replayed during cache. This is the total amount of
 * outgoing traffic saved because of the usage of the query cache plugin.
 * Since 1.0.0.
 * slam_stale_refresh
 * Number of cache misses which triggered serving stale data until
 * the client causing the cache miss has refreshed the cache entry.
 * Since 1.0.0.
 * slam_stale_hit
 * Number of cache hits while a stale cache entry gets refreshed.
 * Since 1.0.0.cache_hit
 * Statement is considered cacheable and cached data has been reused.
 * Statement is considered cacheable and a cache miss happened but
 * the statement got cached by someone else while we process it and thus
 * we can fetch the result from the refreshed cache.
 * Since 1.0.0.cache_hitcache_hitStatement is considered cacheable and cached data has been reused.
 * Statement is considered cacheable and a cache miss happened but
 * the statement got cached by someone else while we process it and thus
 * we can fetch the result from the refreshed cache.Since 1.0.0.cache_miss
 * Statement is considered cacheable...
 * ... and has been added to the cache
 * ... but the
 * PHP
 * configuration directive setting of
 * mysqlnd_qc.cache_no_table = 1 has prevented caching.
 * ... but an unbuffered result set is requested.
 * ... but a buffered result set was empty.
 * Since 1.0.0.cache_misscache_missStatement is considered cacheable...
 * ... and has been added to the cache
 * ... but the
 * PHP
 * configuration directive setting of
 * mysqlnd_qc.cache_no_table = 1 has prevented caching.
 * ... but an unbuffered result set is requested.
 * ... but a buffered result set was empty.... and has been added to the cache
 * ... but the
 * PHP
 * configuration directive setting of
 * mysqlnd_qc.cache_no_table = 1 has prevented caching.
 * ... but an unbuffered result set is requested.
 * ... but a buffered result set was empty.... and has been added to the cache... and has been added to the cache... but the
 * PHP
 * configuration directive setting of
 * mysqlnd_qc.cache_no_table = 1 has prevented caching.... but the
 * PHP
 * configuration directive setting of
 * mysqlnd_qc.cache_no_table = 1 has prevented caching.PHPmysqlnd_qc.cache_no_table = 1... but an unbuffered result set is requested.... but an unbuffered result set is requested.... but a buffered result set was empty.... but a buffered result set was empty.Since 1.0.0.cache_put
 * Statement is considered cacheable and has been added to the cache.
 * Take care when calculating derived statistics. Storage handler
 * with a storage life time beyond process scope may report
 * cache_put = 0 together with
 * cache_hit > 0, if another process has filled
 * the cache. You may want to use
 * num_entries from
 * mysqlnd_qc_get_cache_info if the handler
 * supports it (
 * default,
 * APC).
 * Since 1.0.0.cache_putcache_putStatement is considered cacheable and has been added to the cache.
 * Take care when calculating derived statistics. Storage handler
 * with a storage life time beyond process scope may report
 * cache_put = 0 together with
 * cache_hit > 0, if another process has filled
 * the cache. You may want to use
 * num_entries from
 * mysqlnd_qc_get_cache_info if the handler
 * supports it (
 * default,
 * APC).cache_put = 0cache_hit > 0num_entriesmysqlnd_qc_get_cache_infodefaultAPCSince 1.0.0.query_should_cache
 * Statement is considered cacheable based on query string analysis.
 * The statement may or may not be added to the cache. See also
 * cache_put.
 * Since 1.0.0.query_should_cachequery_should_cacheStatement is considered cacheable based on query string analysis.
 * The statement may or may not be added to the cache. See also
 * cache_put.cache_putSince 1.0.0.query_should_not_cache
 * Statement is considered not cacheable based on query string analysis.
 * Since 1.0.0.query_should_not_cachequery_should_not_cacheStatement is considered not cacheable based on query string analysis.Since 1.0.0.query_not_cached
 * Statement is considered not cacheable or it is
 * considered cachable but the storage handler has not returned a
 * hash key for it.
 * Since 1.0.0.query_not_cachedquery_not_cachedStatement is considered not cacheable or it is
 * considered cachable but the storage handler has not returned a
 * hash key for it.Since 1.0.0.query_could_cache
 * Statement is considered cacheable...
 * ... and statement has been run without errors
 * ... and meta data shows at least one column in the result set
 * The statement may or may not be in the cache already.
 * It may or may not be added to the cache later on.
 * Since 1.0.0.query_could_cachequery_could_cacheStatement is considered cacheable...
 * ... and statement has been run without errors
 * ... and meta data shows at least one column in the result set
 * The statement may or may not be in the cache already.
 * It may or may not be added to the cache later on.... and statement has been run without errors
 * ... and meta data shows at least one column in the result set... and statement has been run without errors... and statement has been run without errors... and meta data shows at least one column in the result set... and meta data shows at least one column in the result setSince 1.0.0.query_found_in_cache
 * Statement is considered cacheable and we have found it in the cache
 * but we have not replayed the cached data yet and we have not send
 * the result set to the client yet. This is not considered
 * a cache hit because the client might not fetch the result or
 * the cached data may be faulty.
 * Since 1.0.0.query_found_in_cachequery_found_in_cacheStatement is considered cacheable and we have found it in the cache
 * but we have not replayed the cached data yet and we have not send
 * the result set to the client yet. This is not considered
 * a cache hit because the client might not fetch the result or
 * the cached data may be faulty.Since 1.0.0.query_uncached_other
 * Statement is considered cacheable and it may or may not be in
 * the cache already but either replaying cached data has failed,
 * no result set is available or some other error has happened.query_uncached_otherquery_uncached_otherStatement is considered cacheable and it may or may not be in
 * the cache already but either replaying cached data has failed,
 * no result set is available or some other error has happened.query_uncached_no_table
 * Statement has not been cached because the result set has at least
 * one column which has no table name in its meta data. An example of
 * such a query is
 * SELECT SLEEP(1). To cache those
 * statements you have to change default value of the PHP configuration directive
 * mysqlnd_qc.cache_no_table and set
 * mysqlnd_qc.cache_no_table = 1. Often, it is not
 * desired to cache such statements.
 * Since 1.0.0.query_uncached_no_tablequery_uncached_no_tableStatement has not been cached because the result set has at least
 * one column which has no table name in its meta data. An example of
 * such a query is
 * SELECT SLEEP(1). To cache those
 * statements you have to change default value of the PHP configuration directive
 * mysqlnd_qc.cache_no_table and set
 * mysqlnd_qc.cache_no_table = 1. Often, it is not
 * desired to cache such statements.SELECT SLEEP(1)mysqlnd_qc.cache_no_tablemysqlnd_qc.cache_no_table = 1Since 1.0.0.query_uncached_use_result
 * Statement would have been cached if a buffered result set
 * had been used. The situation is also considered as a cache miss and
 * cache_miss will be incremented as well.
 * Since 1.0.0.query_uncached_use_resultquery_uncached_use_resultStatement would have been cached if a buffered result set
 * had been used. The situation is also considered as a cache miss and
 * cache_miss will be incremented as well.cache_missSince 1.0.0.query_aggr_run_time_cache_hit
 * Aggregated run time (ms) of all cached queries.
 * Cached queries are those which have incremented
 * cache_hit.
 * Since 1.0.0.query_aggr_run_time_cache_hitquery_aggr_run_time_cache_hitAggregated run time (ms) of all cached queries.
 * Cached queries are those which have incremented
 * cache_hit.cache_hitSince 1.0.0.query_aggr_run_time_cache_put
 * Aggregated run time (ms) of all uncached queries that
 * have been put into the cache. See also
 * cache_put.
 * Since 1.0.0.query_aggr_run_time_cache_putquery_aggr_run_time_cache_putAggregated run time (ms) of all uncached queries that
 * have been put into the cache. See also
 * cache_put.cache_putSince 1.0.0.query_aggr_run_time_total
 * Aggregated run time (ms) of all uncached and cached queries
 * that have been inspected and executed by the query cache.
 * Since 1.0.0.query_aggr_run_time_totalquery_aggr_run_time_totalAggregated run time (ms) of all uncached and cached queries
 * that have been inspected and executed by the query cache.Since 1.0.0.query_aggr_store_time_cache_hit
 * Aggregated store time (ms) of all cached queries.
 * Cached queries are those which have incremented
 * cache_hit.
 * Since 1.0.0.query_aggr_store_time_cache_hitquery_aggr_store_time_cache_hitAggregated store time (ms) of all cached queries.
 * Cached queries are those which have incremented
 * cache_hit.cache_hitSince 1.0.0.query_aggr_store_time_cache_put
 * Aggregated store time (
 * ms) of all uncached queries that
 * have been put into the cache. See also
 * cache_put.
 * Since 1.0.0.query_aggr_store_time_cache_putquery_aggr_store_time_cache_putAggregated store time (
 * ms) of all uncached queries that
 * have been put into the cache. See also
 * cache_put.mscache_putSince 1.0.0.query_aggr_store_time_total
 * Aggregated store time (ms) of all uncached and cached queries
 * that have been inspected and executed by the query cache.
 * Since 1.0.0.query_aggr_store_time_totalquery_aggr_store_time_totalAggregated store time (ms) of all uncached and cached queries
 * that have been inspected and executed by the query cache.Since 1.0.0.receive_bytes_recorded
 * Recorded incoming network traffic (
 * bytes) send from MySQL to PHP.
 * The traffic may or may not have been added to the cache. The
 * traffic is the total for all queries regardless if cached or not.
 * Since 1.0.0.receive_bytes_recordedreceive_bytes_recordedRecorded incoming network traffic (
 * bytes) send from MySQL to PHP.
 * The traffic may or may not have been added to the cache. The
 * traffic is the total for all queries regardless if cached or not.bytesSince 1.0.0.receive_bytes_replayed
 * Network traffic replayed during cache. This is the total amount of
 * incoming traffic saved because of the usage of the query cache plugin.
 * Since 1.0.0.receive_bytes_replayedreceive_bytes_replayedNetwork traffic replayed during cache. This is the total amount of
 * incoming traffic saved because of the usage of the query cache plugin.Since 1.0.0.send_bytes_recorded
 * Recorded outgoing network traffic (
 * bytes) send from MySQL to PHP.
 * The traffic may or may not have been added to the cache. The
 * traffic is the total for all queries regardless if cached or not.
 * Since 1.0.0.send_bytes_recordedsend_bytes_recordedRecorded outgoing network traffic (
 * bytes) send from MySQL to PHP.
 * The traffic may or may not have been added to the cache. The
 * traffic is the total for all queries regardless if cached or not.bytesSince 1.0.0.send_bytes_replayed
 * Network traffic replayed during cache. This is the total amount of
 * outgoing traffic saved because of the usage of the query cache plugin.
 * Since 1.0.0.send_bytes_replayedsend_bytes_replayedNetwork traffic replayed during cache. This is the total amount of
 * outgoing traffic saved because of the usage of the query cache plugin.Since 1.0.0.slam_stale_refresh
 * Number of cache misses which triggered serving stale data until
 * the client causing the cache miss has refreshed the cache entry.
 * Since 1.0.0.slam_stale_refreshslam_stale_refreshNumber of cache misses which triggered serving stale data until
 * the client causing the cache miss has refreshed the cache entry.Since 1.0.0.slam_stale_hit
 * Number of cache hits while a stale cache entry gets refreshed.
 * Since 1.0.0.slam_stale_hitslam_stale_hitNumber of cache hits while a stale cache entry gets refreshed.Since 1.0.0.
 */
function mysqlnd_qc_get_core_stats() {}