/**
 * (PECL memcached >= 0.1.0)<br/>
 * @link http://php.net/manual/en/memcached.getdelayed.php
 * @param array $keys [optional] <p> TODO DESCRIPTION </p>
 * @param bool $with_cas [optional] <p> TODO DESCRIPTION </p>
 * @param callable $value_cb [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。
 * 必要に応じて Memcached::getResultCode を使用しましょう。TRUEFALSEMemcached::getResultCode
 */
function Memcached.getDelayed($keys, $with_cas, $value_cb) {}