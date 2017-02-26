/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.pcntl-wait.php
 * @param int $status [optional] <p> TODO DESCRIPTION </p>
 * @param int $options [optional] <p> TODO DESCRIPTION </p>
 * @return int pcntl_wait は、終了した子プロセスの
 * プロセス ID を返します。エラーの場合は -1、(wait3 が使用可能なシステムで)
 * WNOHANG が使用され、子プロセスが利用できない場合に 0 を返します。pcntl_wait
 */
function pcntl_wait($status, $options) {}