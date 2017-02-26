/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.gmmktime.php
 * @param int $hour [optional] <p> TODO DESCRIPTION </p>
 * @param int $minute [optional] <p> TODO DESCRIPTION </p>
 * @param int $second [optional] <p> TODO DESCRIPTION </p>
 * @param int $month [optional] <p> TODO DESCRIPTION </p>
 * @param int $day [optional] <p> TODO DESCRIPTION </p>
 * @param int $year [optional] <p> TODO DESCRIPTION </p>
 * @param int $is_dst [optional] <p> TODO DESCRIPTION </p>
 * @return int Unix タイムスタンプを integer で返します。integer
 */
function gmmktime($hour = gmdate("H"), $minute = gmdate("i"), $second = gmdate("s"), $month = gmdate("n"), $day = gmdate("j"), $year = gmdate("Y"), $is_dst = -1) {}