/**
 * (PHP 4 >= 4.1.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.socket-recv.php
 * @param resource $socket [optional] <p> TODO DESCRIPTION </p>
 * @param string $buf [optional] <p> TODO DESCRIPTION </p>
 * @param int $len [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @return int socket_recv は、受信したバイト数を返します。
 * エラーが発生した場合は FALSE を返します。
 * 実際のエラーコードを取得するには
 * socket_last_error をコールします。
 * このエラーコードを socket_strerror
 * に渡すと、エラーに関する説明テキストを取得することができます。socket_recvFALSEsocket_last_errorsocket_strerror
 */
function socket_recv($socket, $buf, $len, $flags) {}