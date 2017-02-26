/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.opendir.php
 * @param string $path [optional] <p> TODO DESCRIPTION </p>
 * @param resource $context [optional] <p> TODO DESCRIPTION </p>
 * @return resource 成功した場合にディレクトリハンドルの resource 、
 * 失敗した場合に FALSE を返します。resourceFALSEpath が有効なディレクトリでないかまたは権限が
 * 制限されているかファイルシステムのエラーによりディレクトリが
 * オープンできない場合、opendir は FALSE を返し、
 * E_WARNING エラーが発行されます。
 * opendir のこのエラー出力は、
 * 関数名の前に '@'
 * を付けることにより抑制できます。pathopendirFALSEE_WARNINGopendir@
 */
function opendir($path, $context) {}