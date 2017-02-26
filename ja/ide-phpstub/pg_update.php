/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.pg-update.php
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @param string $table_name [optional] <p> TODO DESCRIPTION </p>
 * @param array $data [optional] <p> TODO DESCRIPTION </p>
 * @param array $condition [optional] <p> TODO DESCRIPTION </p>
 * @param int $options [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 成功した場合に TRUE を、失敗した場合に FALSE を返します。 options に
 * PGSQL_DML_STRING が渡された場合は文字列を返します。TRUEFALSEoptionsPGSQL_DML_STRING
 */
function pg_update($connection, $table_name, $data, $condition, $options = PGSQL_DML_EXEC) {}