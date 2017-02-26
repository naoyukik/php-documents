/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.date-sunset.php
 * @param int $timestamp [optional] <p> TODO DESCRIPTION </p>
 * @param int $format [optional] <p> TODO DESCRIPTION </p>
 * @param float $latitude [optional] <p> TODO DESCRIPTION </p>
 * @param float $longitude [optional] <p> TODO DESCRIPTION </p>
 * @param float $zenith [optional] <p> TODO DESCRIPTION </p>
 * @param float $gmt_offset [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 日の入り時刻を、指定した format で返します。
 * 失敗した場合に FALSE を返します。formatFALSE
 */
function date_sunset($timestamp, $format = SUNFUNCS_RET_STRING, $latitude = ini_get("date.default_latitude"), $longitude = ini_get("date.default_longitude"), $zenith = ini_get("date.sunset_zenith"), $gmt_offset) {}