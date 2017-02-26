/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.odbc-specialcolumns.php
 * @param resource $connection_id [optional] <p> TODO DESCRIPTION </p>
 * @param int $type [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $owner [optional] <p> TODO DESCRIPTION </p>
 * @param string $table [optional] <p> TODO DESCRIPTION </p>
 * @param int $scope [optional] <p> TODO DESCRIPTION </p>
 * @param int $nullable [optional] <p> TODO DESCRIPTION </p>
 * @return resource ODBC 結果 ID または失敗した場合に FALSE を返します。FALSE結果セットのカラムは次のようになります。
 * SCOPE
 * COLUMN_NAME
 * DATA_TYPE
 * TYPE_NAME
 * PRECISION
 * LENGTH
 * SCALE
 * PSEUDO_COLUMNSCOPE
 * COLUMN_NAME
 * DATA_TYPE
 * TYPE_NAME
 * PRECISION
 * LENGTH
 * SCALE
 * PSEUDO_COLUMNSCOPESCOPECOLUMN_NAMECOLUMN_NAMEDATA_TYPEDATA_TYPETYPE_NAMETYPE_NAMEPRECISIONPRECISIONLENGTHLENGTHSCALESCALEPSEUDO_COLUMNPSEUDO_COLUMN
 */
function odbc_specialcolumns($connection_id, $type, $qualifier, $owner, $table, $scope, $nullable) {}