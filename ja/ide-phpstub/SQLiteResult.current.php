/**
 * (PHP 5 < 5.4.0, PECL sqlite >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.sqlite-current.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $result_type [optional] <p> TODO DESCRIPTION </p>
 * @param bool $decode_binary [optional] <p> TODO DESCRIPTION </p>
 * @return array 結果セットからカレントレコードの配列を返します。
 * 現在の位置が最終レコード以降の場合、
 * FALSE を返します。FALSESQLITE_ASSOC および SQLITE_BOTH で
返されるカラム名は、設定オプション
sqlite.assoc_case の値に基づき、
大文字小文字が変換されます。SQLITE_ASSOCSQLITE_BOTHsqlite.assoc_case
 */
function SQLiteResult.current($result, $result_type = SQLITE_BOTH, $decode_binary = true) {}