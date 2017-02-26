/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/mysqli_query.php
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param int $resultmode [optional] <p> TODO DESCRIPTION </p>
 * @param mysqli $link [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 失敗した場合に FALSE を返します。
 * SELECT, SHOW, DESCRIBE あるいは
 * EXPLAIN が成功した場合は、mysqli_query
 * は mysqli_result オブジェクトを返します。それ以外のクエリが成功した場合は、
 * mysqli_query は TRUE を返します。FALSESELECT, SHOW, DESCRIBEEXPLAINmysqli_querymysqli_resultmysqli_queryTRUE
 */
function mysqli.query($query, $resultmode = MYSQLI_STORE_RESULT, $link) {}