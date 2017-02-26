/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.odbc-autocommit.php
 * @param resource $connection_id [optional] <p> TODO DESCRIPTION </p>
 * @param bool $OnOff [optional] <p> TODO DESCRIPTION </p>
 * @return mixed OnOff パラメータを指定しない場合、
 * この関数は、connection_id に関する
 * 自動コミットの状態を返します。自動コミットがオンの場合に
 * 非ゼロ、オフの場合にゼロ、エラーを生じた場合に FALSE を返します。OnOffconnection_idFALSEOnOff が設定されている場合は、
 * この関数は成功時に TRUE、失敗したときに 
 * FALSE を返します。OnOffTRUEFALSE
 */
function odbc_autocommit($connection_id, $OnOff = false) {}