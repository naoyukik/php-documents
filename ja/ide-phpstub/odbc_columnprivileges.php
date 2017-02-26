/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.odbc-columnprivileges.php
 * @param resource $connection_id [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $owner [optional] <p> TODO DESCRIPTION </p>
 * @param string $table_name [optional] <p> TODO DESCRIPTION </p>
 * @param string $column_name [optional] <p> TODO DESCRIPTION </p>
 * @return resource ODBC 結果 ID を返します。失敗した場合に FALSE を返します。
 * この結果 ID を使用して、カラムや関連する権限の一覧を取得します。FALSE結果は以下のカラムを有します。
 * TABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * GRANTOR
 * GRANTEE
 * PRIVILEGE
 * IS_GRANTABLETABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * GRANTOR
 * GRANTEE
 * PRIVILEGE
 * IS_GRANTABLETABLE_QUALIFIERTABLE_QUALIFIERTABLE_OWNERTABLE_OWNERTABLE_NAMETABLE_NAMEGRANTORGRANTORGRANTEEGRANTEEPRIVILEGEPRIVILEGEIS_GRANTABLEIS_GRANTABLE結果セットは TABLE_QUALIFIER、TABLE_OWNER、TABLE_NAME でソートされます。
 */
function odbc_columnprivileges($connection_id, $qualifier, $owner, $table_name, $column_name) {}