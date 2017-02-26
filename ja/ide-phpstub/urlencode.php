/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.urlencode.php
 * @param string $str [optional] <p> TODO DESCRIPTION </p>
 * @return string -_. を除くすべての非英数文字が % 記号
 * (%)に続く二桁の数字で置き換えられ、
 * 空白は + 記号(+)にエンコードされます。
 * 同様の方法で、WWW のフォームからポストされたデータはエンコードされ、
 * application/x-www-form-urlencoded
 * メディア型も同様です。歴史的な理由により、この関数は RFC 3986 エンコード(
 * rawurlencode を参照してください) とは異なり、
 * 空白を + 記号にエンコードします。-_.%+application/x-www-form-urlencodedRFC 3986rawurlencode
 */
function urlencode($str) {}