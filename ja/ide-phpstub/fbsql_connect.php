/**
 * (PHP 4 >= 4.0.6, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.fbsql-connect.php
 * @param string $hostname [optional] <p> TODO DESCRIPTION </p>
 * @param string $username [optional] <p> TODO DESCRIPTION </p>
 * @param string $password [optional] <p> TODO DESCRIPTION </p>
 * @return resource 成功時に正の FrontBase リンク ID、エラー時に FALSE を返します。FALSE
 */
function fbsql_connect($hostname = ini_get("fbsql.default_host"), $username = ini_get("fbsql.default_user"), $password = ini_get("fbsql.default_password")) {}