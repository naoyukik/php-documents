/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.stream-filter-append.php
 * @param resource $stream [optional] <p> TODO DESCRIPTION </p>
 * @param string $filtername [optional] <p> TODO DESCRIPTION </p>
 * @param int $read_write [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $params [optional] <p> TODO DESCRIPTION </p>
 * @return resource 成功した場合にリソース、失敗した場合に FALSE を返します。
 * このリソースは、stream_filter_remove
 * をコールする際にこのフィルタインスタンスを参照するために使用可能です。FALSEstream_filter_removeFALSE が返されるのは、stream がリソースではない場合や
 * filtername が見つからない場合です。FALSEstreamfiltername
 */
function stream_filter_append($stream, $filtername, $read_write, $params) {}