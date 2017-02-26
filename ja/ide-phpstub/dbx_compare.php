/**
 * (PHP 4 >= 4.1.0, PHP 5 <= 5.0.5, PECL dbx >= 1.1.0)<br/>
 * @link http://php.net/manual/en/function.dbx-compare.php
 * @param array $row_a [optional] <p> TODO DESCRIPTION </p>
 * @param array $row_b [optional] <p> TODO DESCRIPTION </p>
 * @param string $column_key [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @return int row_a[$column_key] が
 * row_b[$column_key] に等しい場合に 0、
 * 前者が後者より大きいかあるいは小さい場合にそれぞれ
 * 1 あるいは -1、
 * もし DBX_CMP_DESC が設定されていればその逆を返します。row_a[$column_key]row_b[$column_key]01-1DBX_CMP_DESC
 */
function dbx_compare($row_a, $row_b, $column_key, $flags = DBX_CMP_ASC | DBX_CMP_NATIVE) {}