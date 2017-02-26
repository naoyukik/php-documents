/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.odbc-primarykeys.php
 * @param resource $connection_id [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $owner [optional] <p> TODO DESCRIPTION </p>
 * @param string $table [optional] <p> TODO DESCRIPTION </p>
 * @return resource ODBC 結果 ID を返します。失敗した場合に FALSE を返します。FALSE結果は以下のカラムを有します。
 * TABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * COLUMN_NAME
 * KEY_SEQ
 * PK_NAMETABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * COLUMN_NAME
 * KEY_SEQ
 * PK_NAMETABLE_QUALIFIERTABLE_QUALIFIERTABLE_OWNERTABLE_OWNERTABLE_NAMETABLE_NAMECOLUMN_NAMECOLUMN_NAMEKEY_SEQKEY_SEQPK_NAMEPK_NAME
 */
function odbc_primarykeys($connection_id, $qualifier, $owner, $table) {}