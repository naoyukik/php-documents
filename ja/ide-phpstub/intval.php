/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.intval.php
 * @param mixed $var [optional] <p> TODO DESCRIPTION </p>
 * @param int $base [optional] <p> TODO DESCRIPTION </p>
 * @return integer 成功時は var の整数値、失敗時は 0。
 * 空の配列の場合は 0、空でない配列の場合は
 * 1 を返します。var最大値はシステムに依存します。32 ビットシステムでは、
 * 最大の符号付き整数の範囲 -2147483648 ～ 2147483647 となります。
 * このため、そのようなシステムでは intval('1000000000000')
 * は 2147483647 を返します。
 * 64 ビットシステムにおける最大の符号付き整数は 9223372036854775807
 * となります。intval('1000000000000')文字列の場合、文字列の最左の文字に依存しますが、ほとんどの場合で 0
 * を返します。
 * 整数への変換
 * の一般的なルールが適用されます。整数への変換
 */
function intval($var, $base = 10) {}