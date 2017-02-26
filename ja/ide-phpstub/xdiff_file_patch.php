/**
 * (PECL xdiff >= 0.2.0)<br/>
 * @link http://php.net/manual/en/function.xdiff-file-patch.php
 * @param string $file [optional] <p> TODO DESCRIPTION </p>
 * @param string $patch [optional] <p> TODO DESCRIPTION </p>
 * @param string $dest [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 内部エラーが発生した場合に FALSE を返します。
 * パッチの適用に失敗した場合はパッチが拒否された部分の文字列、
 * そして成功した場合は TRUE を返します。FALSETRUE
 */
function xdiff_file_patch($file, $patch, $dest, $flags = DIFF_PATCH_NORMAL) {}