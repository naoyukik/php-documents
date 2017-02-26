/**
 * (PECL memcached >= 0.1.0)<br/>
 * @link http://php.net/manual/en/memcached.add.php
 * @param string $key [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $value [optional] <p> TODO DESCRIPTION </p>
 * @param int $expiration [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。
 * キーが既に存在する場合は、Memcached::getResultCode は
 * Memcached::RES_NOTSTORED を返します。TRUEFALSEMemcached::getResultCodeMemcached::RES_NOTSTORED
 */
function Memcached.add($key, $value, $expiration) {}