/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.proc-open.php
 * @param string $cmd [optional] <p> TODO DESCRIPTION </p>
 * @param array $descriptorspec [optional] <p> TODO DESCRIPTION </p>
 * @param array $pipes [optional] <p> TODO DESCRIPTION </p>
 * @param string $cwd [optional] <p> TODO DESCRIPTION </p>
 * @param array $env [optional] <p> TODO DESCRIPTION </p>
 * @param array $other_options [optional] <p> TODO DESCRIPTION </p>
 * @return resource プロセスを表すリソースを返します。このリソースは、使用し終えた際に
 * proc_close を使用して開放する必要があります。
 * 失敗した場合は FALSE を返します。proc_closeFALSE
 */
function proc_open($cmd, $descriptorspec, $pipes, $cwd, $env, $other_options) {}