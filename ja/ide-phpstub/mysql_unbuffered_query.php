/**
 * (PHP 4 >= 4.0.6, PHP 5)<br/>
 * @link http://php.net/manual/en/function.mysql-unbuffered-query.php
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param resource $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return resource SELECT, SHOW, DESCRIBE あるいは EXPLAIN では、
 * mysql_unbuffered_query は
 * 成功した場合に resource 、エラー時に FALSE を返します。mysql_unbuffered_queryresourceFALSEUPDATE, DELETE, DROP, などその他の SQL 文では、
 * mysql_unbuffered_query は
 * 成功した場合に TRUE 、エラー時に FALSE を返します。mysql_unbuffered_queryTRUEFALSE
 */
function mysql_unbuffered_query($query, $link_identifier = NULL) {}