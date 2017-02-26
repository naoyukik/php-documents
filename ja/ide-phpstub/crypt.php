/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.crypt.php
 * @param string $str [optional] <p> TODO DESCRIPTION </p>
 * @param string $salt [optional] <p> TODO DESCRIPTION </p>
 * @return string ハッシュした文字列を返します。
 * 失敗した場合は、salt とは異なることが保証されている 13 文字未満の文字列を返します。パスワードを検証するときの文字列比較関数は、
 * タイミング攻撃に対して脆弱ではないものでなければいけません。
 * これをもちいて、crypt の出力と既知のハッシュとを比較します。
 * PHP 5.6 以降には、このために使える hash_equals 関数が追加されました。パスワードを検証するときの文字列比較関数は、
 * タイミング攻撃に対して脆弱ではないものでなければいけません。
 * これをもちいて、crypt の出力と既知のハッシュとを比較します。
 * PHP 5.6 以降には、このために使える hash_equals 関数が追加されました。crypthash_equals
 */
function crypt($str, $salt) {}