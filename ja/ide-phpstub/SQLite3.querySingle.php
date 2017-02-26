/**
 * (PHP 5 >= 5.3.0, PHP 7)<br/>
 * @link http://php.net/manual/en/sqlite3.querysingle.php
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param bool $entire_row [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 結果の最初のカラムの値あるいは最初の行全体の配列
 * (entire_row が TRUE の場合) を返します。entire_rowTRUEクエリ自体は有効であるけれども結果が返されなかった場合の返り値は、
 * entire_row が FALSE なら NULL、
 * そうでなければ空の配列となります。entire_rowFALSENULLクエリが無効な場合やクエリの実行に失敗した場合は FALSE を返します。FALSE
 */
function SQLite3.querySingle($query, $entire_row = false) {}