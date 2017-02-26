/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imagettfbbox.php
 * @param float $size [optional] <p> TODO DESCRIPTION </p>
 * @param float $angle [optional] <p> TODO DESCRIPTION </p>
 * @param string $fontfile [optional] <p> TODO DESCRIPTION </p>
 * @param string $text [optional] <p> TODO DESCRIPTION </p>
 * @return array imagettfbbox は、テキストの bounding box を
 * 作成するための 4 点を表現する 8 個の要素からなる配列を返します。
 * エラー時には FALSE を返します。
 * キー
 * 内容
 * 0
 * 左下角の X 座標
 * 1
 * 左下角の Y 座標
 * 2
 * 右下角の X 座標
 * 3
 * 右下角の Y 座標
 * 4
 * 右上角の X 座標
 * 5
 * 右上角の Y 座標
 * 6
 * 左上角の X 座標
 * 7
 * 左上角の Y 座標imagettfbboxFALSEキー
 * 内容
 * 0
 * 左下角の X 座標
 * 1
 * 左下角の Y 座標
 * 2
 * 右下角の X 座標
 * 3
 * 右下角の Y 座標
 * 4
 * 右上角の X 座標
 * 5
 * 右上角の Y 座標
 * 6
 * 左上角の X 座標
 * 7
 * 左上角の Y 座標キー
 * 内容
 * 0
 * 左下角の X 座標
 * 1
 * 左下角の Y 座標
 * 2
 * 右下角の X 座標
 * 3
 * 右下角の Y 座標
 * 4
 * 右上角の X 座標
 * 5
 * 右上角の Y 座標
 * 6
 * 左上角の X 座標
 * 7
 * 左上角の Y 座標キー
 * 内容キー
 * 内容キー内容0
 * 左下角の X 座標
 * 1
 * 左下角の Y 座標
 * 2
 * 右下角の X 座標
 * 3
 * 右下角の Y 座標
 * 4
 * 右上角の X 座標
 * 5
 * 右上角の Y 座標
 * 6
 * 左上角の X 座標
 * 7
 * 左上角の Y 座標0
 * 左下角の X 座標0左下角の X 座標1
 * 左下角の Y 座標1左下角の Y 座標2
 * 右下角の X 座標2右下角の X 座標3
 * 右下角の Y 座標3右下角の Y 座標4
 * 右上角の X 座標4右上角の X 座標5
 * 右上角の Y 座標5右上角の Y 座標6
 * 左上角の X 座標6左上角の X 座標7
 * 左上角の Y 座標7左上角の Y 座標各点の位置は、
 * angle にかかわらず
 * text からの相対位置で表されます。
 * つまり、"左上"はテキストを水平に見た場合の左上の角を意味します。angletext
 */
function imagettfbbox($size, $angle, $fontfile, $text) {}