/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.pcntl-setpriority.php
 * @param int $priority [optional] <p> TODO DESCRIPTION </p>
 * @param int $pid [optional] <p> TODO DESCRIPTION </p>
 * @param int $process_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。TRUEFALSE
 */
function pcntl_setpriority($priority, $pid = getmypid(), $process_identifier = PRIO_PROCESS) {}