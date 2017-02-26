/**
 * (PHP >= 5.2.0)<br/>
 * @link http://php.net/manual/en/function.snmp2-walk.php
 * @param string $host [optional] <p> TODO DESCRIPTION </p>
 * @param string $community [optional] <p> TODO DESCRIPTION </p>
 * @param string $object_id [optional] <p> TODO DESCRIPTION </p>
 * @param string $timeout [optional] <p> TODO DESCRIPTION </p>
 * @param string $retries [optional] <p> TODO DESCRIPTION </p>
 * @return array object_id をルートとするすべての
 * SNMP オブジェクトの値の配列、あるいはエラー時に
 * FALSE を返します。object_idSNMPFALSE
 */
function snmp2_walk($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}