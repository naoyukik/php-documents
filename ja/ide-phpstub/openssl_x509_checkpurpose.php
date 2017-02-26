/**
 * (PHP 4 >= 4.0.6, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.openssl-x509-checkpurpose.php
 * @param mixed $x509cert [optional] <p> TODO DESCRIPTION </p>
 * @param int $purpose [optional] <p> TODO DESCRIPTION </p>
 * @param array $cainfo [optional] <p> TODO DESCRIPTION </p>
 * @param string $untrustedfile [optional] <p> TODO DESCRIPTION </p>
 * @return int 証明書が意図した目的に使用可能である場合に TRUE、使用できない場合に
 * FALSE 、エラーの場合に -1 を返します。TRUEFALSE
 */
function openssl_x509_checkpurpose($x509cert, $purpose, $cainfo = array(), $untrustedfile) {}