/**
 * (PHP 4 >= 4.1.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.socket-getpeername.php
 * @param resource $socket [optional] <p> TODO DESCRIPTION </p>
 * @param string $address [optional] <p> TODO DESCRIPTION </p>
 * @param int $port [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。 socket_getpeername は、
 * ソケットの型が AF_INET、
 * AF_INET6 あるいは AF_UNIX
 * のいずれでもない場合にも FALSE を返します。この場合には、
 * 直近のソケットエラーコードは更新されません。TRUEFALSEsocket_getpeernameAF_INETAF_INET6AF_UNIXFALSEされません
 */
function socket_getpeername($socket, $address, $port) {}