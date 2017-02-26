/**
 * (PECL memcache >= 0.2.0)<br/>
 * @link http://php.net/manual/en/memcache.add.php
 * @param string $key [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $var [optional] <p> TODO DESCRIPTION </p>
 * @param int $flag [optional] <p> TODO DESCRIPTION </p>
 * @param int $expire [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。
 * もし同名のキーが既に存在する場合は FALSE を返します。
 * それ以外は、Memcache::add
 * の振る舞いは Memcache::set と同じです。TRUEFALSEFALSEMemcache::addMemcache::set
 */
function Memcache.add($key, $var, $flag, $expire) {}