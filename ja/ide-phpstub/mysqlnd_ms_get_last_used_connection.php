/**
 * (PECL mysqlnd_ms >= 1.1.0)<br/>
 * @link http://php.net/manual/en/function.mysqlnd-ms-get-last-used-connection.php
 * @param mixed $connection [optional] <p> TODO DESCRIPTION </p>
 * @return array FALSE on error. Otherwise, an
 * array which describes the connection used to
 * execute the last statement on.FALSEArray which describes the connection.Property
 * Description
 * Version
 * scheme
 * Connection scheme. Either tcp://host:port
 * or unix://host:socket. If you want to
 * distinguish connections from each other use a combination
 * of scheme and thread_id as a unique
 * key. Neither scheme nor thread_id
 * alone are sufficient to distinguish two connections from each other.
 * Two servers may assign the same thread_id to two
 * different connections. Thus, connections in the pool may have the same
 * thread_id. Also, do not rely on uniqueness of
 * scheme in a pool. Your QA engineers may use the
 * same MySQL server instance for two distinct logical roles and add it
 * multiple times to the pool. This hack is used, for example,
 * in the test suite.
 * Since 1.1.0.
 * host
 * Database server host used with the connection.
 * The host is only set with TCP/IP connections.
 * It is empty with Unix domain or Windows named pipe connections,
 * Since 1.1.0.
 * host_info
 * A character string representing the server hostname and the connection type.
 * Since 1.1.2.
 * port
 * Database server port used with the connection.
 * Since 1.1.0.
 * socket_or_pipe
 * Unix domain socket or Windows named pipe used with the connection.
 * The value is empty for TCP/IP connections.
 * Since 1.1.2.
 * thread_id
 * Connection thread id.
 * Since 1.1.0.
 * last_message
 * Info message obtained from the
 * MySQL C API function mysql_info(). Please, see
 * mysqli_info for
 * a description.
 * Since 1.1.0.
 * errno
 * Error code.
 * Since 1.1.0.
 * error
 * Error message.
 * Since 1.1.0.
 * sqlstate
 * Error SQLstate code.
 * Since 1.1.0.Property
 * Description
 * Version
 * scheme
 * Connection scheme. Either tcp://host:port
 * or unix://host:socket. If you want to
 * distinguish connections from each other use a combination
 * of scheme and thread_id as a unique
 * key. Neither scheme nor thread_id
 * alone are sufficient to distinguish two connections from each other.
 * Two servers may assign the same thread_id to two
 * different connections. Thus, connections in the pool may have the same
 * thread_id. Also, do not rely on uniqueness of
 * scheme in a pool. Your QA engineers may use the
 * same MySQL server instance for two distinct logical roles and add it
 * multiple times to the pool. This hack is used, for example,
 * in the test suite.
 * Since 1.1.0.
 * host
 * Database server host used with the connection.
 * The host is only set with TCP/IP connections.
 * It is empty with Unix domain or Windows named pipe connections,
 * Since 1.1.0.
 * host_info
 * A character string representing the server hostname and the connection type.
 * Since 1.1.2.
 * port
 * Database server port used with the connection.
 * Since 1.1.0.
 * socket_or_pipe
 * Unix domain socket or Windows named pipe used with the connection.
 * The value is empty for TCP/IP connections.
 * Since 1.1.2.
 * thread_id
 * Connection thread id.
 * Since 1.1.0.
 * last_message
 * Info message obtained from the
 * MySQL C API function mysql_info(). Please, see
 * mysqli_info for
 * a description.
 * Since 1.1.0.
 * errno
 * Error code.
 * Since 1.1.0.
 * error
 * Error message.
 * Since 1.1.0.
 * sqlstate
 * Error SQLstate code.
 * Since 1.1.0.Property
 * Description
 * VersionProperty
 * Description
 * VersionPropertyDescriptionVersionscheme
 * Connection scheme. Either tcp://host:port
 * or unix://host:socket. If you want to
 * distinguish connections from each other use a combination
 * of scheme and thread_id as a unique
 * key. Neither scheme nor thread_id
 * alone are sufficient to distinguish two connections from each other.
 * Two servers may assign the same thread_id to two
 * different connections. Thus, connections in the pool may have the same
 * thread_id. Also, do not rely on uniqueness of
 * scheme in a pool. Your QA engineers may use the
 * same MySQL server instance for two distinct logical roles and add it
 * multiple times to the pool. This hack is used, for example,
 * in the test suite.
 * Since 1.1.0.
 * host
 * Database server host used with the connection.
 * The host is only set with TCP/IP connections.
 * It is empty with Unix domain or Windows named pipe connections,
 * Since 1.1.0.
 * host_info
 * A character string representing the server hostname and the connection type.
 * Since 1.1.2.
 * port
 * Database server port used with the connection.
 * Since 1.1.0.
 * socket_or_pipe
 * Unix domain socket or Windows named pipe used with the connection.
 * The value is empty for TCP/IP connections.
 * Since 1.1.2.
 * thread_id
 * Connection thread id.
 * Since 1.1.0.
 * last_message
 * Info message obtained from the
 * MySQL C API function mysql_info(). Please, see
 * mysqli_info for
 * a description.
 * Since 1.1.0.
 * errno
 * Error code.
 * Since 1.1.0.
 * error
 * Error message.
 * Since 1.1.0.
 * sqlstate
 * Error SQLstate code.
 * Since 1.1.0.scheme
 * Connection scheme. Either tcp://host:port
 * or unix://host:socket. If you want to
 * distinguish connections from each other use a combination
 * of scheme and thread_id as a unique
 * key. Neither scheme nor thread_id
 * alone are sufficient to distinguish two connections from each other.
 * Two servers may assign the same thread_id to two
 * different connections. Thus, connections in the pool may have the same
 * thread_id. Also, do not rely on uniqueness of
 * scheme in a pool. Your QA engineers may use the
 * same MySQL server instance for two distinct logical roles and add it
 * multiple times to the pool. This hack is used, for example,
 * in the test suite.
 * Since 1.1.0.schemeschemeConnection scheme. Either tcp://host:port
 * or unix://host:socket. If you want to
 * distinguish connections from each other use a combination
 * of scheme and thread_id as a unique
 * key. Neither scheme nor thread_id
 * alone are sufficient to distinguish two connections from each other.
 * Two servers may assign the same thread_id to two
 * different connections. Thus, connections in the pool may have the same
 * thread_id. Also, do not rely on uniqueness of
 * scheme in a pool. Your QA engineers may use the
 * same MySQL server instance for two distinct logical roles and add it
 * multiple times to the pool. This hack is used, for example,
 * in the test suite.tcp://host:portunix://host:socketschemethread_idschemethread_idthread_idthread_idschemeSince 1.1.0.host
 * Database server host used with the connection.
 * The host is only set with TCP/IP connections.
 * It is empty with Unix domain or Windows named pipe connections,
 * Since 1.1.0.hosthostDatabase server host used with the connection.
 * The host is only set with TCP/IP connections.
 * It is empty with Unix domain or Windows named pipe connections,Since 1.1.0.host_info
 * A character string representing the server hostname and the connection type.
 * Since 1.1.2.host_infohost_infoA character string representing the server hostname and the connection type.Since 1.1.2.port
 * Database server port used with the connection.
 * Since 1.1.0.portportDatabase server port used with the connection.Since 1.1.0.socket_or_pipe
 * Unix domain socket or Windows named pipe used with the connection.
 * The value is empty for TCP/IP connections.
 * Since 1.1.2.socket_or_pipesocket_or_pipeUnix domain socket or Windows named pipe used with the connection.
 * The value is empty for TCP/IP connections.Since 1.1.2.thread_id
 * Connection thread id.
 * Since 1.1.0.thread_idthread_idConnection thread id.Since 1.1.0.last_message
 * Info message obtained from the
 * MySQL C API function mysql_info(). Please, see
 * mysqli_info for
 * a description.
 * Since 1.1.0.last_messagelast_messageInfo message obtained from the
 * MySQL C API function mysql_info(). Please, see
 * mysqli_info for
 * a description.mysqli_infoSince 1.1.0.errno
 * Error code.
 * Since 1.1.0.errnoerrnoError code.Since 1.1.0.error
 * Error message.
 * Since 1.1.0.errorerrorError message.Since 1.1.0.sqlstate
 * Error SQLstate code.
 * Since 1.1.0.sqlstatesqlstateError SQLstate code.Since 1.1.0.
 */
function mysqlnd_ms_get_last_used_connection($connection) {}