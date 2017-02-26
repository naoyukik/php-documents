/**
 * @link http://php.net/manual/en/function.mysqlnd-ms-dump-servers.php
 * @param mixed $connection [optional] <p> TODO DESCRIPTION </p>
 * @return array FALSE on error. Otherwise, returns an array with two entries
 * masters and slaves each of which contains
 * an array listing all corresponding servers.FALSEmastersslavesThe function can be used to check and debug the list of servers currently
 * used by the plugin. It is mostly useful when the list of servers changes at
 * runtime, for example, when using MySQL Fabric.masters and slaves server entriesmastersslavesKey
 * Description
 * Version
 * name_from_config
 * Server entry name from config, if appliciable. NULL if no
 * configuration name is available.
 * Since 1.6.0.
 * hostname
 * Host name of the server.
 * Since 1.6.0.
 * user
 * Database user used to authenticate against the server.
 * Since 1.6.0.
 * port
 * TCP/IP port of the server.
 * Since 1.6.0.
 * socket
 * Unix domain socket of the server.
 * Since 1.6.0.Key
 * Description
 * Version
 * name_from_config
 * Server entry name from config, if appliciable. NULL if no
 * configuration name is available.
 * Since 1.6.0.
 * hostname
 * Host name of the server.
 * Since 1.6.0.
 * user
 * Database user used to authenticate against the server.
 * Since 1.6.0.
 * port
 * TCP/IP port of the server.
 * Since 1.6.0.
 * socket
 * Unix domain socket of the server.
 * Since 1.6.0.Key
 * Description
 * VersionKey
 * Description
 * VersionKeyDescriptionVersionname_from_config
 * Server entry name from config, if appliciable. NULL if no
 * configuration name is available.
 * Since 1.6.0.
 * hostname
 * Host name of the server.
 * Since 1.6.0.
 * user
 * Database user used to authenticate against the server.
 * Since 1.6.0.
 * port
 * TCP/IP port of the server.
 * Since 1.6.0.
 * socket
 * Unix domain socket of the server.
 * Since 1.6.0.name_from_config
 * Server entry name from config, if appliciable. NULL if no
 * configuration name is available.
 * Since 1.6.0.name_from_configname_from_configServer entry name from config, if appliciable. NULL if no
 * configuration name is available.Server entry name from config, if appliciable. NULL if no
 * configuration name is available.Since 1.6.0.hostname
 * Host name of the server.
 * Since 1.6.0.hostnamehostnameHost name of the server.Host name of the server.Since 1.6.0.user
 * Database user used to authenticate against the server.
 * Since 1.6.0.useruserDatabase user used to authenticate against the server.Database user used to authenticate against the server.Since 1.6.0.port
 * TCP/IP port of the server.
 * Since 1.6.0.portportTCP/IP port of the server.TCP/IP port of the server.Since 1.6.0.socket
 * Unix domain socket of the server.
 * Since 1.6.0.socketsocketUnix domain socket of the server.Unix domain socket of the server.Since 1.6.0.
 */
function mysqlnd_ms_dump_servers($connection) {}