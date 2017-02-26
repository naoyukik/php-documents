/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.stream-socket-accept.php
 * @param resource $server_socket [optional] <p> TODO DESCRIPTION </p>
 * @param float $timeout [optional] <p> TODO DESCRIPTION </p>
 * @param string $peername [optional] <p> TODO DESCRIPTION </p>
 * @return resource 受け付けたソケット接続へのストリームを返します。失敗した場合に FALSE を返します。FALSE
 */
function stream_socket_accept($server_socket, $timeout = ini_get("default_socket_timeout"), $peername) {}