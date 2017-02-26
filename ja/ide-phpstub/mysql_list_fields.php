/**
 * (PHP 4, PHP 5)<br/>
 * @link http://php.net/manual/en/function.mysql-list-fields.php
 * @param string $database_name [optional] <p> TODO DESCRIPTION </p>
 * @param string $table_name [optional] <p> TODO DESCRIPTION </p>
 * @param resource $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return resource 成功した場合に結果ポインタ resource 、失敗した場合に FALSE
 * を返します。resourceFALSE返された結果は mysql_field_flags,
 * mysql_field_len,
 * mysql_field_name そして
 * mysql_field_type で利用可能です。mysql_field_flagsmysql_field_lenmysql_field_namemysql_field_type
 */
function mysql_list_fields($database_name, $table_name, $link_identifier = NULL) {}