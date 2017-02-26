/**
 * (PHP 5 < 5.4.0, PECL sqlite >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.sqlite-fetch-all.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $result_type [optional] <p> TODO DESCRIPTION </p>
 * @param bool $decode_binary [optional] <p> TODO DESCRIPTION </p>
 * @return array 結果セットからのカレントレコードの配列を返します。
 * sqlite_query の直後にコールされた場合、
 * 全ての行を返します。sqlite_fetch_array
 * の後にコールされた場合、残りの行を返します。
 * 結果セットに行が残っていない場合、空の配列を返します。sqlite_querysqlite_fetch_arraySQLITE_ASSOC および SQLITE_BOTH で
返されるカラム名は、設定オプション
sqlite.assoc_case の値に基づき、
大文字小文字が変換されます。SQLITE_ASSOCSQLITE_BOTHsqlite.assoc_case
 */
function sqlite_fetch_all($result, $result_type = SQLITE_BOTH, $decode_binary = true) {}