/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.snmp3-walk.php
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
 * @return array object_id をルートとするすべての
 * SNMP オブジェクトの値の配列、あるいはエラー時に
 * FALSE を返します。object_idSNMPFALSE
 */
function snmp3_walk($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = 1000000, $retries = 5) {}