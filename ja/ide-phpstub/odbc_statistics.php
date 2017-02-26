/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.odbc-statistics.php
 * @param resource $connection_id [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $owner [optional] <p> TODO DESCRIPTION </p>
 * @param string $table_name [optional] <p> TODO DESCRIPTION </p>
 * @param int $unique [optional] <p> TODO DESCRIPTION </p>
 * @param int $accuracy [optional] <p> TODO DESCRIPTION </p>
 * @return resource ODBC 結果 ID を返します。失敗した場合に FALSE を返します。FALSE結果セットのカラムは次のようになります。
 * TABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * NON_UNIQUE
 * INDEX_QUALIFIER
 * INDEX_NAME
 * TYPE
 * SEQ_IN_INDEX
 * COLUMN_NAME
 * COLLATION
 * CARDINALITY
 * PAGES
 * FILTER_CONDITIONTABLE_QUALIFIER
 * TABLE_OWNER
 * TABLE_NAME
 * NON_UNIQUE
 * INDEX_QUALIFIER
 * INDEX_NAME
 * TYPE
 * SEQ_IN_INDEX
 * COLUMN_NAME
 * COLLATION
 * CARDINALITY
 * PAGES
 * FILTER_CONDITIONTABLE_QUALIFIERTABLE_QUALIFIERTABLE_OWNERTABLE_OWNERTABLE_NAMETABLE_NAMENON_UNIQUENON_UNIQUEINDEX_QUALIFIERINDEX_QUALIFIERINDEX_NAMEINDEX_NAMETYPETYPESEQ_IN_INDEXSEQ_IN_INDEXCOLUMN_NAMECOLUMN_NAMECOLLATIONCOLLATIONCARDINALITYCARDINALITYPAGESPAGESFILTER_CONDITIONFILTER_CONDITION結果セットは、NON_UNIQUE、TYPE、INDEX_QUALIFIER、
 * INDEX_NAME、SEQ_IN_INDEX でソートされます。
 */
function odbc_statistics($connection_id, $qualifier, $owner, $table_name, $unique, $accuracy) {}