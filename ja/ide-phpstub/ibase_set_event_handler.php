/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.ibase-set-event-handler.php
 * @param callable $event_handler [optional] <p> TODO DESCRIPTION </p>
 * @param string $event_name1 [optional] <p> TODO DESCRIPTION </p>
 * @param string $event_name2 [optional] <p> TODO DESCRIPTION </p>
 * @param string $... [optional] <p> TODO DESCRIPTION </p>
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @return resource 返される値はイベントのリソースです。このリソースは、
 * ibase_free_event_handler
 * でイベントハンドラを開放する際に使用可能です。ibase_free_event_handler
 */
function ibase_set_event_handler($event_handler, $event_name1, $event_name2, $..., $connection) {}