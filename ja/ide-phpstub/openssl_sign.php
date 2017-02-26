/**
 * (PHP 4 >= 4.0.4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.openssl-sign.php
 * @param string $data [optional] <p> TODO DESCRIPTION </p>
 * @param string $signature [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $priv_key_id [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $signature_alg [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。TRUEFALSE
 */
function openssl_sign($data, $signature, $priv_key_id, $signature_alg = OPENSSL_ALGO_SHA1) {}