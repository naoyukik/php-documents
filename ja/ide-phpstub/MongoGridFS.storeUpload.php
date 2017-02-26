/**
 * (PECL mongo >=0.9.0)<br/>
 * @link http://php.net/manual/en/mongogridfs.storeupload.php
 * @param string $name [optional] <p> TODO DESCRIPTION </p>
 * @param array $metadata [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 格納したファイルドキュメントの _id を返します。metadata パラメータで _id を明示的に指定していない場合は、自動生成した MongoId となります。_idmetadata_idMongoId複数のファイルを同じフィールド名でアップロード
 * した場合は、このメソッドは何も返しません。
 * しかし、ファイル自体の処理はそのまま行われます。複数のファイルを同じフィールド名でアップロード
 * した場合は、このメソッドは何も返しません。
 * しかし、ファイル自体の処理はそのまま行われます。複数のファイルを同じフィールド名でアップロード
 */
function MongoGridFS.storeUpload($name, $metadata) {}