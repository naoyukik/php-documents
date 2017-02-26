/**
 * (PHP 4 >= 4.1.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.socket-write.php
 * @param resource $socket [optional] <p> TODO DESCRIPTION </p>
 * @param string $buffer [optional] <p> TODO DESCRIPTION </p>
 * @param int $length [optional] <p> TODO DESCRIPTION </p>
 * @return int ソケットへの書き込みに成功したデータのバイト数を返します。失敗した場合に FALSE を返します。
 * エラーコードは socket_last_error
 * を用いて取得することができ、この値を socket_strerror
 * に渡すことでエラー情報を文字列で取得可能です。FALSEsocket_last_errorsocket_strerrorsocket_write がゼロを返すことも十分ありえます。
 * これは、書き込むデータが存在しなかったことを意味します。
 * エラーをチェックするために FALSE かどうかを調べる際には、必ず
 * === 演算子を使用しましょう。socket_write がゼロを返すことも十分ありえます。
 * これは、書き込むデータが存在しなかったことを意味します。
 * エラーをチェックするために FALSE かどうかを調べる際には、必ず
 * === 演算子を使用しましょう。socket_writeFALSE===
 */
function socket_write($socket, $buffer, $length) {}