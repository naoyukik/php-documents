/**
 * (PHP 4 >= 4.0.6, PHP 5 <= 5.0.5, PECL dbx >= 1.1.0)<br/>
 * @link http://php.net/manual/en/function.dbx-query.php
 * @param object $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $sql_statement [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @return mixed dbx_query は、成功した場合に オブジェクトあるいは
 * 1、失敗した場合に 0 を返します。
 * 結果オブジェクトが返されるのは、sql_statement
 * で指定されたクエリが結果セットを生成する場合（例: SELECT クエリ。結果が
 * 0 件の場合も含む）のみです。dbx_query10sql_statement返されるオブジェクトは、flags
 * の設定により 4 つまたは 5 つのプロパティを保持します。
 * handle
 * 接続したデータベースの有効なハンドルで、モジュール専用関数で
 * （必要ならば）使用されます。
 * <?php
$result = dbx_query($link, "SELECT id FROM table");
mysql_field_len($result->handle, 0);
?>
 * cols および rows
 * これらは、それぞれカラム数（フィールド数）および行数（レコード数）
 * を表します。
 * <?php
$result = dbx_query($link, 'SELECT id FROM table');
echo $result->rows; // レコード数
echo $result->cols; // フィールド数
?>
 * info (オプション)
 * flags パラメータに
 * DBX_RESULT_INFO あるいは
 * DBX_RESULT_ASSOC が指定されている場合のみ
 * 返されます。2 次元の配列で、2 つのキー（name
 * および type）を持ち、カラムの情報を取得するために
 * 使用します。
 * 各フィールドの名前と型を一覧表示する
 * <?php
$result = dbx_query($link, 'SELECT id FROM table',
 * DBX_RESULT_INDEX | DBX_RESULT_INFO);
 * for ($i = 0; $i < $result->cols; $i++ ) {
 * echo $result->info['name'][$i] . "\n";
 * echo $result->info['type'][$i] . "\n";  
}
?>
 * data
 * このプロパティには結果のデータが含まれます。flags
 * の設定によってはこのデータはカラム名と関連付けられているでしょう。
 * DBX_RESULT_ASSOC が設定されていた場合、
 * $result->data[2]["field_name"] のように使用可能です。
 * data プロパティの内容を HTML テーブルで表示する
 * <?php
$result = dbx_query($link, 'SELECT id, parentid, description FROM table');
 * echo "<table>\n";
foreach ($result->data as $row) {
 * echo "<tr>\n";
 * foreach ($row as $field) {
 * echo "<td>$field</td>";
 * }
 * echo "</tr>\n";
}
echo "</table>\n";
?>
 * UNBUFFERED クエリの処理法
 * <?php
 * $result = dbx_query ($link, 'SELECT id, parentid, description FROM table', DBX_RESULT_UNBUFFERED);
 * echo "<table>\n";
while ($row = dbx_fetch_row($result)) {
 * echo "<tr>\n";
 * foreach ($row as $field) {
 * echo "<td>$field</td>";
 * }
 * echo "</tr>\n";
}
echo "</table>\n";
 * ?>flagshandle
 * 接続したデータベースの有効なハンドルで、モジュール専用関数で
 * （必要ならば）使用されます。
 * <?php
$result = dbx_query($link, "SELECT id FROM table");
mysql_field_len($result->handle, 0);
?>
 * cols および rows
 * これらは、それぞれカラム数（フィールド数）および行数（レコード数）
 * を表します。
 * <?php
$result = dbx_query($link, 'SELECT id FROM table');
echo $result->rows; // レコード数
echo $result->cols; // フィールド数
?>
 * info (オプション)
 * flags パラメータに
 * DBX_RESULT_INFO あるいは
 * DBX_RESULT_ASSOC が指定されている場合のみ
 * 返されます。2 次元の配列で、2 つのキー（name
 * および type）を持ち、カラムの情報を取得するために
 * 使用します。
 * 各フィールドの名前と型を一覧表示する
 * <?php
$result = dbx_query($link, 'SELECT id FROM table',
 * DBX_RESULT_INDEX | DBX_RESULT_INFO);
 * for ($i = 0; $i < $result->cols; $i++ ) {
 * echo $result->info['name'][$i] . "\n";
 * echo $result->info['type'][$i] . "\n";  
}
?>
 * data
 * このプロパティには結果のデータが含まれます。flags
 * の設定によってはこのデータはカラム名と関連付けられているでしょう。
 * DBX_RESULT_ASSOC が設定されていた場合、
 * $result->data[2]["field_name"] のように使用可能です。
 * data プロパティの内容を HTML テーブルで表示する
 * <?php
$result = dbx_query($link, 'SELECT id, parentid, description FROM table');
 * echo "<table>\n";
foreach ($result->data as $row) {
 * echo "<tr>\n";
 * foreach ($row as $field) {
 * echo "<td>$field</td>";
 * }
 * echo "</tr>\n";
}
echo "</table>\n";
?>
 * UNBUFFERED クエリの処理法
 * <?php
 * $result = dbx_query ($link, 'SELECT id, parentid, description FROM table', DBX_RESULT_UNBUFFERED);
 * echo "<table>\n";
while ($row = dbx_fetch_row($result)) {
 * echo "<tr>\n";
 * foreach ($row as $field) {
 * echo "<td>$field</td>";
 * }
 * echo "</tr>\n";
}
echo "</table>\n";
 * ?>handle
 * 接続したデータベースの有効なハンドルで、モジュール専用関数で
 * （必要ならば）使用されます。
 * <?php
$result = dbx_query($link, "SELECT id FROM table");
mysql_field_len($result->handle, 0);
?>handlehandle接続したデータベースの有効なハンドルで、モジュール専用関数で
 * （必要ならば）使用されます。
 * <?php
$result = dbx_query($link, "SELECT id FROM table");
mysql_field_len($result->handle, 0);
?>接続したデータベースの有効なハンドルで、モジュール専用関数で
 * （必要ならば）使用されます。
 * <?php
$result = dbx_query($link, "SELECT id FROM table");
mysql_field_len($result->handle, 0);
?><?php
$result = dbx_query($link, "SELECT id FROM table");
mysql_field_len($result->handle, 0);
?><?php
$result = dbx_query($link, "SELECT id FROM table");
mysql_field_len($result->handle, 0);
?>cols および rows
 * これらは、それぞれカラム数（フィールド数）および行数（レコード数）
 * を表します。
 * <?php
$result = dbx_query($link, 'SELECT id FROM table');
echo $result->rows; // レコード数
echo $result->cols; // フィールド数
?>cols および rowscolsrowsこれらは、それぞれカラム数（フィールド数）および行数（レコード数）
 * を表します。
 * <?php
$result = dbx_query($link, 'SELECT id FROM table');
echo $result->rows; // レコード数
echo $result->cols; // フィールド数
?>これらは、それぞれカラム数（フィールド数）および行数（レコード数）
 * を表します。
 * <?php
$result = dbx_query($link, 'SELECT id FROM table');
echo $result->rows; // レコード数
echo $result->cols; // フィールド数
?><?php
$result = dbx_query($link, 'SELECT id FROM table');
echo $result->rows; // レコード数
echo $result->cols; // フィールド数
?><?php
$result = dbx_query($link, 'SELECT id FROM table');
echo $result->rows; // レコード数
echo $result->cols; // フィールド数
?>info (オプション)
 * flags パラメータに
 * DBX_RESULT_INFO あるいは
 * DBX_RESULT_ASSOC が指定されている場合のみ
 * 返されます。2 次元の配列で、2 つのキー（name
 * および type）を持ち、カラムの情報を取得するために
 * 使用します。
 * 各フィールドの名前と型を一覧表示する
 * <?php
$result = dbx_query($link, 'SELECT id FROM table',
 * DBX_RESULT_INDEX | DBX_RESULT_INFO);
 * for ($i = 0; $i < $result->cols; $i++ ) {
 * echo $result->info['name'][$i] . "\n";
 * echo $result->info['type'][$i] . "\n";  
}
?>info (オプション)infoflags パラメータに
 * DBX_RESULT_INFO あるいは
 * DBX_RESULT_ASSOC が指定されている場合のみ
 * 返されます。2 次元の配列で、2 つのキー（name
 * および type）を持ち、カラムの情報を取得するために
 * 使用します。
 * 各フィールドの名前と型を一覧表示する
 * <?php
$result = dbx_query($link, 'SELECT id FROM table',
 * DBX_RESULT_INDEX | DBX_RESULT_INFO);
 * for ($i = 0; $i < $result->cols; $i++ ) {
 * echo $result->info['name'][$i] . "\n";
 * echo $result->info['type'][$i] . "\n";  
}
?>flags パラメータに
 * DBX_RESULT_INFO あるいは
 * DBX_RESULT_ASSOC が指定されている場合のみ
 * 返されます。2 次元の配列で、2 つのキー（name
 * および type）を持ち、カラムの情報を取得するために
 * 使用します。flagsDBX_RESULT_INFODBX_RESULT_ASSOCnametype各フィールドの名前と型を一覧表示する
 * <?php
$result = dbx_query($link, 'SELECT id FROM table',
 * DBX_RESULT_INDEX | DBX_RESULT_INFO);
 * for ($i = 0; $i < $result->cols; $i++ ) {
 * echo $result->info['name'][$i] . "\n";
 * echo $result->info['type'][$i] . "\n";  
}
?><?php
$result = dbx_query($link, 'SELECT id FROM table',
 * DBX_RESULT_INDEX | DBX_RESULT_INFO);
 * for ($i = 0; $i < $result->cols; $i++ ) {
 * echo $result->info['name'][$i] . "\n";
 * echo $result->info['type'][$i] . "\n";  
}
?>data
 * このプロパティには結果のデータが含まれます。flags
 * の設定によってはこのデータはカラム名と関連付けられているでしょう。
 * DBX_RESULT_ASSOC が設定されていた場合、
 * $result->data[2]["field_name"] のように使用可能です。
 * data プロパティの内容を HTML テーブルで表示する
 * <?php
$result = dbx_query($link, 'SELECT id, parentid, description FROM table');
 * echo "<table>\n";
foreach ($result->data as $row) {
 * echo "<tr>\n";
 * foreach ($row as $field) {
 * echo "<td>$field</td>";
 * }
 * echo "</tr>\n";
}
echo "</table>\n";
?>
 * UNBUFFERED クエリの処理法
 * <?php
 * $result = dbx_query ($link, 'SELECT id, parentid, description FROM table', DBX_RESULT_UNBUFFERED);
 * echo "<table>\n";
while ($row = dbx_fetch_row($result)) {
 * echo "<tr>\n";
 * foreach ($row as $field) {
 * echo "<td>$field</td>";
 * }
 * echo "</tr>\n";
}
echo "</table>\n";
 * ?>datadataこのプロパティには結果のデータが含まれます。flags
 * の設定によってはこのデータはカラム名と関連付けられているでしょう。
 * DBX_RESULT_ASSOC が設定されていた場合、
 * $result->data[2]["field_name"] のように使用可能です。
 * data プロパティの内容を HTML テーブルで表示する
 * <?php
$result = dbx_query($link, 'SELECT id, parentid, description FROM table');
 * echo "<table>\n";
foreach ($result->data as $row) {
 * echo "<tr>\n";
 * foreach ($row as $field) {
 * echo "<td>$field</td>";
 * }
 * echo "</tr>\n";
}
echo "</table>\n";
?>
 * UNBUFFERED クエリの処理法
 * <?php
 * $result = dbx_query ($link, 'SELECT id, parentid, description FROM table', DBX_RESULT_UNBUFFERED);
 * echo "<table>\n";
while ($row = dbx_fetch_row($result)) {
 * echo "<tr>\n";
 * foreach ($row as $field) {
 * echo "<td>$field</td>";
 * }
 * echo "</tr>\n";
}
echo "</table>\n";
 * ?>このプロパティには結果のデータが含まれます。flags
 * の設定によってはこのデータはカラム名と関連付けられているでしょう。
 * DBX_RESULT_ASSOC が設定されていた場合、
 * $result->data[2]["field_name"] のように使用可能です。flagsDBX_RESULT_ASSOC$result->data[2]["field_name"]data プロパティの内容を HTML テーブルで表示する
 * <?php
$result = dbx_query($link, 'SELECT id, parentid, description FROM table');
 * echo "<table>\n";
foreach ($result->data as $row) {
 * echo "<tr>\n";
 * foreach ($row as $field) {
 * echo "<td>$field</td>";
 * }
 * echo "</tr>\n";
}
echo "</table>\n";
?><?php
$result = dbx_query($link, 'SELECT id, parentid, description FROM table');
 * echo "<table>\n";
foreach ($result->data as $row) {
 * echo "<tr>\n";
 * foreach ($row as $field) {
 * echo "<td>$field</td>";
 * }
 * echo "</tr>\n";
}
echo "</table>\n";
?>UNBUFFERED クエリの処理法
 * <?php
 * $result = dbx_query ($link, 'SELECT id, parentid, description FROM table', DBX_RESULT_UNBUFFERED);
 * echo "<table>\n";
while ($row = dbx_fetch_row($result)) {
 * echo "<tr>\n";
 * foreach ($row as $field) {
 * echo "<td>$field</td>";
 * }
 * echo "</tr>\n";
}
echo "</table>\n";
 * ?><?php
 * $result = dbx_query ($link, 'SELECT id, parentid, description FROM table', DBX_RESULT_UNBUFFERED);
 * echo "<table>\n";
while ($row = dbx_fetch_row($result)) {
 * echo "<tr>\n";
 * foreach ($row as $field) {
 * echo "<td>$field</td>";
 * }
 * echo "</tr>\n";
}
echo "</table>\n";
 * ?>
 */
function dbx_query($link_identifier, $sql_statement, $flags) {}