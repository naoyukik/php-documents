/**
 * (PHP 4 >= 4.2.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.pg-result-status.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $type [optional] <p> TODO DESCRIPTION </p>
 * @return mixed PGSQL_STATUS_LONG が指定された場合の返り値は
 * 以下のいずれかです。
 * PGSQL_EMPTY_QUERY、
 * PGSQL_COMMAND_OK、PGSQL_TUPLES_OK、PGSQL_COPY_OUT、
 * PGSQL_COPY_IN、PGSQL_BAD_RESPONSE、PGSQL_NONFATAL_ERROR
 * および PGSQL_FATAL_ERROR 。
 * それ以外の場合は、PostgreSQL コマンドタグを含む文字列を返します。PGSQL_STATUS_LONGPGSQL_EMPTY_QUERYPGSQL_COMMAND_OKPGSQL_TUPLES_OKPGSQL_COPY_OUTPGSQL_COPY_INPGSQL_BAD_RESPONSEPGSQL_NONFATAL_ERRORPGSQL_FATAL_ERROR
 */
function pg_result_status($result, $type = PGSQL_STATUS_LONG) {}