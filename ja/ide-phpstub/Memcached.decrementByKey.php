/**
 * (PECL memcached >= 2.0.0)<br/>
 * @link http://php.net/manual/en/memcached.decrementbykey.php
 * @param string $server_key [optional] <p> TODO DESCRIPTION </p>
 * @param string $key [optional] <p> TODO DESCRIPTION </p>
 * @param int $offset [optional] <p> TODO DESCRIPTION </p>
 * @param int $initial_value [optional] <p> TODO DESCRIPTION </p>
 * @param int $expiry [optional] <p> TODO DESCRIPTION </p>
 * @return int 成功した場合にアイテムの新しい値、失敗した場合に FALSE を返します。FALSE
 */
function Memcached.decrementByKey($server_key, $key, $offset = 1, $initial_value, $expiry) {}