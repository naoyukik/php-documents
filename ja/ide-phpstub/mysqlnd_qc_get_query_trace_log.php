/**
 * (PECL mysqlnd_qc >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.mysqlnd-qc-get-query-trace-log.php
 * @return array An array of query backtrace. Every list entry contains
 * the query string, a backtrace and further detail information.Key
 * Description
 * query
 * Query string.
 * origin
 * Code backtrace.
 * run_time
 * Query run time in milliseconds. The collection of
 * all times and the necessary
 * gettimeofday
 * system calls can be disabled by setting the PHP configuration
 * directive
 * mysqlnd_qc.time_statistics to
 * 0
 * store_time
 * Query result set store time in milliseconds. The collection of
 * all times and the necessary
 * gettimeofday
 * system calls can be disabled by setting the PHP configuration
 * directive
 * mysqlnd_qc.time_statistics to
 * 0
 * eligible_for_caching
 * TRUE if query is cacheable otherwise
 * FALSE.
 * no_table
 * TRUE if the query has generated a result
 * set and at least one column from the result set has no table
 * name set in its metadata. This is usually the case with
 * queries which one probably do not want to cache such as
 * SELECT SLEEP(1). By default any such query
 * will not be added to the cache. See also PHP configuration directive
 * mysqlnd_qc.cache_no_table.
 * was_added
 * TRUE if the query result has been put into
 * the cache, otherwise
 * FALSE.
 * was_already_in_cache
 * TRUE if the query result would have been
 * added to the cache if it was not already in the cache (cache hit).
 * Otherwise
 * FALSE.Key
 * Description
 * query
 * Query string.
 * origin
 * Code backtrace.
 * run_time
 * Query run time in milliseconds. The collection of
 * all times and the necessary
 * gettimeofday
 * system calls can be disabled by setting the PHP configuration
 * directive
 * mysqlnd_qc.time_statistics to
 * 0
 * store_time
 * Query result set store time in milliseconds. The collection of
 * all times and the necessary
 * gettimeofday
 * system calls can be disabled by setting the PHP configuration
 * directive
 * mysqlnd_qc.time_statistics to
 * 0
 * eligible_for_caching
 * TRUE if query is cacheable otherwise
 * FALSE.
 * no_table
 * TRUE if the query has generated a result
 * set and at least one column from the result set has no table
 * name set in its metadata. This is usually the case with
 * queries which one probably do not want to cache such as
 * SELECT SLEEP(1). By default any such query
 * will not be added to the cache. See also PHP configuration directive
 * mysqlnd_qc.cache_no_table.
 * was_added
 * TRUE if the query result has been put into
 * the cache, otherwise
 * FALSE.
 * was_already_in_cache
 * TRUE if the query result would have been
 * added to the cache if it was not already in the cache (cache hit).
 * Otherwise
 * FALSE.Key
 * DescriptionKey
 * DescriptionKeyDescriptionquery
 * Query string.
 * origin
 * Code backtrace.
 * run_time
 * Query run time in milliseconds. The collection of
 * all times and the necessary
 * gettimeofday
 * system calls can be disabled by setting the PHP configuration
 * directive
 * mysqlnd_qc.time_statistics to
 * 0
 * store_time
 * Query result set store time in milliseconds. The collection of
 * all times and the necessary
 * gettimeofday
 * system calls can be disabled by setting the PHP configuration
 * directive
 * mysqlnd_qc.time_statistics to
 * 0
 * eligible_for_caching
 * TRUE if query is cacheable otherwise
 * FALSE.
 * no_table
 * TRUE if the query has generated a result
 * set and at least one column from the result set has no table
 * name set in its metadata. This is usually the case with
 * queries which one probably do not want to cache such as
 * SELECT SLEEP(1). By default any such query
 * will not be added to the cache. See also PHP configuration directive
 * mysqlnd_qc.cache_no_table.
 * was_added
 * TRUE if the query result has been put into
 * the cache, otherwise
 * FALSE.
 * was_already_in_cache
 * TRUE if the query result would have been
 * added to the cache if it was not already in the cache (cache hit).
 * Otherwise
 * FALSE.query
 * Query string.queryqueryQuery string.origin
 * Code backtrace.originoriginCode backtrace.run_time
 * Query run time in milliseconds. The collection of
 * all times and the necessary
 * gettimeofday
 * system calls can be disabled by setting the PHP configuration
 * directive
 * mysqlnd_qc.time_statistics to
 * 0run_timerun_timeQuery run time in milliseconds. The collection of
 * all times and the necessary
 * gettimeofday
 * system calls can be disabled by setting the PHP configuration
 * directive
 * mysqlnd_qc.time_statistics to
 * 0gettimeofdaymysqlnd_qc.time_statistics0store_time
 * Query result set store time in milliseconds. The collection of
 * all times and the necessary
 * gettimeofday
 * system calls can be disabled by setting the PHP configuration
 * directive
 * mysqlnd_qc.time_statistics to
 * 0store_timestore_timeQuery result set store time in milliseconds. The collection of
 * all times and the necessary
 * gettimeofday
 * system calls can be disabled by setting the PHP configuration
 * directive
 * mysqlnd_qc.time_statistics to
 * 0gettimeofdaymysqlnd_qc.time_statistics0eligible_for_caching
 * TRUE if query is cacheable otherwise
 * FALSE.eligible_for_cachingeligible_for_cachingTRUE if query is cacheable otherwise
 * FALSE.TRUEFALSEno_table
 * TRUE if the query has generated a result
 * set and at least one column from the result set has no table
 * name set in its metadata. This is usually the case with
 * queries which one probably do not want to cache such as
 * SELECT SLEEP(1). By default any such query
 * will not be added to the cache. See also PHP configuration directive
 * mysqlnd_qc.cache_no_table.no_tableno_tableTRUE if the query has generated a result
 * set and at least one column from the result set has no table
 * name set in its metadata. This is usually the case with
 * queries which one probably do not want to cache such as
 * SELECT SLEEP(1). By default any such query
 * will not be added to the cache. See also PHP configuration directive
 * mysqlnd_qc.cache_no_table.TRUESELECT SLEEP(1)mysqlnd_qc.cache_no_tablewas_added
 * TRUE if the query result has been put into
 * the cache, otherwise
 * FALSE.was_addedwas_addedTRUE if the query result has been put into
 * the cache, otherwise
 * FALSE.TRUEFALSEwas_already_in_cache
 * TRUE if the query result would have been
 * added to the cache if it was not already in the cache (cache hit).
 * Otherwise
 * FALSE.was_already_in_cachewas_already_in_cacheTRUE if the query result would have been
 * added to the cache if it was not already in the cache (cache hit).
 * Otherwise
 * FALSE.TRUEFALSE
 */
function mysqlnd_qc_get_query_trace_log() {}