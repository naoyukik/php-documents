/**
 * (PECL ibm_db2 >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.db2-pconnect.php
 * @param string $database [optional] <p> TODO DESCRIPTION </p>
 * @param string $username [optional] <p> TODO DESCRIPTION </p>
 * @param string $password [optional] <p> TODO DESCRIPTION </p>
 * @param array $options [optional] <p> TODO DESCRIPTION </p>
 * @return resource 接続に成功した場合は接続ハンドルリソースを返します。
 * パラメータ database、username
 * および password に完全に一致する接続が
 * 既に存在した場合、db2_pconnect
 * はそれを再利用します。接続に失敗した場合は
 * db2_pconnect は FALSE を返します。databaseusernamepassworddb2_pconnectdb2_pconnectFALSE
 */
function db2_pconnect($database, $username, $password, $options) {}