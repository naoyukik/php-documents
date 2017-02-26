/**
 * (PECL mongo >=1.5.0)<br/>
 * @link http://php.net/manual/en/mongoclient.killcursor.php
 * @param string $server_hash [optional] <p> TODO DESCRIPTION </p>
 * @param int|MongoInt64 $id [optional] <p> TODO DESCRIPTION </p>
 * @return bool カーソルの削除処理を実行した場合に TRUE、
 * 引数に何か問題があった場合 (server_hash が間違っている場合など) に FALSE を返します。
 * この返り値は、実際にカーソルが削除されたかどうかを表すものではありません。
 * サーバーからは、カーソルの削除に成功したかどうかの情報を得られないからです。TRUEserver_hashFALSEではありません
 */
function MongoClient.killCursor($server_hash, $id) {}