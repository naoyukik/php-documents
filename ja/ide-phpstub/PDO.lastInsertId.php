/**
 * (PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0)<br/>
 * @link http://php.net/manual/en/pdo.lastinsertid.php
 * @param string $name [optional] <p> TODO DESCRIPTION </p>
 * @return string もし name
 * パラメータにシーケンス名が指定されなかった場合、
 * PDO::lastInsertId
 * はデータベースに挿入された最後の行の行IDに相当する文字列を返します。namePDO::lastInsertIdもし name
 * パラメータにシーケンス名が指定された場合、
 * PDO::lastInsertId
 * は指定されたシーケンスオブジェクトから取得した最後の値に相当する
 * 文字列を返します。namePDO::lastInsertIdもし PDO ドライバがサポートしていない場合、
 * PDO::lastInsertId
 * は IM001 SQLSTATE を発生させます。PDO::lastInsertIdIM001
 */
function PDO.lastInsertId($name) {}