/**
 * (PHP 4, PHP 5)<br/>
 * @link http://php.net/manual/en/function.mysql-db-query.php
 * @param string $database [optional] <p> TODO DESCRIPTION </p>
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param resource $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return resource クエリーの結果を指す MySQL 結果リソースを正の値で返します。
 * エラー時には FALSE を返します。また、
 * INSERT/UPDATE/DELETE
 * クエリーの場合には TRUE または FALSE を返し、これらはそれぞれ
 * クエリーが 成功した / 失敗した ことを示します。FALSEINSERTUPDATEDELETETRUEFALSE
 */
function mysql_db_query($database, $query, $link_identifier = NULL) {}