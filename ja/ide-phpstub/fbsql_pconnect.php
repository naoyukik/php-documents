/**
 * (PHP 4 >= 4.0.6, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.fbsql-pconnect.php
 * @param string $hostname [optional] <p> TODO DESCRIPTION </p>
 * @param string $username [optional] <p> TODO DESCRIPTION </p>
 * @param string $password [optional] <p> TODO DESCRIPTION </p>
 * @return resource 成功した場合には正の FrontBase 持続的リンク ID、
 * エラー時には FALSE を返します。FALSE
 */
function fbsql_pconnect($hostname = ini_get("fbsql.default_host"), $username = ini_get("fbsql.default_user"), $password = ini_get("fbsql.default_password")) {}