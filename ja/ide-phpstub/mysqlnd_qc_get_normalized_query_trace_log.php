/**
 * (PECL mysqlnd_qc >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.mysqlnd-qc-get-normalized-query-trace-log.php
 * @return array An array of query log. Every list entry contains
 * the normalized query stringand further detail information.Key
 * Description
 * query
 * Normalized statement string.
 * occurences
 * How many statements have matched the normalized statement
 * string in addition to the one which has created the log entry.
 * The value is zero if a statement has been normalized, its normalized
 * representation has been added to the log but no further queries inspected
 * by PECL/mysqlnd_qc have the same normalized statement string.
 * eligible_for_caching
 * Whether the statement could be cached. An statement eligible for
 * caching has not necessarily been cached. It not possible to tell
 * for sure if or how many cached statement have contributed to the
 * aggregated normalized statement log entry. However, comparing
 * the minimum and average run time one can make an educated guess.
 * avg_run_time
 * The average run time of all queries contributing to the
 * query log entry. The run time is the time between sending the
 * query statement to MySQL and receiving an answer from MySQL.
 * avg_store_time
 * The average store time of all queries contributing to the
 * query log entry. The store time is the time needed to fetch
 * a statements result set from the server to the client and,
 * storing it on the client.
 * min_run_time
 * The minimum run time of all queries contributing to the
 * query log entry.
 * min_store_time
 * The minimum store time of all queries contributing to the
 * query log entry.
 * max_run_time
 * The maximum run time of all queries contributing to the
 * query log entry.
 * max_store_time
 * The maximum store time of all queries contributing to the
 * query log entry.Key
 * Description
 * query
 * Normalized statement string.
 * occurences
 * How many statements have matched the normalized statement
 * string in addition to the one which has created the log entry.
 * The value is zero if a statement has been normalized, its normalized
 * representation has been added to the log but no further queries inspected
 * by PECL/mysqlnd_qc have the same normalized statement string.
 * eligible_for_caching
 * Whether the statement could be cached. An statement eligible for
 * caching has not necessarily been cached. It not possible to tell
 * for sure if or how many cached statement have contributed to the
 * aggregated normalized statement log entry. However, comparing
 * the minimum and average run time one can make an educated guess.
 * avg_run_time
 * The average run time of all queries contributing to the
 * query log entry. The run time is the time between sending the
 * query statement to MySQL and receiving an answer from MySQL.
 * avg_store_time
 * The average store time of all queries contributing to the
 * query log entry. The store time is the time needed to fetch
 * a statements result set from the server to the client and,
 * storing it on the client.
 * min_run_time
 * The minimum run time of all queries contributing to the
 * query log entry.
 * min_store_time
 * The minimum store time of all queries contributing to the
 * query log entry.
 * max_run_time
 * The maximum run time of all queries contributing to the
 * query log entry.
 * max_store_time
 * The maximum store time of all queries contributing to the
 * query log entry.Key
 * DescriptionKey
 * DescriptionKeyDescriptionquery
 * Normalized statement string.
 * occurences
 * How many statements have matched the normalized statement
 * string in addition to the one which has created the log entry.
 * The value is zero if a statement has been normalized, its normalized
 * representation has been added to the log but no further queries inspected
 * by PECL/mysqlnd_qc have the same normalized statement string.
 * eligible_for_caching
 * Whether the statement could be cached. An statement eligible for
 * caching has not necessarily been cached. It not possible to tell
 * for sure if or how many cached statement have contributed to the
 * aggregated normalized statement log entry. However, comparing
 * the minimum and average run time one can make an educated guess.
 * avg_run_time
 * The average run time of all queries contributing to the
 * query log entry. The run time is the time between sending the
 * query statement to MySQL and receiving an answer from MySQL.
 * avg_store_time
 * The average store time of all queries contributing to the
 * query log entry. The store time is the time needed to fetch
 * a statements result set from the server to the client and,
 * storing it on the client.
 * min_run_time
 * The minimum run time of all queries contributing to the
 * query log entry.
 * min_store_time
 * The minimum store time of all queries contributing to the
 * query log entry.
 * max_run_time
 * The maximum run time of all queries contributing to the
 * query log entry.
 * max_store_time
 * The maximum store time of all queries contributing to the
 * query log entry.query
 * Normalized statement string.queryqueryNormalized statement string.occurences
 * How many statements have matched the normalized statement
 * string in addition to the one which has created the log entry.
 * The value is zero if a statement has been normalized, its normalized
 * representation has been added to the log but no further queries inspected
 * by PECL/mysqlnd_qc have the same normalized statement string.occurencesoccurencesHow many statements have matched the normalized statement
 * string in addition to the one which has created the log entry.
 * The value is zero if a statement has been normalized, its normalized
 * representation has been added to the log but no further queries inspected
 * by PECL/mysqlnd_qc have the same normalized statement string.eligible_for_caching
 * Whether the statement could be cached. An statement eligible for
 * caching has not necessarily been cached. It not possible to tell
 * for sure if or how many cached statement have contributed to the
 * aggregated normalized statement log entry. However, comparing
 * the minimum and average run time one can make an educated guess.eligible_for_cachingeligible_for_cachingWhether the statement could be cached. An statement eligible for
 * caching has not necessarily been cached. It not possible to tell
 * for sure if or how many cached statement have contributed to the
 * aggregated normalized statement log entry. However, comparing
 * the minimum and average run time one can make an educated guess.avg_run_time
 * The average run time of all queries contributing to the
 * query log entry. The run time is the time between sending the
 * query statement to MySQL and receiving an answer from MySQL.avg_run_timeavg_run_timeThe average run time of all queries contributing to the
 * query log entry. The run time is the time between sending the
 * query statement to MySQL and receiving an answer from MySQL.avg_store_time
 * The average store time of all queries contributing to the
 * query log entry. The store time is the time needed to fetch
 * a statements result set from the server to the client and,
 * storing it on the client.avg_store_timeavg_store_timeThe average store time of all queries contributing to the
 * query log entry. The store time is the time needed to fetch
 * a statements result set from the server to the client and,
 * storing it on the client.min_run_time
 * The minimum run time of all queries contributing to the
 * query log entry.min_run_timemin_run_timeThe minimum run time of all queries contributing to the
 * query log entry.min_store_time
 * The minimum store time of all queries contributing to the
 * query log entry.min_store_timemin_store_timeThe minimum store time of all queries contributing to the
 * query log entry.max_run_time
 * The maximum run time of all queries contributing to the
 * query log entry.max_run_timemax_run_timeThe maximum run time of all queries contributing to the
 * query log entry.max_store_time
 * The maximum store time of all queries contributing to the
 * query log entry.max_store_timemax_store_timeThe maximum store time of all queries contributing to the
 * query log entry.
 */
function mysqlnd_qc_get_normalized_query_trace_log() {}