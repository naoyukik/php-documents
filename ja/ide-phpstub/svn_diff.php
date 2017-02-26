/**
 * (PECL svn >= 0.1.0)<br/>
 * @link http://php.net/manual/en/function.svn-diff.php
 * @param string $path1 [optional] <p> TODO DESCRIPTION </p>
 * @param int $rev1 [optional] <p> TODO DESCRIPTION </p>
 * @param string $path2 [optional] <p> TODO DESCRIPTION </p>
 * @param int $rev2 [optional] <p> TODO DESCRIPTION </p>
 * @return array ふたつのストリームの内容を含む配列のリストを返します。
 * 最初のストリームが diff の出力で、もうひとつはエラー出力です。
 * このストリームを読み込むには fread
 * を使用します。エラーが発生した場合は FALSE あるいは NULL
 * を返します。freadFALSENULLデフォルトでは、diff の出力は Subversion
 * 版の unified diff 形式となります。しかし、Subversion の設定によっては
 * 外部の
 * diff エンジン を使うこともできます。外部の
 * diff エンジン
 */
function svn_diff($path1, $rev1, $path2, $rev2) {}