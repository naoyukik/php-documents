/**
 * (PHP 4 >= 4.0.4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.openssl-seal.php
 * @param string $data [optional] <p> TODO DESCRIPTION </p>
 * @param string $sealed_data [optional] <p> TODO DESCRIPTION </p>
 * @param array $env_keys [optional] <p> TODO DESCRIPTION </p>
 * @param array $pub_key_ids [optional] <p> TODO DESCRIPTION </p>
 * @param string $method [optional] <p> TODO DESCRIPTION </p>
 * @return int 成功時にシール(暗号化)されたデータの長さ、エラー時に FALSE
 * を返します。成功時には、暗号化されたデータが
 * sealed_data に、エンベロープキーが
 * env_keys に返されます。FALSEsealed_dataenv_keys
 */
function openssl_seal($data, $sealed_data, $env_keys, $pub_key_ids, $method = "RC4") {}