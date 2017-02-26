/**
 * (PECL CUBRID >= 8.3.1)<br/>
 * @link http://php.net/manual/en/function.cubrid-query.php
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param resource $conn_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return resource For SELECT, SHOW, DESCRIBE, EXPLAIN and other statements returning resultset,
 * cubrid_query returns a resource on success, or FALSE on error.cubrid_queryresourceFALSEFor other type of SQL statements, INSERT, UPDATE, DELETE, DROP, etc,
 * cubrid_query returns TRUE on success or FALSE on error.cubrid_queryTRUEFALSEThe returned result resource should be passed to cubrid_fetch_array, and other
 * functions for dealing with result tables, to access the returned data.cubrid_fetch_arrayUse cubrid_num_rows to find out how many rows were returned for a SELECT statement or
 * cubrid_affected_rows to find out how many rows were affected by a DELETE, INSERT, REPLACE, or UPDATE statement.cubrid_num_rowscubrid_affected_rowscubrid_query will also fail and return FALSE
 * if the user does not have permission to access the table(s) referenced by the query.cubrid_queryFALSE
 */
function cubrid_query($query, $conn_identifier) {}