/**
 * (PECL mysqlnd_ms < 1.1.0)<br/>
 * @link http://php.net/manual/en/function.mysqlnd-ms-set-user-pick-server.php
 * @param string $function [optional] <p> TODO DESCRIPTION </p>
 * @return bool Host to run the query on. The host URI is to be taken from the
 * master and slave connection lists passed to the callback function.
 * If callback returns a value neither found in the master nor in the slave
 * connection lists the plugin will fallback to the second pick method configured
 * via the pick[] setting in the plugin configuration file.
 * If not second pick method is given, the plugin falls back to the build-in
 * default pick method for server selection.pick[]
 */
function mysqlnd_ms_set_user_pick_server($function) {}