/**
 * (PECL mongo >=0.9.0)<br/>
 * @link http://php.net/manual/en/mongocollection.getindexinfo.php
 * @return array この関数は、配列を返します。配列の各要素が、それぞれインデックスを表します。
 * その要素には、インデックス名を表す name や名前空間
 * (データベース名とコレクション名の組み合わせ) を表す ns、すべてのキーとそのソート順
 * (インデックスを作るもの) を表す key があります。
 * また、それ以外の値も特別なインデックスに含まれるかもしれません。
 * unique や sparse などです。namenskeyuniquesparse
 */
function MongoCollection.getIndexInfo() {}