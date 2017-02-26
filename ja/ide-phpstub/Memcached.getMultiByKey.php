/**
 * (PECL memcached >= 0.1.0)<br/>
 * @link http://php.net/manual/en/memcached.getmultibykey.php
 * @param string $server_key [optional] <p> TODO DESCRIPTION </p>
 * @param array $keys [optional] <p> TODO DESCRIPTION </p>
 * @param string $cas_tokens [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @return array 見つかったアイテムの配列、失敗した場合に FALSE を返します。
 * 必要に応じて Memcached::getResultCode を使用しましょう。FALSEMemcached::getResultCode
 */
function Memcached.getMultiByKey($server_key, $keys, $cas_tokens, $flags) {}