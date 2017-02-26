/**
 * (PECL mysqlnd_qc >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.mysqlnd-qc-set-storage-handler.php
 * @param string $handler [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。TRUEFALSEIf changing the storage handler fails a catchable fatal error will
 * be thrown. The query cache cannot operate if the previous storage
 * handler has been shutdown but no new storage handler has been installed.
 */
function mysqlnd_qc_set_storage_handler($handler) {}