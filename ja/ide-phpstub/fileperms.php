/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.fileperms.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @return int ファイルのパーミッションを数値モードで返します。このモードの下位ビットは
 * chmod に渡すのと同じ形式です。
 * しかし、大半のプラットフォームでは、それだけではなく
 * filename のファイル形式に関する情報も含まれます。
 * 以下の例で示すのは、ファイルのパーミッションやファイル形式を
 * POSIX システム (Linux や Mac OS X など) で調べる方法です。chmodfilenameローカルファイルの場合、その返り値は C ライブラリ関数 stat
 * が返す構造体の st_mode メンバーの値となります。
 * どのビットがセットされるかはプラットフォームによって異なるので、
 * パーミッション部分以外のビットをパースしたい場合は各プラットフォームのドキュメントを参照することをおすすめします。statst_mode
 */
function fileperms($filename) {}