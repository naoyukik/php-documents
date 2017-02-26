/**
 * (PECL eio >= 0.0.1dev)<br/>
 * @link http://php.net/manual/en/function.eio-open.php
 * @param string $path [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param int $mode [optional] <p> TODO DESCRIPTION </p>
 * @param int $pri [optional] <p> TODO DESCRIPTION </p>
 * @param callable $callback [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $data [optional] <p> TODO DESCRIPTION </p>
 * @return resource eio_open は、成功した場合に
 * callback の result
 * 引数でファイルディスクリプタを返します。
 * それ以外の場合は、result は -1 になります。eio_opencallbackresultresult-1
 */
function eio_open($path, $flags, $mode, $pri, $callback, $data = NULL) {}