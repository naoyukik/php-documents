/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/mysqli-result.fetch-assoc.php
 * @param mysqli_result $result [optional] <p> TODO DESCRIPTION </p>
 * @return array 取得した行に対応する文字列の連想配列を返します。
 * 連想配列の各キーが、結果セットのカラムを表します。
 * 結果セットにもう行がない場合には NULL を返します。NULLもし 2 つ以上のカラムが同じフィールド名であった場合は、最後に現れた
 * カラムが優先され、以前のデータを上書きします。同名の複数のカラムに
 * アクセスする場合、mysqli_fetch_row を用いて
 * 数値添字配列を使用するか、あるいはカラム名にエイリアスを指定する
 * 必要があります。mysqli_fetch_row
 */
function mysqli_fetch_assoc($result) {}