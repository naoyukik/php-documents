/**
 * (PHP 5 < 5.4.0)<br/>
 * @link http://php.net/manual/en/function.sqlite-fetch-column-types.php
 * @param string $table_name [optional] <p> TODO DESCRIPTION </p>
 * @param resource $dbhandle [optional] <p> TODO DESCRIPTION </p>
 * @param int $result_type [optional] <p> TODO DESCRIPTION </p>
 * @return array カラムのデータ型の配列を返します。エラー時は FALSE を返します。FALSESQLITE_ASSOC および SQLITE_BOTH で
返されるカラム名は、設定オプション
sqlite.assoc_case の値に基づき、
大文字小文字が変換されます。SQLITE_ASSOCSQLITE_BOTHsqlite.assoc_case
 */
function sqlite_fetch_column_types($table_name, $dbhandle, $result_type = SQLITE_ASSOC) {}