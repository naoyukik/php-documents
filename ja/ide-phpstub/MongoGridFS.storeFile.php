/**
 * (PECL mongo >=0.9.0)<br/>
 * @link http://php.net/manual/en/mongogridfs.storefile.php
 * @param string|resource $filename [optional] <p> TODO DESCRIPTION </p>
 * @param array $metadata [optional] <p> TODO DESCRIPTION </p>
 * @param array $options [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 格納したファイルドキュメントの _id を返します。metadata パラメータで _id を明示的に指定していない場合は、自動生成した MongoId となります。_idmetadata_idMongoId
 */
function MongoGridFS.storeFile($filename, $metadata = array(), $options = array()) {}