/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.odbc-tableprivileges.php
 * @param resource $connection_id [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $owner [optional] <p> TODO DESCRIPTION </p>
 * @param string $name [optional] <p> TODO DESCRIPTION </p>
 * @return resource ODBC 結果 ID を返します。失敗した場合に FALSE を返します。FALSE結果セットのカラムは次のようになります。
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
 * IS_GRANTABLETABLE_QUALIFIERTABLE_QUALIFIERTABLE_OWNERTABLE_OWNERTABLE_NAMETABLE_NAMEGRANTORGRANTORGRANTEEGRANTEEPRIVILEGEPRIVILEGEIS_GRANTABLEIS_GRANTABLE結果セットは TABLE_QUALIFIER、TABLE_OWNER、TABLE_NAME の順番になります。
 */
function odbc_tableprivileges($connection_id, $qualifier, $owner, $name) {}