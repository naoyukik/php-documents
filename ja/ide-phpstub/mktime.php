/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.mktime.php
 * @param int $hour [optional] <p> TODO DESCRIPTION </p>
 * @param int $minute [optional] <p> TODO DESCRIPTION </p>
 * @param int $second [optional] <p> TODO DESCRIPTION </p>
 * @param int $month [optional] <p> TODO DESCRIPTION </p>
 * @param int $day [optional] <p> TODO DESCRIPTION </p>
 * @param int $year [optional] <p> TODO DESCRIPTION </p>
 * @param int $is_dst [optional] <p> TODO DESCRIPTION </p>
 * @return int mktime は与えられた引数の Unix
 * タイムスタンプを返します。引数が不正な場合、
 * この関数は FALSE を返します（PHP 5.1 より前のバージョンでは
 * -1 を返していました）。mktimeFALSE-1
 */
function mktime($hour = date("H"), $minute = date("i"), $second = date("s"), $month = date("n"), $day = date("j"), $year = date("Y"), $is_dst = -1) {}