/**
 * @link http://php.net/manual/en/mongo.listdbs.php
 * @return array 三つのフィールドを含む連想配列を返します。
 * 最初のフィールドは databases で、
 * その中身もまた配列となります。
 * 配列の各要素は個々のデータベースに対応する連想配列で、
 * データベース名とサイズ、空かどうかを保持します。
 * 残りの二つのフィールドは
 * totalSize (バイト単位) と ok
 * (このメソッドが正しく実行できた場合に 1) です。databasestotalSizeok
 */
function Mongo.listDBs() {}