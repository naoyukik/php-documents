/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.exif-imagetype.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @return int 正しいサインが見つかった場合は適切な定数、それ以外の場合は FALSE
 * を返します。返り値は getimagesize がインデックス
 * 2 に対して返す値と同じですが、exif_imagetype
 * のほうがずっと早く動作します。FALSEgetimagesizeexif_imagetype画像の形式を判別するために必要なだけのバイト数を読み込めない場合、
 * exif_imagetype は E_NOTICE
 * を発行して FALSE を返します。画像の形式を判別するために必要なだけのバイト数を読み込めない場合、
 * exif_imagetype は E_NOTICE
 * を発行して FALSE を返します。exif_imagetypeE_NOTICEFALSE
 */
function exif_imagetype($filename) {}