/**
 * (PHP 4 >= 4.0.4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.openssl-verify.php
 * @param string $data [optional] <p> TODO DESCRIPTION </p>
 * @param string $signature [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $pub_key_id [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $signature_alg [optional] <p> TODO DESCRIPTION </p>
 * @return int 署名 (signature) が正しい場合に 1、正しくない場合に 0、
 * エラーの場合に -1 を返します。
 */
function openssl_verify($data, $signature, $pub_key_id, $signature_alg = OPENSSL_ALGO_SHA1) {}