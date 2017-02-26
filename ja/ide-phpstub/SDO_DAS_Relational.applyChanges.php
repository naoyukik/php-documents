/**
 * (^)<br/>
 * @link http://php.net/manual/en/sdo-das-relational.applychanges.php
 * @param PDO $database_handle [optional] <p> TODO DESCRIPTION </p>
 * @param SDODataObject $root_data_object [optional] <p> TODO DESCRIPTION </p>
 * @return void なし。しかし、渡されたデータグラフは何も変更されず、
 * そのまま使用可能なことに注意しましょう。
 * さらに、もしデータオブジェクトの作成の際にテーブルの主キーを自動生成していたのなら、
 * その主キーの値がここでデータオブジェクトに設定されます。
 * 変更内容の書き込みが正常に終了すると、そのデータグラフに関連する
 * 変更概要が消去されます。これにより、
 * そのデータグラフにさらに変更を加えてはそれを適用するといったことが可能になります。
 * この方法により、同じデータグラフを使用して繰り返し変更内容を適用することができます。
 */
function SDO_DAS_Relational.applyChanges($database_handle, $root_data_object) {}