/**
 * (PHP >= 5.2.0)<br/>
 * @link http://php.net/manual/en/function.snmp2-getnext.php
 * @param string $host [optional] <p> TODO DESCRIPTION </p>
 * @param string $community [optional] <p> TODO DESCRIPTION </p>
 * @param string $object_id [optional] <p> TODO DESCRIPTION </p>
 * @param string $timeout [optional] <p> TODO DESCRIPTION </p>
 * @param string $retries [optional] <p> TODO DESCRIPTION </p>
 * @return string 成功した場合に SNMP オブジェクトの値、エラー時に FALSE を返します。
 * エラー時には E_WARNING が発生します。SNMPFALSE
 */
function snmp2_getnext($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}