/**
 * (PECL eio >= 0.0.1dev)<br/>
 * @link http://php.net/manual/en/function.eio-write.php
 * @param mixed $fd [optional] <p> TODO DESCRIPTION </p>
 * @param string $str [optional] <p> TODO DESCRIPTION </p>
 * @param int $length [optional] <p> TODO DESCRIPTION </p>
 * @param int $offset [optional] <p> TODO DESCRIPTION </p>
 * @param int $pri [optional] <p> TODO DESCRIPTION </p>
 * @param callable $callback [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $data [optional] <p> TODO DESCRIPTION </p>
 * @return resource eio_write
 * は、成功した場合にリクエストリソースを返します。エラー時に FALSE を返します。eio_writeFALSE
 */
function eio_write($fd, $str, $length, $offset, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL) {}