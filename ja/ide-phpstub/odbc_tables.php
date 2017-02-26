/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.odbc-tables.php
 * @param resource $connection_id [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $owner [optional] <p> TODO DESCRIPTION </p>
 * @param string $name [optional] <p> TODO DESCRIPTION </p>
 * @param string $types [optional] <p> TODO DESCRIPTION </p>
 * @return resource 情報を含んでいる ODBC 結果 ID を返します。
 * 失敗した場合に FALSE を返します。FALSE結果セットのカラムは次のようになります。
 * TABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * TABLE_TYPE
 * REMARKSTABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * TABLE_TYPE
 * REMARKSTABLE_QUALIFIERTABLE_QUALIFIERTABLE_OWNERTABLE_OWNERTABLE_NAMETABLE_NAMETABLE_TYPETABLE_TYPEREMARKSREMARKS結果セットは TABLE_TYPE、TABLE_QUALIFIER、TABLE_OWNER、TABLE_NAME
 * の順番になります。
 */
function odbc_tables($connection_id, $qualifier, $owner, $name, $types) {}