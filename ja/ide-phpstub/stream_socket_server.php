/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.stream-socket-server.php
 * @param string $local_socket [optional] <p> TODO DESCRIPTION </p>
 * @param int $errno [optional] <p> TODO DESCRIPTION </p>
 * @param string $errstr [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param resource $context [optional] <p> TODO DESCRIPTION </p>
 * @return resource 作成したストリーム、あるいはエラー時に FALSE を返します。FALSE
 */
function stream_socket_server($local_socket, $errno, $errstr, $flags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN, $context) {}