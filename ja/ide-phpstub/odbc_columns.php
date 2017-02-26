/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.odbc-columns.php
 * @param resource $connection_id [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $schema [optional] <p> TODO DESCRIPTION </p>
 * @param string $table_name [optional] <p> TODO DESCRIPTION </p>
 * @param string $column_name [optional] <p> TODO DESCRIPTION </p>
 * @return resource ODBC 結果 ID を返します。失敗した場合に FALSE を返します。FALSE結果セットは以下のカラムを有しています。
 * TABLE_QUALIFIER
 * TABLE_SCHEM
 * TABLE_NAME
 * COLUMN_NAME
 * DATA_TYPE
 * TYPE_NAME
 * PRECISION
 * LENGTH
 * SCALE
 * RADIX
 * NULLABLE
 * REMARKSTABLE_QUALIFIER
 * TABLE_SCHEM
 * TABLE_NAME
 * COLUMN_NAME
 * DATA_TYPE
 * TYPE_NAME
 * PRECISION
 * LENGTH
 * SCALE
 * RADIX
 * NULLABLE
 * REMARKSTABLE_QUALIFIERTABLE_QUALIFIERTABLE_SCHEMTABLE_SCHEMTABLE_NAMETABLE_NAMECOLUMN_NAMECOLUMN_NAMEDATA_TYPEDATA_TYPETYPE_NAMETYPE_NAMEPRECISIONPRECISIONLENGTHLENGTHSCALESCALERADIXRADIXNULLABLENULLABLEREMARKSREMARKS結果セットは TABLE_QUALIFIER、TABLE_SCHEM、TABLE_NAME でソートされます。
 */
function odbc_columns($connection_id, $qualifier, $schema, $table_name, $column_name) {}