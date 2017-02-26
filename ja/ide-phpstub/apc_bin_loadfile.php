/**
 * (PECL apc >= 3.1.4)<br/>
 * @link http://php.net/manual/en/function.apc-bin-loadfile.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @param resource $context [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @return bool バイナリダンプの読み込みに成功した場合に TRUE、
 * それ以外の場合に FALSE を返します。FALSE が返される理由には、
 * APC が有効でない場合や filename
 * が無効なファイルの場合、空のファイルの場合、
 * filename のオープンに失敗した場合、
 * ダンプが不完全な場合、そして data
 * が有効な APC バイナリダンプでない (予期せぬサイズなど)
 * 場合などがあります。TRUEFALSEFALSEfilenamefilenamedata
 */
function apc_bin_loadfile($filename, $context = NULL, $flags) {}