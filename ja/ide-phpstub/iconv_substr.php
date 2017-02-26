/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.iconv-substr.php
 * @param string $str [optional] <p> TODO DESCRIPTION </p>
 * @param int $offset [optional] <p> TODO DESCRIPTION </p>
 * @param int $length [optional] <p> TODO DESCRIPTION </p>
 * @param string $charset [optional] <p> TODO DESCRIPTION </p>
 * @return string 文字列 str の、
 * offset と length
 * で指定された一部を返します。stroffsetlengthもし str が start
 * の文字列長より短い場合は、FALSE が返されます。strstartFALSE
 */
function iconv_substr($str, $offset, $length = iconv_strlen($str, $charset), $charset = ini_get("iconv.internal_encoding")) {}