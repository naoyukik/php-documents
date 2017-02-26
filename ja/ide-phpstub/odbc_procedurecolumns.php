/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.odbc-procedurecolumns.php
 * @param resource $connection_id [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $owner [optional] <p> TODO DESCRIPTION </p>
 * @param string $proc [optional] <p> TODO DESCRIPTION </p>
 * @param string $column [optional] <p> TODO DESCRIPTION </p>
 * @return resource 指定したプロシージャに関して入出力パラメータのリストとその結果を構成するカラムを返します。
 * ODBC 結果 ID を返します。失敗した場合に FALSE を返します。FALSE結果セットのカラムは次のようになります。
 * PROCEDURE_QUALIFIER
 * PROCEDURE_OWNER
 * PROCEDURE_NAME
 * COLUMN_NAME
 * COLUMN_TYPE
 * DATA_TYPE
 * TYPE_NAME
 * PRECISION
 * LENGTH
 * SCALE
 * RADIX
 * NULLABLE
 * REMARKSPROCEDURE_QUALIFIER
 * PROCEDURE_OWNER
 * PROCEDURE_NAME
 * COLUMN_NAME
 * COLUMN_TYPE
 * DATA_TYPE
 * TYPE_NAME
 * PRECISION
 * LENGTH
 * SCALE
 * RADIX
 * NULLABLE
 * REMARKSPROCEDURE_QUALIFIERPROCEDURE_QUALIFIERPROCEDURE_OWNERPROCEDURE_OWNERPROCEDURE_NAMEPROCEDURE_NAMECOLUMN_NAMECOLUMN_NAMECOLUMN_TYPECOLUMN_TYPEDATA_TYPEDATA_TYPETYPE_NAMETYPE_NAMEPRECISIONPRECISIONLENGTHLENGTHSCALESCALERADIXRADIXNULLABLENULLABLEREMARKSREMARKS結果セットは、PROCEDURE_QUALIFIER、PROCEDURE_OWNER、
 * PROCEDURE_NAME、COLUMN_TYPE でソートされます。
 */
function odbc_procedurecolumns($connection_id, $qualifier, $owner, $proc, $column) {}