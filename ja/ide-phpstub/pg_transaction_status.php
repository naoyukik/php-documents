/**
 * (PHP 5 >= 5.1.0, PHP 7)<br/>
 * @link http://php.net/manual/en/function.pg-transaction-status.php
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @return int PGSQL_TRANSACTION_IDLE（アイドル状態）、
 * PGSQL_TRANSACTION_ACTIVE（コマンドの実行中）、
 * PGSQL_TRANSACTION_INTRANS（正常なトランザクション内でアイドル状態）、
 * あるいは PGSQL_TRANSACTION_INERROR（失敗したトランザクション内でアイドル状態）
 * のいずれかを返します。
 * 接続が異常な場合は PGSQL_TRANSACTION_UNKNOWN を返します。
 * PGSQL_TRANSACTION_ACTIVE が返されるのは、クエリを
 * サーバーに送信した後まだそれが完了していない場合のみです。PGSQL_TRANSACTION_IDLEPGSQL_TRANSACTION_ACTIVEPGSQL_TRANSACTION_INTRANSPGSQL_TRANSACTION_INERRORPGSQL_TRANSACTION_UNKNOWNPGSQL_TRANSACTION_ACTIVE
 */
function pg_transaction_status($connection) {}