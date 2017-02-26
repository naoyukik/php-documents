/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/mysqli.affected-rows.php
 * @param mysqli $link [optional] <p> TODO DESCRIPTION </p>
 * @return int 正の整数が返された場合、それは変更された行数かあるいは取得された行数を
 * 示します。ゼロが返された場合、それは UPDATE 文でレコードが更新されなかったか
 * WHERE 条件に当てはまる行がなかった、またはクエリが実行されなかったことを
 * 示します。-1 は、クエリがエラーを返したことを示します。WHERE変更された行数が整数型の最大値 (PHP_INT_MAX) をこえた場合、
 * 結果の行数は文字列として返されます。変更された行数が整数型の最大値 (PHP_INT_MAX) をこえた場合、
 * 結果の行数は文字列として返されます。PHP_INT_MAX
 */
function mysqli.$affected_rows($link) {}