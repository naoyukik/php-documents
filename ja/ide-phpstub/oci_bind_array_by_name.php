/**
 * (PHP 5 >= 5.1.2, PHP 7, PECL OCI8 >= 1.2.0)<br/>
 * @link http://php.net/manual/en/function.oci-bind-array-by-name.php
 * @param resource $statement [optional] <p> TODO DESCRIPTION </p>
 * @param string $name [optional] <p> TODO DESCRIPTION </p>
 * @param array $var_array [optional] <p> TODO DESCRIPTION </p>
 * @param int $max_table_length [optional] <p> TODO DESCRIPTION </p>
 * @param int $max_item_length [optional] <p> TODO DESCRIPTION </p>
 * @param int $type [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。TRUEFALSE
 */
function oci_bind_array_by_name($statement, $name, $var_array, $max_table_length, $max_item_length = -1, $type = SQLT_AFC) {}