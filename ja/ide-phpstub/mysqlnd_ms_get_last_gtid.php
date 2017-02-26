/**
 * (PECL mysqlnd_ms >= 1.2.0)<br/>
 * @link http://php.net/manual/en/function.mysqlnd-ms-get-last-gtid.php
 * @param mixed $connection [optional] <p> TODO DESCRIPTION </p>
 * @return string Returns a global transaction ID (GTID) on success.
 * Otherwise, returns FALSE.FALSEThe function mysqlnd_ms_get_last_gtid returns the
 * GTID obtained when executing the SQL statement from
 * the fetch_last_gtid entry of the
 * global_transaction_id_injection section from
 * the plugins configuration file.mysqlnd_ms_get_last_gtidfetch_last_gtidglobal_transaction_id_injectionThe function may be called after the GTID has been incremented.
 */
function mysqlnd_ms_get_last_gtid($connection) {}