/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.curl-multi-select.php
 * @param resource $mh [optional] <p> TODO DESCRIPTION </p>
 * @param float $timeout [optional] <p> TODO DESCRIPTION </p>
 * @return int 成功した場合は、記述子セットに含まれる記述子の数を返します。
 * どの記述子上にもアクティビティがなかった場合は、結果が 0 になることもあります。
 * select に失敗した場合は -1 を返し、それ以外の失敗時は
 * (select システムコールから) タイムアウトします。
 */
function curl_multi_select($mh, $timeout = 1.0) {}