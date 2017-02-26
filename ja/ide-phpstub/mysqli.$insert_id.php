/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/mysqli.insert-id.php
 * @param mysqli $link [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 直前のクエリで更新された AUTO_INCREMENT
 * フィールドの値を返します。接続での直前のクエリがない場合や
 * クエリが AUTO_INCREMENT の値を更新しなかった場合は
 * ゼロを返します。AUTO_INCREMENTAUTO_INCREMENTもし数値が int の最大値をこえた場合、mysqli_insert_id
 * は文字列で結果を返します。もし数値が int の最大値をこえた場合、mysqli_insert_id
 * は文字列で結果を返します。mysqli_insert_id
 */
function mysqli.$insert_id($link) {}