/**
 * (PHP 4 >= 4.0.6, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.mb-strimwidth.php
 * @param string $str [optional] <p> TODO DESCRIPTION </p>
 * @param int $start [optional] <p> TODO DESCRIPTION </p>
 * @param int $width [optional] <p> TODO DESCRIPTION </p>
 * @param string $trimmarker [optional] <p> TODO DESCRIPTION </p>
 * @param string $encoding [optional] <p> TODO DESCRIPTION </p>
 * @return string 丸められた文字列を返します。
 * trimmarker が設定された場合、
 * width にマッチする最後の文字を trimmarker で置き換えます。trimmarkerwidthtrimmarker
 */
function mb_strimwidth($str, $start, $width, $trimmarker = "", $encoding = mb_internal_encoding()) {}