/**
 * (PECL ps >= 1.2.0)<br/>
 * @link http://php.net/manual/en/function.ps-string-geometry.php
 * @param resource $psdoc [optional] <p> TODO DESCRIPTION </p>
 * @param string $text [optional] <p> TODO DESCRIPTION </p>
 * @param int $fontid [optional] <p> TODO DESCRIPTION </p>
 * @param float $size [optional] <p> TODO DESCRIPTION </p>
 * @return array 文字の寸法を格納した配列です。'width' には
 * ps_stringwidth で返される文字列の幅が入ります。
 * 下に突き出している部分の長さの最大値が 'descender' に、
 * また上に突き出している部分の長さの最大値が 'ascender' に入ります。ps_stringwidth
 */
function ps_string_geometry($psdoc, $text, $fontid, $size = 0.0) {}