/**
 * (PHP 4 >= 4.0.3, PHP 5)<br/>
 * @link http://php.net/manual/en/function.mysql-fetch-assoc.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @return array 取得した行に対応する文字列の連想配列を返します。行がもうない場合には
 * FALSE を返します。FALSE結果の複数のカラムが同じフィールド名を有している場合、最後のカラ
 * ムが優先されます。同じ名前を有する他のカラムにアクセスするには、
 * mysql_fetch_rowを使用して数値添字を返すか、
 * エイリアス名を追加する必要があります。エイリアスの説明については、
 * mysql_fetch_arrayの例を参照ください。mysql_fetch_rowmysql_fetch_array
 */
function mysql_fetch_assoc($result) {}