/**
 * (PHP 4 >= 4.0.7, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.fbsql-db-status.php
 * @param string $database_name [optional] <p> TODO DESCRIPTION </p>
 * @param resource $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return int 現在の状態を表す整数値を返します。これは、以下の定数のいずれかです。
 * FALSE - host の exec ハンドラが無効です。このエラーは、
 * link_identifier
 * がポート番号を用いてデータベースへ直接接続する場合に発生します。
 * FBExec はサーバーで利用可能ですが、接続が行われていません。
 * FBSQL_UNKNOWN - 状態は不明です。
 * FBSQL_STOPPED -
 * FBSQL_STOPPED - データベースは実行されていません。
 * データベースを開始するには、fbsql_start_db
 * を使用してください。
 * FBSQL_STARTING - データベースは起動中です。
 * FBSQL_RUNNING -
 * データベースは実行中で、SQL 処理を実行可能です。
 * FBSQL_STOPPING - データベースは停止中です。
 * FBSQL_NOEXEC -
 * FBExec がサーバーで実行されておらず、
 * データベースの状態を取得することはできません。FALSE - host の exec ハンドラが無効です。このエラーは、
 * link_identifier
 * がポート番号を用いてデータベースへ直接接続する場合に発生します。
 * FBExec はサーバーで利用可能ですが、接続が行われていません。
 * FBSQL_UNKNOWN - 状態は不明です。
 * FBSQL_STOPPED -
 * FBSQL_STOPPED - データベースは実行されていません。
 * データベースを開始するには、fbsql_start_db
 * を使用してください。
 * FBSQL_STARTING - データベースは起動中です。
 * FBSQL_RUNNING -
 * データベースは実行中で、SQL 処理を実行可能です。
 * FBSQL_STOPPING - データベースは停止中です。
 * FBSQL_NOEXEC -
 * FBExec がサーバーで実行されておらず、
 * データベースの状態を取得することはできません。FALSE - host の exec ハンドラが無効です。このエラーは、
 * link_identifier
 * がポート番号を用いてデータベースへ直接接続する場合に発生します。
 * FBExec はサーバーで利用可能ですが、接続が行われていません。FALSE - host の exec ハンドラが無効です。このエラーは、
 * link_identifier
 * がポート番号を用いてデータベースへ直接接続する場合に発生します。
 * FBExec はサーバーで利用可能ですが、接続が行われていません。FALSElink_identifierFBSQL_UNKNOWN - 状態は不明です。FBSQL_UNKNOWN - 状態は不明です。FBSQL_UNKNOWNFBSQL_STOPPED -
 * FBSQL_STOPPED - データベースは実行されていません。
 * データベースを開始するには、fbsql_start_db
 * を使用してください。FBSQL_STOPPED -
 * FBSQL_STOPPED - データベースは実行されていません。
 * データベースを開始するには、fbsql_start_db
 * を使用してください。FBSQL_STOPPEDfbsql_start_dbFBSQL_STARTING - データベースは起動中です。FBSQL_STARTING - データベースは起動中です。FBSQL_STARTINGFBSQL_RUNNING -
 * データベースは実行中で、SQL 処理を実行可能です。FBSQL_RUNNING -
 * データベースは実行中で、SQL 処理を実行可能です。FBSQL_RUNNINGFBSQL_STOPPING - データベースは停止中です。FBSQL_STOPPING - データベースは停止中です。FBSQL_STOPPINGFBSQL_NOEXEC -
 * FBExec がサーバーで実行されておらず、
 * データベースの状態を取得することはできません。FBSQL_NOEXEC -
 * FBExec がサーバーで実行されておらず、
 * データベースの状態を取得することはできません。FBSQL_NOEXEC
 */
function fbsql_db_status($database_name, $link_identifier) {}