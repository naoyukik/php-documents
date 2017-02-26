/**
 * (PHP 5 < 5.4.0, PECL sqlite >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.sqlite-field-name.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $field_index [optional] <p> TODO DESCRIPTION </p>
 * @return string 与えられたオリジナルのカラム番号での SQLite
 * 結果セット中のフィールド名を返します。エラーの場合は、FALSE を返します。FALSESQLITE_ASSOC および SQLITE_BOTH で
返されるカラム名は、設定オプション
sqlite.assoc_case の値に基づき、
大文字小文字が変換されます。SQLITE_ASSOCSQLITE_BOTHsqlite.assoc_case
 */
function SQLiteResult.fieldName($result, $field_index) {}