/**
 * (PECL kadm5 >= 0.2.3)<br/>
 * @link http://php.net/manual/en/function.kadm5-get-principal.php
 * @param resource $handle [optional] <p> TODO DESCRIPTION </p>
 * @param string $principal [optional] <p> TODO DESCRIPTION </p>
 * @return array 成功した場合は、以下のキーを含む連想配列を返します。
 * KADM5_PRINCIPAL、KADM5_PRINC_EXPIRE_TIME、
 * KADM5_PW_EXPIRATION、KADM5_ATTRIBUTES、KADM5_MAX_LIFE、KADM5_MOD_NAME、
 * KADM5_MOD_TIME、KADM5_KVNO、KADM5_POLICY、KADM5_MAX_RLIFE、
 * KADM5_LAST_SUCCESS、KADM5_LAST_FAILED、KADM5_FAIL_AUTH_COUNT
 * 失敗した場合に FALSE を返します。FALSE
 */
function kadm5_get_principal($handle, $principal) {}