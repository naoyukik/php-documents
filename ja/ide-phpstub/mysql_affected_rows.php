/**
 * (PHP 4, PHP 5)<br/>
 * @link http://php.net/manual/en/function.mysql-affected-rows.php
 * @param resource $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return int 成功した場合に変更された行の数を、直近のクエリが失敗した場合に
 * -1 を返します。直近のクエリが WHERE 句を含まない DELETE だった場合、テーブルから
 * すべてのレコードが削除されますが、MySQL 4.1.2 以前のバージョンでは
 * この関数はゼロを返します。UPDATE を使用する場合、MySQL では新旧の値が同じときには更新処理を行いません。
 * このことから、必ずしも mysql_affected_rows の返す値が
 * マッチする行の数と一致するとは限りません。返す値は実際に更新処理が行われた
 * 行の数です。mysql_affected_rowsREPLACE ステートメントは、まず最初に同じ主キーのレコードを削除した後に
 * 新しいレコードを挿入します。この関数は、削除された行の数と
 * 挿入された行の数を足したものを返します。"INSERT ... ON DUPLICATE KEY UPDATE" クエリの場合の返り値は、
 * 新しい行を追加した場合が 1
 * で既存の行を更新した場合が 2 となります。12
 */
function mysql_affected_rows($link_identifier = NULL) {}