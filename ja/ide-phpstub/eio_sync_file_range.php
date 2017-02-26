/**
 * (PECL eio >= 0.0.1dev)<br/>
 * @link http://php.net/manual/en/function.eio-sync-file-range.php
 * @param mixed $fd [optional] <p> TODO DESCRIPTION </p>
 * @param int $offset [optional] <p> TODO DESCRIPTION </p>
 * @param int $nbytes [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param int $pri [optional] <p> TODO DESCRIPTION </p>
 * @param callable $callback [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $data [optional] <p> TODO DESCRIPTION </p>
 * @return resource eio_sync_file_range
 * は、成功した場合にリクエストリソースを返します。エラー時に FALSE を返します。eio_sync_file_rangeFALSE
 */
function eio_sync_file_range($fd, $offset, $nbytes, $flags, $pri = EIO_PRI_DEFAULT, $callback = NULL, $data = NULL) {}