/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/mysqli-stmt.affected-rows.php
 * @param mysqli_stmt $stmt [optional] <p> TODO DESCRIPTION </p>
 * @return int ゼロより大きい整数の場合、変更した行の数を示します。ゼロの場合は、
 * UPDATE/DELETE で 1 行も更新されなかった・WHERE 句にマッチする行がなかった・
 * あるいはまだクエリが実行されていないのいずれかであることを示します。
 * -1 は、クエリがエラーを返したことを示します。
 * NULL は、関数に無効な引数が渡されたことを示します。変更された行の数が PHP の int 型の最大値をこえる場合は、変更された
 * 行の数は文字列として返されます。変更された行の数が PHP の int 型の最大値をこえる場合は、変更された
 * 行の数は文字列として返されます。
 */
function mysqli_stmt.$affected_rows($stmt) {}