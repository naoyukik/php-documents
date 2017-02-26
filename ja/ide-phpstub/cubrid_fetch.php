/**
 * (PECL CUBRID >= 8.3.0)<br/>
 * @link http://php.net/manual/en/function.cubrid-fetch.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $type [optional] <p> TODO DESCRIPTION </p>
 * @return mixed Result array or object, when process is successful.FALSE, when there are no more rows; NULL, when process is unsuccessful.FALSEThe result can be received either as an array or as an object, and you can decide which data type to use by setting the type argument. The type variable can be set to one of the following values:typetypeCUBRID_NUM : Numerical array (0-based)
 * CUBRID_ASSOC : Associative array
 * CUBRID_BOTH : Numerical & Associative array (default)
 * CUBRID_OBJECT : object that has the attribute name as the column name of query resultCUBRID_NUM : Numerical array (0-based)CUBRID_ASSOC : Associative arrayCUBRID_BOTH : Numerical & Associative array (default)CUBRID_OBJECT : object that has the attribute name as the column name of query resultWhen type argument is omitted, the result will be received using CUBRID_BOTH option as default. When you want to receive query result in object data type, the column name of the result must obey the naming rules for identifiers in PHP.  For example, column name such as "count(*)" cannot be received in object type.type
 */
function cubrid_fetch($result, $type = CUBRID_BOTH) {}