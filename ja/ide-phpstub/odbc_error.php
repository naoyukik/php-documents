/**
 * (PHP 4 >= 4.0.5, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.odbc-error.php
 * @param resource $connection_id [optional] <p> TODO DESCRIPTION </p>
 * @return string connection_id が指定された場合、
 * その接続の直近の状態が返されます。そうでない場合、
 * 他の接続の直近の状態が返されます。connection_idこの関数の返り値が意味を持つのは、直近の odbc クエリが失敗した場合
 * (すなわち odbc_exec が FALSE を返した場合) のみです。odbc_execFALSE
 */
function odbc_error($connection_id) {}