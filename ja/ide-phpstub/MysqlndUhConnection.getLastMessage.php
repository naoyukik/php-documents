/**
 * (PECL mysqlnd-uh >= 1.0.0-alpha)<br/>
 * @link http://php.net/manual/en/mysqlnduhconnection.getlastmessage.php
 * @param mysqlnd_connection $connection [optional] <p> TODO DESCRIPTION </p>
 * @return void Last message. Trying to return a string longer than 511 bytes
 * will cause an error of the type E_WARNING and
 * result in the string being truncated.E_WARNING
 */
function MysqlndUhConnection.getLastMessage($connection) {}