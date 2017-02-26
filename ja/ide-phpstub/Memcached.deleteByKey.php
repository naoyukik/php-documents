/**
 * (PECL memcached >= 0.1.0)<br/>
 * @link http://php.net/manual/en/memcached.deletebykey.php
 * @param string $server_key [optional] <p> TODO DESCRIPTION </p>
 * @param string $key [optional] <p> TODO DESCRIPTION </p>
 * @param int $time [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。
 * キーが存在しない場合、
 * Memcached::getResultCode は
 * Memcached::RES_NOTFOUND を返します。TRUEFALSEMemcached::getResultCodeMemcached::RES_NOTFOUND
 */
function Memcached.deleteByKey($server_key, $key, $time) {}