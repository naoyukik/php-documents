/**
 * (PHP 4 >= 4.1.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.socket-create.php
 * @param int $domain [optional] <p> TODO DESCRIPTION </p>
 * @param int $type [optional] <p> TODO DESCRIPTION </p>
 * @param int $protocol [optional] <p> TODO DESCRIPTION </p>
 * @return resource socket_create は、
 * 成功時にソケットリソース、失敗時に FALSE を返します。
 * 実際のエラーコードは、socket_last_error を
 * コールすることにより取得できます。このエラーコードをさらに
 * socket_strerrorに渡すことにより、
 * エラーの内容を文字列で取得することが可能です。socket_createFALSEsocket_last_errorsocket_strerror
 */
function socket_create($domain, $type, $protocol) {}