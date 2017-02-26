/**
 * (PECL zookeeper >= 0.1.0)<br/>
 * @link http://php.net/manual/en/zookeeper.create.php
 * @param string $path [optional] <p> TODO DESCRIPTION </p>
 * @param string $value [optional] <p> TODO DESCRIPTION </p>
 * @param array $acls [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @return string Returns the path of the new node (this might be different than the supplied path because of the ZOO_SEQUENCE flag) on success, and false on failure.
 */
function Zookeeper.create($path, $value, $acls, $flags = null) {}