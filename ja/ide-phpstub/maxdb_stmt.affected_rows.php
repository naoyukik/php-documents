/**
 * (PECL maxdb >= 1.0)<br/>
 * @link http://php.net/manual/en/function.maxdb-stmt-affected-rows.php
 * @param resource $stmt [optional] <p> TODO DESCRIPTION </p>
 * @return int ゼロより大きい整数の場合は、変更された行数あるいは取得した行数を表します。
 * ゼロの場合は、UPDATE/DELETE 文で 1 行も更新されなかったか、
 * クエリの WHERE 句にマッチする行がなかった、
 * あるいはクエリがまだ実行されていないことを表します。
 * -1 は、クエリがエラーを返したか行数が取得できなかったことを表します。
 */
function maxdb_stmt.affected_rows($stmt) {}