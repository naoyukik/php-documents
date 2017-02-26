/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.iconv-strrpos.php
 * @param string $haystack [optional] <p> TODO DESCRIPTION </p>
 * @param string $needle [optional] <p> TODO DESCRIPTION </p>
 * @param string $charset [optional] <p> TODO DESCRIPTION </p>
 * @return int 文字列 haystack の中で、
 * needle が最後に現れた位置を数字で返します。haystackneedleもし needle が見つからなかった場合、
 * iconv_strrpos は FALSE を返します。needleiconv_strrposFALSEこの関数は論理値
FALSE を返す可能性がありますが、FALSE として評価される値を返す可能性もあります。
詳細については 論理値の
セクションを参照してください。この関数の返り値を調べるには
===演算子 を
使用してください。この関数は論理値
FALSE を返す可能性がありますが、FALSE として評価される値を返す可能性もあります。
詳細については 論理値の
セクションを参照してください。この関数の返り値を調べるには
===演算子 を
使用してください。FALSEFALSE論理値===演算子
 */
function iconv_strrpos($haystack, $needle, $charset = ini_get("iconv.internal_encoding")) {}