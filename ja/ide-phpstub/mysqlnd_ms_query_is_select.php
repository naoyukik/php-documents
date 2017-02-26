/**
 * (PECL mysqlnd_ms >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.mysqlnd-ms-query-is-select.php
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @return int A return value of MYSQLND_MS_QUERY_USE_MASTER
 * indicates that the query should be send to the MySQL replication
 * master server. The function returns a value of
 * MYSQLND_MS_QUERY_USE_SLAVE if the query can be run
 * on a slave because it is considered read-only. A value of
 * MYSQLND_MS_QUERY_USE_LAST_USED is returned to recommend
 * running the query on the last used server. This can either be a MySQL
 * replication master server or a MySQL replication slave server.MYSQLND_MS_QUERY_USE_MASTERMYSQLND_MS_QUERY_USE_SLAVEMYSQLND_MS_QUERY_USE_LAST_USEDIf read write splitting has been disabled by setting
 * mysqlnd_ms.disable_rw_split, the function will
 * always return MYSQLND_MS_QUERY_USE_MASTER or
 * MYSQLND_MS_QUERY_USE_LAST_USED.mysqlnd_ms.disable_rw_splitMYSQLND_MS_QUERY_USE_MASTERMYSQLND_MS_QUERY_USE_LAST_USED
 */
function mysqlnd_ms_query_is_select($query) {}