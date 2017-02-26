/**
 * (PECL zmq >= 0.5.0)<br/>
 * @link http://php.net/manual/en/zmqdevice.construct.php
 * @param ZMQSocket $frontend [optional] <p> TODO DESCRIPTION </p>
 * @param ZMQSocket $backend [optional] <p> TODO DESCRIPTION </p>
 * @param ZMQSocket $listener [optional] <p> TODO DESCRIPTION </p>
 * @return  Call to this method will prepare the device. Usually devices are very long
 * running processes so running this method from interactive script is not recommended. This
 * method throw ZMQDeviceException if the device cannot be started.
 */
function ZMQDevice.__construct($frontend, $backend, $listener) {}