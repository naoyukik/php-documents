/**
 * (PECL apc >= 2.0.0)<br/>
 * @link http://php.net/manual/en/function.apc-cache-info.php
 * @param string $cache_type [optional] <p> TODO DESCRIPTION </p>
 * @param bool $limited [optional] <p> TODO DESCRIPTION </p>
 * @return array キャッシュされたデータ（およびメタデータ）の配列を返します。
 * 失敗した場合に FALSE を返しますFALSEもし APC キャッシュのデータを取得できなかった場合、
 * apc_cache_info は警告を発生します。これが起こるのは、
 * 一般的には APC が有効になっていない場合などです。もし APC キャッシュのデータを取得できなかった場合、
 * apc_cache_info は警告を発生します。これが起こるのは、
 * 一般的には APC が有効になっていない場合などです。apc_cache_info
 */
function apc_cache_info($cache_type = "", $limited = false) {}