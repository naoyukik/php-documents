/**
 * (PECL memcache >= 2.0.0)<br/>
 * @link http://php.net/manual/en/memcache.addserver.php
 * @param string $host [optional] <p> TODO DESCRIPTION </p>
 * @param int $port [optional] <p> TODO DESCRIPTION </p>
 * @param bool $persistent [optional] <p> TODO DESCRIPTION </p>
 * @param int $weight [optional] <p> TODO DESCRIPTION </p>
 * @param int $timeout [optional] <p> TODO DESCRIPTION </p>
 * @param int $retry_interval [optional] <p> TODO DESCRIPTION </p>
 * @param bool $status [optional] <p> TODO DESCRIPTION </p>
 * @param callable $failure_callback [optional] <p> TODO DESCRIPTION </p>
 * @param int $timeoutms [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。TRUEFALSE
 */
function Memcache.addServer($host, $port = 11211, $persistent, $weight, $timeout, $retry_interval, $status, $failure_callback, $timeoutms) {}