/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imagettftext.php
 * @param resource $image [optional] <p> TODO DESCRIPTION </p>
 * @param float $size [optional] <p> TODO DESCRIPTION </p>
 * @param float $angle [optional] <p> TODO DESCRIPTION </p>
 * @param int $x [optional] <p> TODO DESCRIPTION </p>
 * @param int $y [optional] <p> TODO DESCRIPTION </p>
 * @param int $color [optional] <p> TODO DESCRIPTION </p>
 * @param string $fontfile [optional] <p> TODO DESCRIPTION </p>
 * @param string $text [optional] <p> TODO DESCRIPTION </p>
 * @return array テキストの境界を
 * 構成する 4 点を表す 8 個の要素を有する配列を返します。
 * 返される点は左下、右下、右上、左上の順番となります。
 * 点の座標は、角度によらず text に関する相対座標として表されます。
 * つまり、"左上"は、text を水平に見た場合の左上の隅を表します。
 * エラー時には FALSE を返します。FALSE
 */
function imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text) {}