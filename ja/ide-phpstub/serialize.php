/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.serialize.php
 * @param mixed $value [optional] <p> TODO DESCRIPTION </p>
 * @return string value
 * の保存可能なバイトストリーム表現を含む文字列を返します。valueこれはバイナリ文字列であり、null バイトを含む可能性もあることに注意しましょう。
 * 保存したり利用したりするときも、null バイトが含まれることを想定しておかないといけません。
 * たとえば、serialize の出力をデータベースに格納するときには、
 * 通常は CHAR 型や TEXT 型ではなく BLOB 型を使わないといけません。serialize
 */
function serialize($value) {}