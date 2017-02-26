/**
 * (PECL eio >= 0.5.0b)<br/>
 * @link http://php.net/manual/en/function.eio-seek.php
 * @param mixed $fd [optional] <p> TODO DESCRIPTION </p>
 * @param int $offset [optional] <p> TODO DESCRIPTION </p>
 * @param int $whence [optional] <p> TODO DESCRIPTION </p>
 * @param int $pri [optional] <p> TODO DESCRIPTION </p>
 * @param callable $callback [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $data [optional] <p> TODO DESCRIPTION </p>
 * @return resource eio_seek
 * は、成功した場合にリクエストリソースを返します。エラー時に FALSE を返します。eio_seekFALSE
 */
function eio_seek($fd, $offset, $whence, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL) {}