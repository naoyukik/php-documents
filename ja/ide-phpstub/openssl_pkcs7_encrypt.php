/**
 * (PHP 4 >= 4.0.6, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.openssl-pkcs7-encrypt.php
 * @param string $infile [optional] <p> TODO DESCRIPTION </p>
 * @param string $outfile [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $recipcerts [optional] <p> TODO DESCRIPTION </p>
 * @param array $headers [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param int $cipherid [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。TRUEFALSE
 */
function openssl_pkcs7_encrypt($infile, $outfile, $recipcerts, $headers, $flags, $cipherid = OPENSSL_CIPHER_RC2_40) {}