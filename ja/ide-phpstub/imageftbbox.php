/**
 * (PHP 4 >= 4.0.7, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imageftbbox.php
 * @param float $size [optional] <p> TODO DESCRIPTION </p>
 * @param float $angle [optional] <p> TODO DESCRIPTION </p>
 * @param string $fontfile [optional] <p> TODO DESCRIPTION </p>
 * @param string $text [optional] <p> TODO DESCRIPTION </p>
 * @param array $extrainfo [optional] <p> TODO DESCRIPTION </p>
 * @return array imageftbbox は 8 つの要素からなる配列を返します。
 * これが、テキストを囲む箱の 4 つの角の座標を表します。
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
 * 左上角の Y 座標imageftbbox0
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
 * 左上角の Y 座標7左上角の Y 座標これらの点は、angle の値にかかわらず
 * text からの相対位置になります。
 * つまり「左上」とは、そのテキストが水平になるように見たときの左上ということです。angletext
 */
function imageftbbox($size, $angle, $fontfile, $text, $extrainfo) {}