/**
 * (PECL CUBRID >=8.3.0)<br/>
 * @link http://php.net/manual/en/function.cubrid-fetch-array.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $type [optional] <p> TODO DESCRIPTION </p>
 * @return array Returns an array of strings that corresponds to the fetched row, when process is successful.FALSE, when there are no more rows; NULL, when process is unsuccessful.FALSEThe type of returned array depends on how type is defined. By using CUBRID_BOTH (default), you'll get an array with both associative and number indices, and you can decide which data type to use by setting the type argument. The type variable can be set to one of the following values:typetypeCUBRID_NUM : Numerical array (0-based)
 * CUBRID_ASSOC : Associative array
 * CUBRID_BOTH : Numerical & Associative array (default)CUBRID_NUM : Numerical array (0-based)CUBRID_ASSOC : Associative arrayCUBRID_BOTH : Numerical & Associative array (default)
 */
function cubrid_fetch_array($result, $type = CUBRID_BOTH) {}