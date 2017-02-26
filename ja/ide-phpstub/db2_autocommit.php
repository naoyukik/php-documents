/**
 * (PECL ibm_db2 >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.db2-autocommit.php
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @param bool $value [optional] <p> TODO DESCRIPTION </p>
 * @return mixed db2_autocommit に
 * connection パラメータのみを渡した場合、
 * 指定した接続の AUTOCOMMIT の状態を整数値で返します。
 * 0 の場合は無効、1 の場合は有効です。db2_autocommitconnectiondb2_autocommit に
 * connection および
 * autocommit の両方のパラメータを渡した場合、
 * 指定した接続の AUTOCOMMIT を対応する状態に設定します。
 * 成功した場合に TRUE を、失敗した場合に FALSE を返します。db2_autocommitconnectionautocommitTRUEFALSE
 */
function db2_autocommit($connection, $value) {}