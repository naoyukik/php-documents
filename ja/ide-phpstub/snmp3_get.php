/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.snmp3-get.php
 * @param string $host [optional] <p> TODO DESCRIPTION </p>
 * @param string $sec_name [optional] <p> TODO DESCRIPTION </p>
 * @param string $sec_level [optional] <p> TODO DESCRIPTION </p>
 * @param string $auth_protocol [optional] <p> TODO DESCRIPTION </p>
 * @param string $auth_passphrase [optional] <p> TODO DESCRIPTION </p>
 * @param string $priv_protocol [optional] <p> TODO DESCRIPTION </p>
 * @param string $priv_passphrase [optional] <p> TODO DESCRIPTION </p>
 * @param string $object_id [optional] <p> TODO DESCRIPTION </p>
 * @param string $timeout [optional] <p> TODO DESCRIPTION </p>
 * @param string $retries [optional] <p> TODO DESCRIPTION </p>
 * @return string 成功した場合に SNMP オブジェクトの値、エラー時に FALSE を返します。SNMPFALSE
 */
function snmp3_get($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = 1000000, $retries = 5) {}