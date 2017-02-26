/**
 * (PHP 5 >= 5.5.0, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imagecropauto.php
 * @param resource $image [optional] <p> TODO DESCRIPTION </p>
 * @param int $mode [optional] <p> TODO DESCRIPTION </p>
 * @param float $threshold [optional] <p> TODO DESCRIPTION </p>
 * @param int $color [optional] <p> TODO DESCRIPTION </p>
 * @return resource 成功した場合にクロップ後の画像リソースを返します。失敗した場合に FALSE を返します。
 * クロップする箇所がなかった場合やすべてクロップされてしまった場合は、処理が失敗したものとみなされます。
 * この場合は、imagecrop は FALSE を返します。FALSEimagecropFALSE
 */
function imagecropauto($image, $mode = -1, $threshold = .5, $color = -1) {}