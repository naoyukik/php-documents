/**
 * (PECL eio >= 0.0.1dev)<br/>
 * @link http://php.net/manual/en/function.eio-mknod.php
 * @param string $path [optional] <p> TODO DESCRIPTION </p>
 * @param int $mode [optional] <p> TODO DESCRIPTION </p>
 * @param int $dev [optional] <p> TODO DESCRIPTION </p>
 * @param int $pri [optional] <p> TODO DESCRIPTION </p>
 * @param callable $callback [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $data [optional] <p> TODO DESCRIPTION </p>
 * @return resource eio_mknod
 * は、成功した場合にリクエストリソースを返します。エラー時に FALSE を返します。eio_mknodFALSE
 */
function eio_mknod($path, $mode, $dev, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL) {}