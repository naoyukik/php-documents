/**
 * (PHP 4 >= 4.1.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.socket-create-listen.php
 * @param int $port [optional] <p> TODO DESCRIPTION </p>
 * @param int $backlog [optional] <p> TODO DESCRIPTION </p>
 * @return resource socket_create_listen は、
 * 成功した場合に新規ソケットリソースを、エラー時に FALSE を返します。エラーコードは
 * socket_last_error で取得可能です。このコードを
 * socket_strerror に渡すと、エラーの詳細が文字列で取得可能です。socket_create_listenFALSEsocket_last_errorsocket_strerror
 */
function socket_create_listen($port, $backlog = 128) {}