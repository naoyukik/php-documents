/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.ftell.php
 * @param resource $handle [optional] <p> TODO DESCRIPTION </p>
 * @return int handle が示すファイルポインタの位置、
 * すなわちファイル・ストリーム上のオフセットを整数値で返します。handleエラーが起こった場合 FALSE を返します。FALSEPHP の数値型は符号付整数であり、
 * 多くのプラットフォームでは 32 ビットの整数を取るため、
 * ファイルシステム関数の中には
 * 2GB より大きなファイルについては期待とは違う値を返すものがあります。PHP の数値型は符号付整数であり、
 * 多くのプラットフォームでは 32 ビットの整数を取るため、
 * ファイルシステム関数の中には
 * 2GB より大きなファイルについては期待とは違う値を返すものがあります。
 */
function ftell($handle) {}