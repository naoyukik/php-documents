/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.getimagesize.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @param array $imageinfo [optional] <p> TODO DESCRIPTION </p>
 * @return array 最大 7 つの要素からなる配列を返します。画像の形式によっては、
 * channels や bits は含まれないことがあります。channelsbits0 番目および 1 番目の要素は、それぞれ画像の幅と高さを表します。形式によっては、画像を含まないものや複数の画像を含むものがあります。
 * これらの場合、getimagesize
 * は画像のサイズを適切に決定することができません。このような場合、
 * getimagesize が返す幅と高さはいずれもゼロとなります。形式によっては、画像を含まないものや複数の画像を含むものがあります。
 * これらの場合、getimagesize
 * は画像のサイズを適切に決定することができません。このような場合、
 * getimagesize が返す幅と高さはいずれもゼロとなります。getimagesizegetimagesize2 番目の要素は IMAGETYPE_XXX constants 定数のひとつで、
 * 画像の形式を表します。IMAGETYPE_XXX constants3 番目の要素は IMG タグで直接利用できる文字列
 * height="yyy" width="xxx"
 * です。IMGheight="yyy" width="xxx"mimeは画像のMIMEタイプに一致します。この情報は
 * 画像とともに正しい HTTP Content-type
 * ヘッダを転送するために使用できます。
 * getimagesize および MIME 型
 * <?php
$size = getimagesize($filename);
$fp = fopen($filename, "rb");
if ($size && $fp) {
 * header("Content-type: {$size['mime']}");
 * fpassthru($fp);
 * exit;
} else {
 * // エラー
}
?>mimeContent-typegetimagesize および MIME 型
 * <?php
$size = getimagesize($filename);
$fp = fopen($filename, "rb");
if ($size && $fp) {
 * header("Content-type: {$size['mime']}");
 * fpassthru($fp);
 * exit;
} else {
 * // エラー
}
?>getimagesize<?php
$size = getimagesize($filename);
$fp = fopen($filename, "rb");
if ($size && $fp) {
 * header("Content-type: {$size['mime']}");
 * fpassthru($fp);
 * exit;
} else {
 * // エラー
}
?>channels は RGB 画像の場合に 3、CMYK 画像の場合に 4 です。channelsbits は個々の色のビット数です。bits画像の形式によっては、channels や
 * bits の値の存在は混乱の元です。
 * たとえば、GIF は常に 1 ピクセルあたり
 * 3 チャンネルを使用しますが、グローバルカラーテーブルを使ったアニメーション GIF
 * のピクセルあたりのビット数を計算することはできません。channelsbitsGIF失敗した場合には FALSE を返します。FALSE
 */
function getimagesize($filename, $imageinfo) {}