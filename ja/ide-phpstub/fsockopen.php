/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.fsockopen.php
 * @param string $hostname [optional] <p> TODO DESCRIPTION </p>
 * @param int $port [optional] <p> TODO DESCRIPTION </p>
 * @param int $errno [optional] <p> TODO DESCRIPTION </p>
 * @param string $errstr [optional] <p> TODO DESCRIPTION </p>
 * @param float $timeout [optional] <p> TODO DESCRIPTION </p>
 * @return resource fsockopenは、ファイルポインタを返します。
 * このファイルポインタは、
 * (fgets, fgetss,
 * fputs, fclose,
 * feof のような)
 * 他のファイル関数で使用可能です。
 * 失敗した場合は FALSE を返します。fsockopenfgetsfgetssfputsfclosefeofFALSE
 */
function fsockopen($hostname, $port = -1, $errno, $errstr, $timeout = ini_get("default_socket_timeout")) {}