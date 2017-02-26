/**
 * (PHP 4, PHP 5)<br/>
 * @link http://php.net/manual/en/function.mysql-query.php
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param resource $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return mixed SELECT, SHOW, DESCRIBE や EXPLAIN 文、その他結果セットを返す文では、
 * mysql_query は成功した場合に
 * resource を返します。エラー時には FALSE を返します。mysql_queryresourceFALSEそれ以外の SQL 文 INSERT, UPDATE, DELETE, DROP などでは、
 * mysql_query は成功した場合に
 * TRUE 、エラー時に FALSE を返します。mysql_queryTRUEFALSE返された結果にアクセスするためには、結果リソースを
 * mysql_fetch_array やその他の関数に渡します。mysql_fetch_arraySELECT 文によって返された行の数を知るには
 * mysql_num_rows を用います。また
 * DELETE, INSERT, REPLACE, または UPDATE 文で変更された行の数を
 * 知るには mysql_affected_rows を用います。mysql_num_rowsmysql_affected_rowsクエリが参照するテーブルにアクセスする権限がない場合も
 * mysql_queryは失敗し、FALSE が返されます。mysql_queryFALSE
 */
function mysql_query($query, $link_identifier = NULL) {}