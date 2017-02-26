/**
 * (PECL mongo >=1.6.0)<br/>
 * @link http://php.net/manual/en/mongocursorinterface.getreadpreference.php
 * @return array この関数は、優先読み込みに関する配列を返します。配列に含まれる内容は、type (優先読み込みモードを表す文字列。MongoClient の定数に対応)、そして tagsets (すべてのタグセット条件のリスト) です。タグセットを指定しなかった場合は、tagsets は存在しません。typeMongoClienttagsetstagsets
 */
function MongoCursorInterface.getReadPreference() {}