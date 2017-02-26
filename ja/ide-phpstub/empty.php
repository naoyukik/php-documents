/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.empty.php
 * @param mixed $var [optional] <p> TODO DESCRIPTION </p>
 * @return bool var が存在し、かつその値が空や0でなければ FALSE を返します。
 * それ以外の場合は TRUE を返します。varFALSETRUE次のような値は空であるとみなされます。
 * "" (空文字列)
 * 0 (整数 の 0)
 * 0.0 (浮動小数点数の 0)
 * "0" (文字列 の 0)
 * NULL
 * FALSE
 * array() (空の配列)
 * $var; (変数が宣言されているが、値が設定されていない)"" (空文字列)
 * 0 (整数 の 0)
 * 0.0 (浮動小数点数の 0)
 * "0" (文字列 の 0)
 * NULL
 * FALSE
 * array() (空の配列)
 * $var; (変数が宣言されているが、値が設定されていない)"" (空文字列)""0 (整数 の 0)00.0 (浮動小数点数の 0)0.0"0" (文字列 の 0)"0"NULLNULLFALSEFALSEarray() (空の配列)array()$var; (変数が宣言されているが、値が設定されていない)$var;
 */
function empty($var) {}