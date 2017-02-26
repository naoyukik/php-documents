/**
 * (PECL mongo >=0.9.0)<br/>
 * @link http://php.net/manual/en/mongocollection.batchinsert.php
 * @param array $a [optional] <p> TODO DESCRIPTION </p>
 * @param array $options [optional] <p> TODO DESCRIPTION </p>
 * @return mixed w を設定して書き込みの確認をするようにしている場合は、
 * 追加の状況 ("ok") と発生したエラー ("err")
 * を連想配列で返します。設定されていないときは、一括追加の送信に成功すれば
 * TRUE、失敗すれば FALSE を返します。wTRUEFALSE
 */
function MongoCollection.batchInsert($a, $options = array()) {}