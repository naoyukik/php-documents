/**
 * (PHP 4 >= 4.1.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.socket-read.php
 * @param resource $socket [optional] <p> TODO DESCRIPTION </p>
 * @param int $length [optional] <p> TODO DESCRIPTION </p>
 * @param int $type [optional] <p> TODO DESCRIPTION </p>
 * @return string socket_read は、成功時に文字列としてデータを返し、
 * エラー時 (リモートホストが接続をクローズした場合を含みます)
 * に FALSE を返します。
 * エラーコードは socket_last_error で取得可能であり、
 * このコードは、エラー文字列を取得するために
 * socket_strerror に渡すことができます。socket_readFALSEsocket_last_errorsocket_strerrorsocket_read は、読み込むデータがもう存在しない
 * 場合に長さゼロの文字列("")を返します。socket_read は、読み込むデータがもう存在しない
 * 場合に長さゼロの文字列("")を返します。socket_read
 */
function socket_read($socket, $length, $type = PHP_BINARY_READ) {}