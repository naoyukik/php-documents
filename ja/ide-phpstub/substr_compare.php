/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.substr-compare.php
 * @param string $main_str [optional] <p> TODO DESCRIPTION </p>
 * @param string $str [optional] <p> TODO DESCRIPTION </p>
 * @param int $offset [optional] <p> TODO DESCRIPTION </p>
 * @param int $length [optional] <p> TODO DESCRIPTION </p>
 * @param bool $case_insensitivity [optional] <p> TODO DESCRIPTION </p>
 * @return int main_str の offset
 * 以降が str より小さい場合に負の数、
 * str より大きい場合に正の数、
 * 等しい場合に 0 を返します。offset が
 * main_str の長さ以上であるか、あるいは length
 * が設定されていて 1 未満である場合 (PHP 5.6 より前のバージョン)、substr_compare
 * は警告を表示して FALSE を返します。main_stroffsetstrstroffsetmain_strlengthsubstr_compareFALSE
 */
function substr_compare($main_str, $str, $offset, $length, $case_insensitivity = false) {}