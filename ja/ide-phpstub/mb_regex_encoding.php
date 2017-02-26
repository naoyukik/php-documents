/**
 * (PHP 4 >= 4.2.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.mb-regex-encoding.php
 * @param string $encoding [optional] <p> TODO DESCRIPTION </p>
 * @return mixed encoding が設定された場合、成功した場合に TRUE を、失敗した場合に FALSE を返します。
 * このとき、内部文字エンコーディングは変更されません。
 * encoding が省略された場合、現在のマルチバイト用の正規表現関数で用いる文字エンコーディング名を返します。
 */
function mb_regex_encoding($encoding = mb_regex_encoding()) {}