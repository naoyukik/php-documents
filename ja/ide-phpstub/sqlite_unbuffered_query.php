/**
 * (PHP 5 < 5.4.0, PECL sqlite >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.sqlite-unbuffered-query.php
 * @param resource $dbhandle [optional] <p> TODO DESCRIPTION </p>
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param int $result_type [optional] <p> TODO DESCRIPTION </p>
 * @param string $error_msg [optional] <p> TODO DESCRIPTION </p>
 * @return SQLiteUnbuffered 結果セットを返します。失敗した場合に FALSE を返します。FALSEsqlite_unbuffered_query は、
 * 各レコードを順番に読み込む場合にのみ利用可能な
 * シーケンシャルで前進のみ可能な結果セットを返します。sqlite_unbuffered_query
 */
function sqlite_unbuffered_query($dbhandle, $query, $result_type = SQLITE_BOTH, $error_msg) {}