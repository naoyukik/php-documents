/**
 * (PHP 4, PHP 5)<br/>
 * @link http://php.net/manual/en/function.mysql-connect.php
 * @param string $server [optional] <p> TODO DESCRIPTION </p>
 * @param string $username [optional] <p> TODO DESCRIPTION </p>
 * @param string $password [optional] <p> TODO DESCRIPTION </p>
 * @param bool $new_link [optional] <p> TODO DESCRIPTION </p>
 * @param int $client_flags [optional] <p> TODO DESCRIPTION </p>
 * @return resource 成功した場合に MySQL リンク ID を、失敗した場合に FALSE を返します。FALSE
 */
function mysql_connect($server = ini_get("mysql.default_host"), $username = ini_get("mysql.default_user"), $password = ini_get("mysql.default_password"), $new_link = false, $client_flags) {}