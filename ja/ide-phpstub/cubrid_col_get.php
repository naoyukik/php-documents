/**
 * (PECL CUBRID >= 8.3.0)<br/>
 * @link http://php.net/manual/en/function.cubrid-col-get.php
 * @param resource $conn_identifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $oid [optional] <p> TODO DESCRIPTION </p>
 * @param string $attr_name [optional] <p> TODO DESCRIPTION </p>
 * @return array Array (0-based numerical array) containing the elements you requested,
 * when process is successful;FALSE (to distinguish the error from the situation of attribute having
 * empty collection or NULL, in case of error, a warning message is shown; in
 * such case you can check the error by using
 * cubrid_error_code), when process is unsuccessful.FALSEcubrid_error_code
 */
function cubrid_col_get($conn_identifier, $oid, $attr_name) {}