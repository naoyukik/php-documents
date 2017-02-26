/**
 * (PHP 4, PHP 5)<br/>
 * @link http://php.net/manual/en/function.mysql-free-result.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。TRUEFALSEresult がリソースではなかった場合、
 * E_WARNING レベルのエラーが発生します。
 * mysql_query が resource
 * を返すのは SELECT, SHOW, EXPLAIN, そして DESCRIBE
 * の場合だけであることに注意しましょう。resultmysql_queryresource
 */
function mysql_free_result($result) {}