/**
 * (PHP 4 >= 4.0.6, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.openssl-pkcs7-sign.php
 * @param string $infilename [optional] <p> TODO DESCRIPTION </p>
 * @param string $outfilename [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $signcert [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $privkey [optional] <p> TODO DESCRIPTION </p>
 * @param array $headers [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param string $extracerts [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。TRUEFALSE
 */
function openssl_pkcs7_sign($infilename, $outfilename, $signcert, $privkey, $headers, $flags = PKCS7_DETACHED, $extracerts) {}