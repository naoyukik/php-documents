/**
 * (PHP 4 >= 4.1.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.socket-recvfrom.php
 * @param resource $socket [optional] <p> TODO DESCRIPTION </p>
 * @param string $buf [optional] <p> TODO DESCRIPTION </p>
 * @param int $len [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param string $name [optional] <p> TODO DESCRIPTION </p>
 * @param int $port [optional] <p> TODO DESCRIPTION </p>
 * @return int socket_recvfrom は、受信したバイト数を返します。
 * あるいはエラー時には FALSE を返します。
 * エラーコードを取得するには socket_last_error
 * をコールします。取得したエラーコードを
 * socket_strerror に渡すと、
 * そのエラーについての説明を得ることができます。socket_recvfromFALSEsocket_last_errorsocket_strerror
 */
function socket_recvfrom($socket, $buf, $len, $flags, $name, $port) {}