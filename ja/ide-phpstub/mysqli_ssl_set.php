/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/mysqli.ssl-set.php
 * @param string $key [optional] <p> TODO DESCRIPTION </p>
 * @param string $cert [optional] <p> TODO DESCRIPTION </p>
 * @param string $ca [optional] <p> TODO DESCRIPTION </p>
 * @param string $capath [optional] <p> TODO DESCRIPTION </p>
 * @param string $cipher [optional] <p> TODO DESCRIPTION </p>
 * @param mysqli $link [optional] <p> TODO DESCRIPTION </p>
 * @return bool この関数は、常に TRUE を返します。もし SSL が正しく設定できていない場合、
 * mysqli_real_connect は接続時にエラーを返します。TRUEmysqli_real_connect
 */
function mysqli_ssl_set($key, $cert, $ca, $capath, $cipher, $link) {}