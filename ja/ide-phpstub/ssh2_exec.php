/**
 * (PECL ssh2 >= 0.9.0)<br/>
 * @link http://php.net/manual/en/function.ssh2-exec.php
 * @param resource $session [optional] <p> TODO DESCRIPTION </p>
 * @param string $command [optional] <p> TODO DESCRIPTION </p>
 * @param string $pty [optional] <p> TODO DESCRIPTION </p>
 * @param array $env [optional] <p> TODO DESCRIPTION </p>
 * @param int $width [optional] <p> TODO DESCRIPTION </p>
 * @param int $height [optional] <p> TODO DESCRIPTION </p>
 * @param int $width_height_type [optional] <p> TODO DESCRIPTION </p>
 * @return resource 成功時にストリームを返し、失敗した場合に FALSE を返します。FALSE
 */
function ssh2_exec($session, $command, $pty, $env, $width = 80, $height = 25, $width_height_type = SSH2_TERM_UNIT_CHARS) {}