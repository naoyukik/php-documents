/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.ltrim.php
 * @param string $str [optional] <p> TODO DESCRIPTION </p>
 * @param string $character_mask [optional] <p> TODO DESCRIPTION </p>
 * @return string この関数は文字列の最初から空白文字を取り除き、
 * 取り除かれた文字列を返します。2番目のパラメータを指定しない場合、
 * ltrimは以下の文字を削除します。
 * " " (ASCII 32
 * (0x20)), 通常の空白。
 * "\t" (ASCII 9
 * (0x09)), タブ。
 * "\n" (ASCII 10
 * (0x0A)), 改行。
 * "\r" (ASCII 13
 * (0x0D)), 復帰。
 * "\0" (ASCII 0
 * (0x00)), NUL バイト。
 * "\x0B" (ASCII 11
 * (0x0B)), 垂直タブ。ltrim" " (ASCII 32
 * (0x20)), 通常の空白。
 * "\t" (ASCII 9
 * (0x09)), タブ。
 * "\n" (ASCII 10
 * (0x0A)), 改行。
 * "\r" (ASCII 13
 * (0x0D)), 復帰。
 * "\0" (ASCII 0
 * (0x00)), NUL バイト。
 * "\x0B" (ASCII 11
 * (0x0B)), 垂直タブ。" " (ASCII 32
 * (0x20)), 通常の空白。" " (ASCII 32
 * (0x20)), 通常の空白。ASCII320x20"\t" (ASCII 9
 * (0x09)), タブ。"\t" (ASCII 9
 * (0x09)), タブ。ASCII90x09"\n" (ASCII 10
 * (0x0A)), 改行。"\n" (ASCII 10
 * (0x0A)), 改行。ASCII100x0A"\r" (ASCII 13
 * (0x0D)), 復帰。"\r" (ASCII 13
 * (0x0D)), 復帰。ASCII130x0D"\0" (ASCII 0
 * (0x00)), NUL バイト。"\0" (ASCII 0
 * (0x00)), NUL バイト。ASCII00x00NUL"\x0B" (ASCII 11
 * (0x0B)), 垂直タブ。"\x0B" (ASCII 11
 * (0x0B)), 垂直タブ。ASCII110x0B
 */
function ltrim($str, $character_mask) {}