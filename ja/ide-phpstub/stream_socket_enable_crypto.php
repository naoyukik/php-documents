/**
 * (PHP 5 >= 5.1.0, PHP 7)<br/>
 * @link http://php.net/manual/en/function.stream-socket-enable-crypto.php
 * @param resource $stream [optional] <p> TODO DESCRIPTION </p>
 * @param bool $enable [optional] <p> TODO DESCRIPTION </p>
 * @param int $crypto_type [optional] <p> TODO DESCRIPTION </p>
 * @param resource $session_stream [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 成功した場合に TRUE、ネゴシエーションに失敗した場合に FALSE、
 * 十分なデータがないために再試行が必要な場合（非ブロックモード時のみ）
 * に 0 を返します。TRUEFALSE0
 */
function stream_socket_enable_crypto($stream, $enable, $crypto_type, $session_stream) {}