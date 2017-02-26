/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.microtime.php
 * @param bool $get_as_float [optional] <p> TODO DESCRIPTION </p>
 * @return mixed デフォルトでは、microtime は "msec sec"
 * 形式の文字列を返します。ただし、sec は Unix エポック (1970 年 1 月 1 日 0:00:00 GMT)
 * からの経過秒数、msec は sec
 * から経過したマイクロ秒数を秒単位で表したものです。microtimesecmsecsecget_as_float を
 * TRUE に設定すると、microtime は Unixエポック からの経過秒数を
 * マイクロ秒で正確になるように float で表したものを返します。get_as_floatTRUEmicrotimefloat
 */
function microtime($get_as_float = false) {}