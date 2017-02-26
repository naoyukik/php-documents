/**
 * (PECL memcached >= 0.1.0)<br/>
 * @link http://php.net/manual/en/memcached.getbykey.php
 * @param string $server_key [optional] <p> TODO DESCRIPTION </p>
 * @param string $key [optional] <p> TODO DESCRIPTION </p>
 * @param callable $cache_cb [optional] <p> TODO DESCRIPTION </p>
 * @param float $cas_token [optional] <p> TODO DESCRIPTION </p>
 * @return mixed キャッシュに格納された値、あるいは FALSE を返します。
 * キーが存在しない場合、
 * Memcached::getResultCode は
 * Memcached::RES_NOTFOUND を返します。FALSEMemcached::getResultCodeMemcached::RES_NOTFOUND
 */
function Memcached.getByKey($server_key, $key, $cache_cb, $cas_token) {}