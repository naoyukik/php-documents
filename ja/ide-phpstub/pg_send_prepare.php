/**
 * (PHP 5 >= 5.1.0, PHP 7)<br/>
 * @link http://php.net/manual/en/function.pg-send-prepare.php
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @param string $stmtname [optional] <p> TODO DESCRIPTION </p>
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE 、失敗した場合に FALSE を返します。
 * クエリの結果を確かめるには pg_get_result
 * を使用します。TRUEFALSEpg_get_result
 */
function pg_send_prepare($connection, $stmtname, $query) {}