/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.htmlentities.php
 * @param string $string [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param string $encoding [optional] <p> TODO DESCRIPTION </p>
 * @param bool $double_encode [optional] <p> TODO DESCRIPTION </p>
 * @return string エンコードした文字列を返します。入力文字列の中に、指定した encoding で無効な符号単位シーケンスが含まれる場合は、
 * ENT_IGNORE あるいは
 * ENT_SUBSTITUTE フラグが設定されていない限りは空文字列を返します。encodingENT_IGNOREENT_SUBSTITUTE
 */
function htmlentities($string, $flags = ENT_COMPAT | ENT_HTML401, $encoding = ini_get("default_charset"), $double_encode = true) {}