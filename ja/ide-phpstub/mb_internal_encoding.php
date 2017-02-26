/**
 * (PHP 4 >= 4.0.6, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.mb-internal-encoding.php
 * @param string $encoding [optional] <p> TODO DESCRIPTION </p>
 * @return mixed encoding が設定された場合、
 * 成功した場合に TRUE を、失敗した場合に FALSE を返します。
 * このとき、マルチバイト正規表現用のエンコーディングは変更されません。
 * encoding が省略された場合、
 * 現在の内部文字エンコーディング名を返します。encodingTRUEFALSEencoding
 */
function mb_internal_encoding($encoding = mb_internal_encoding()) {}