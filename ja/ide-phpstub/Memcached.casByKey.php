/**
 * (PECL memcached >= 0.1.0)<br/>
 * @link http://php.net/manual/en/memcached.casbykey.php
 * @param float $cas_token [optional] <p> TODO DESCRIPTION </p>
 * @param string $server_key [optional] <p> TODO DESCRIPTION </p>
 * @param string $key [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $value [optional] <p> TODO DESCRIPTION </p>
 * @param int $expiration [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。
 * 格納しようとしているアイテムが最後の取得以降に更新されている場合、
 * Memcached::getResultCode は
 * Memcached::RES_DATA_EXISTS を返します。TRUEFALSEMemcached::getResultCodeMemcached::RES_DATA_EXISTS
 */
function Memcached.casByKey($cas_token, $server_key, $key, $value, $expiration) {}