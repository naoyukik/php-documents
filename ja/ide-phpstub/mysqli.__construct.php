/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/mysqli.construct.php
 * @param string $host [optional] <p> TODO DESCRIPTION </p>
 * @param string $username [optional] <p> TODO DESCRIPTION </p>
 * @param string $passwd [optional] <p> TODO DESCRIPTION </p>
 * @param string $dbname [optional] <p> TODO DESCRIPTION </p>
 * @param int $port [optional] <p> TODO DESCRIPTION </p>
 * @param string $socket [optional] <p> TODO DESCRIPTION </p>
 * @return mysqli MySQL サーバーへの接続を表すオブジェクトを返します。
 */
function mysqli.__construct($host = ini_get("mysqli.default_host"), $username = ini_get("mysqli.default_user"), $passwd = ini_get("mysqli.default_pw"), $dbname = "", $port = ini_get("mysqli.default_port"), $socket = ini_get("mysqli.default_socket")) {}