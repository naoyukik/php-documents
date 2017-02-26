/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.iconv-strpos.php
 * @param string $haystack [optional] <p> TODO DESCRIPTION </p>
 * @param string $needle [optional] <p> TODO DESCRIPTION </p>
 * @param int $offset [optional] <p> TODO DESCRIPTION </p>
 * @param string $charset [optional] <p> TODO DESCRIPTION </p>
 * @return int needle が
 * haystack の中で最初に現れる位置を探します。needlehaystackもし needle が見つからなかった場合、
 * iconv_strpos は FALSE を返します。needleiconv_strposFALSEこの関数は論理値
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
function iconv_strpos($haystack, $needle, $offset, $charset = ini_get("iconv.internal_encoding")) {}