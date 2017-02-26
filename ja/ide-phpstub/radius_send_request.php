/**
 * (PECL radius >= 1.1.0)<br/>
 * @link http://php.net/manual/en/function.radius-send-request.php
 * @param resource $radius_handle [optional] <p> TODO DESCRIPTION </p>
 * @return int 有効な応答を受信したら、radius_send_request
 * は応答の型を示す Radius コードを返します。一般的なコードは
 * RADIUS_ACCESS_ACCEPT、
 * RADIUS_ACCESS_REJECT あるいは
 * RADIUS_ACCESS_CHALLENGE です。
 * 有効な応答を受信できなかった場合は、
 * radius_send_request は FALSE を返します。radius_send_requestRADIUS_ACCESS_ACCEPTRADIUS_ACCESS_REJECTRADIUS_ACCESS_CHALLENGEradius_send_requestFALSE
 */
function radius_send_request($radius_handle) {}