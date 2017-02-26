/**
 * (PECL xattr >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.xattr-supported.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @return bool この関数は、ファイルシステムが拡張属性をサポートしている場合に TRUE、
 * していない場合に FALSE、そして判断できない場合 (たとえばパスが
 * 間違っていたりファイルへのアクセス権限がない場合) には NULL
 * を返します。TRUEFALSENULL
 */
function xattr_supported($filename, $flags) {}