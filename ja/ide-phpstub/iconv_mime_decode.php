/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.iconv-mime-decode.php
 * @param string $encoded_header [optional] <p> TODO DESCRIPTION </p>
 * @param int $mode [optional] <p> TODO DESCRIPTION </p>
 * @param string $charset [optional] <p> TODO DESCRIPTION </p>
 * @return string 成功した場合はデコードされた MIME フィールドを、
 * デコード中にエラーが発生した場合は FALSE を返します。MIMEFALSE
 */
function iconv_mime_decode($encoded_header, $mode, $charset = ini_get("iconv.internal_encoding")) {}