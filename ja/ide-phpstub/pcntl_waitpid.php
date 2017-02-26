/**
 * (PHP 4 >= 4.1.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.pcntl-waitpid.php
 * @param int $pid [optional] <p> TODO DESCRIPTION </p>
 * @param int $status [optional] <p> TODO DESCRIPTION </p>
 * @param int $options [optional] <p> TODO DESCRIPTION </p>
 * @return int pcntl_waitpid は、終了した子プロセスの
 * プロセス ID を返します。エラーの場合は -1、WNOHANG が使用され、
 * 子プロセスが利用できない場合に 0 を返します。pcntl_waitpidWNOHANG
 */
function pcntl_waitpid($pid, $status, $options) {}