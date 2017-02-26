/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.html-entity-decode.php
 * @param string $string [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param string $encoding [optional] <p> TODO DESCRIPTION </p>
 * @return string デコードされた文字列を返します。
 */
function html_entity_decode($string, $flags = ENT_COMPAT | ENT_HTML401, $encoding = ini_get("default_charset")) {}