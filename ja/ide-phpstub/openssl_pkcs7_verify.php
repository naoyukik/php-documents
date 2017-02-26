/**
 * (PHP 4 >= 4.0.6, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.openssl-pkcs7-verify.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param string $outfilename [optional] <p> TODO DESCRIPTION </p>
 * @param array $cainfo [optional] <p> TODO DESCRIPTION </p>
 * @param string $extracerts [optional] <p> TODO DESCRIPTION </p>
 * @param string $content [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 署名が検証された場合は TRUE、正しくない場合
 * (メッセージが改暫されたか署名に用いられた証明書が無効) は FALSE、
 * エラーの場合に -1 を返します。TRUEFALSE
 */
function openssl_pkcs7_verify($filename, $flags, $outfilename, $cainfo, $extracerts, $content) {}