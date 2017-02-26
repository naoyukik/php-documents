/**
 * (PECL eio >= 0.0.1dev)<br/>
 * @link http://php.net/manual/en/function.eio-fallocate.php
 * @param mixed $fd [optional] <p> TODO DESCRIPTION </p>
 * @param int $mode [optional] <p> TODO DESCRIPTION </p>
 * @param int $offset [optional] <p> TODO DESCRIPTION </p>
 * @param int $length [optional] <p> TODO DESCRIPTION </p>
 * @param int $pri [optional] <p> TODO DESCRIPTION </p>
 * @param callable $callback [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $data [optional] <p> TODO DESCRIPTION </p>
 * @return resource eio_fallocate
 * は、成功した場合にリクエストリソースを返します。エラー時に FALSE を返します。eio_fallocateFALSE
 */
function eio_fallocate($fd, $mode, $offset, $length, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL) {}