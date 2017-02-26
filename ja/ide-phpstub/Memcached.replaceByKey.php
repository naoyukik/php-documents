/**
 * (PECL memcached >= 0.1.0)<br/>
 * @link http://php.net/manual/en/memcached.replacebykey.php
 * @param string $server_key [optional] <p> TODO DESCRIPTION </p>
 * @param string $key [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $value [optional] <p> TODO DESCRIPTION </p>
 * @param int $expiration [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。
 * キーが存在しない場合、
 * Memcached::getResultCode は
 * Memcached::RES_NOTSTORED を返します。TRUEFALSEMemcached::getResultCodeMemcached::RES_NOTSTORED
 */
function Memcached.replaceByKey($server_key, $key, $value, $expiration) {}