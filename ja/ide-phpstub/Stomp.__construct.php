/**
 * (PECL stomp >= 0.1.0)<br/>
 * @link http://php.net/manual/en/stomp.construct.php
 * @param string $broker [optional] <p> TODO DESCRIPTION </p>
 * @param string $username [optional] <p> TODO DESCRIPTION </p>
 * @param string $password [optional] <p> TODO DESCRIPTION </p>
 * @param array $headers [optional] <p> TODO DESCRIPTION </p>
 * @return resource トランザクションヘッダを指定し、そのメッセージがトランザクションの一部であることを示します。トランザクションヘッダを指定し、そのメッセージがトランザクションの一部であることを示します。
 */
function Stomp.__construct($broker = ini_get("stomp.default_broker_uri"), $username, $password, $headers) {}