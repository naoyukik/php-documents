/**
 * (PHP 4 >= 4.1.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.socket-select.php
 * @param array $read [optional] <p> TODO DESCRIPTION </p>
 * @param array $write [optional] <p> TODO DESCRIPTION </p>
 * @param array $except [optional] <p> TODO DESCRIPTION </p>
 * @param int $tv_sec [optional] <p> TODO DESCRIPTION </p>
 * @param int $tv_usec [optional] <p> TODO DESCRIPTION </p>
 * @return int 成功した場合は、socket_select は配列内で
 * 変化のあったソケットリソースの数を返します。もし何かがおこる前に
 * タイムアウト時間が経過した場合は、ゼロを返すことになります。
 * エラー時には FALSE が返されます。エラーコードは
 * socket_last_error で取得可能です。socket_selectFALSEsocket_last_errorエラーかどうかを調べる際には、必ず === 演算子を
 * 使用するようにしましょう。socket_select は
 * 0 を返す場合もあり、このような場合に ==
 * を用いて比較すると、エラーと判定されてしまいます。
 * socket_select の返す結果を知る
 * <?php
$e = NULL;
if (false === socket_select($r, $w, $e, 0)) {
 * echo "socket_select() は失敗しました。原因: " .
 * socket_strerror(socket_last_error()) . "\n";
}
?>エラーかどうかを調べる際には、必ず === 演算子を
 * 使用するようにしましょう。socket_select は
 * 0 を返す場合もあり、このような場合に ==
 * を用いて比較すると、エラーと判定されてしまいます。
 * socket_select の返す結果を知る
 * <?php
$e = NULL;
if (false === socket_select($r, $w, $e, 0)) {
 * echo "socket_select() は失敗しました。原因: " .
 * socket_strerror(socket_last_error()) . "\n";
}
?>===socket_select==socket_select の返す結果を知る
 * <?php
$e = NULL;
if (false === socket_select($r, $w, $e, 0)) {
 * echo "socket_select() は失敗しました。原因: " .
 * socket_strerror(socket_last_error()) . "\n";
}
?>socket_select<?php
$e = NULL;
if (false === socket_select($r, $w, $e, 0)) {
 * echo "socket_select() は失敗しました。原因: " .
 * socket_strerror(socket_last_error()) . "\n";
}
?>
 */
function socket_select($read, $write, $except, $tv_sec, $tv_usec) {}