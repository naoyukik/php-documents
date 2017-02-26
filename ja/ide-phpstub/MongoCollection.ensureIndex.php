/**
 * (PECL mongo >=0.9.0)<br/>
 * @link http://php.net/manual/en/mongocollection.ensureindex.php
 * @param string|array $key|keys [optional] <p> TODO DESCRIPTION </p>
 * @param array $options [optional] <p> TODO DESCRIPTION </p>
 * @return bool インデックスの作成状況を含む配列を返します。
 * 作成に成功したかどうか ("ok")、
 * 作成前と作成後のインデックス数
 * ("numIndexesBefore" および
 * "numIndexesAfter")、
 * そのインデックスが属するコレクションを作成したかどうか
 * ("createdCollectionAutomatically")
 * が含まれます。
 * インデックスが既に存在していて作成の必要がない場合は、
 * "numIndexesAfter" に代わって
 * "note" フィールドが含まれます。"ok""numIndexesBefore""numIndexesAfter""createdCollectionAutomatically""numIndexesAfter""note"MongoDB 2.4 以前のバージョンでは、
 * 書き込み確認 が少なくとも
 * 1 以上である場合は、ステータスを表すドキュメントを返します。
 * それ以外の場合は TRUE を返します。
 * ステータスを表すドキュメントのフィールドは場合によって異なりますが、
 * "ok" フィールドは常に存在し、インデックスの作成に成功したかどうかを示します。
 * その他のフィールドについては
 * MongoCollection::insert のドキュメントを参照ください。書き込み確認1TRUE"ok"MongoCollection::insert
 */
function MongoCollection.ensureIndex($key|keys, $options = array()) {}