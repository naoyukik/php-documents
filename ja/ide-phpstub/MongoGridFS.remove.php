/**
 * (PECL mongo >=0.9.0)<br/>
 * @link http://php.net/manual/en/mongogridfs.remove.php
 * @param array $criteria [optional] <p> TODO DESCRIPTION </p>
 * @param array $options [optional] <p> TODO DESCRIPTION </p>
 * @return bool|array "w" オプションを設定している場合は、配列を返します。
 * この配列には、削除が成功したかどうか (files コレクションを尊重したもの) を含みます。
 * それ以外の場合は TRUE を返します。"w"filesTRUE配列の各フィールドの意味については、
 * MongoCollection::insert のドキュメントを参照ください。MongoCollection::insert
 */
function MongoGridFS.remove($criteria = array(), $options = array()) {}