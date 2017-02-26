/**
 * (PHP 5 < 5.4.0, PECL sqlite >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.sqlite-array-query.php
 * @param resource $dbhandle [optional] <p> TODO DESCRIPTION </p>
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param int $result_type [optional] <p> TODO DESCRIPTION </p>
 * @param bool $decode_binary [optional] <p> TODO DESCRIPTION </p>
 * @return array 結果セット全体の配列、その他の場合は FALSE を返します。FALSESQLITE_ASSOC および SQLITE_BOTH で
返されるカラム名は、設定オプション
sqlite.assoc_case の値に基づき、
大文字小文字が変換されます。SQLITE_ASSOCSQLITE_BOTHsqlite.assoc_case
 */
function SQLiteDatabase.arrayQuery($dbhandle, $query, $result_type = SQLITE_BOTH, $decode_binary = true) {}