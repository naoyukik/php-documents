/**
 * (PECL ibm_db2 >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.db2-prepare.php
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @param string $statement [optional] <p> TODO DESCRIPTION </p>
 * @param array $options [optional] <p> TODO DESCRIPTION </p>
 * @return resource SQL 文のパースに成功し、データベースサーバー内で正しく準備された場合に
 * ステートメントリソースを返します。データベースサーバーがエラーを返した場合に
 * FALSE を返します。返されたエラーの詳細を調べるには、
 * db2_stmt_error あるいは db2_stmt_errormsg
 * をコールします。FALSEdb2_stmt_errordb2_stmt_errormsg
 */
function db2_prepare($connection, $statement, $options) {}