/**
 * (PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1)<br/>
 * @link http://php.net/manual/en/function.hash-hmac-file.php
 * @param string $algo [optional] <p> TODO DESCRIPTION </p>
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @param string $key [optional] <p> TODO DESCRIPTION </p>
 * @param bool $raw_output [optional] <p> TODO DESCRIPTION </p>
 * @return string raw_output が true に設定されていない場合は、
 * メッセージダイジェストの計算結果を小文字の 16 進数値形式の文字列で
 * 返します。もし true に設定されていた場合は、メッセージダイジェストが
 * そのままのバイナリ形式で返されます。raw_output
 */
function hash_hmac_file($algo, $filename, $key, $raw_output = false) {}