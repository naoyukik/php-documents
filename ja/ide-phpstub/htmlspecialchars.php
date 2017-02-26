/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.htmlspecialchars.php
 * @param string $string [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param string $encoding [optional] <p> TODO DESCRIPTION </p>
 * @param bool $double_encode [optional] <p> TODO DESCRIPTION </p>
 * @return string 変換後の文字列を返します。入力の string の中に
 * エンコーディング encoding における無効なコードユニットシーケンスが含まれており、
 * かつ ENT_IGNORE フラグが設定されていなければ、
 * htmlspecialchars は空文字列を返します。stringencodingENT_IGNOREhtmlspecialchars
 */
function htmlspecialchars($string, $flags = ENT_COMPAT | ENT_HTML401, $encoding = ini_get("default_charset"), $double_encode = true) {}