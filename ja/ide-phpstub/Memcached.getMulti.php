/**
 * (PECL memcached >= 0.1.0)<br/>
 * @link http://php.net/manual/en/memcached.getmulti.php
 * @param array $keys [optional] <p> TODO DESCRIPTION </p>
 * @param array $cas_tokens [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 見つかったアイテムの配列、失敗した場合に FALSE を返します。
 * 必要に応じて Memcached::getResultCode を使用しましょう。FALSEMemcached::getResultCode
 */
function Memcached.getMulti($keys, $cas_tokens, $flags) {}