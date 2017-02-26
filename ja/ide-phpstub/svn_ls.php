/**
 * (PECL svn >= 0.1.0)<br/>
 * @link http://php.net/manual/en/function.svn-ls.php
 * @param string $repos_url [optional] <p> TODO DESCRIPTION </p>
 * @param int $revision_no [optional] <p> TODO DESCRIPTION </p>
 * @param bool $recurse [optional] <p> TODO DESCRIPTION </p>
 * @param bool $peg [optional] <p> TODO DESCRIPTION </p>
 * @return array 成功した場合は、この関数は次のような構造の配列を返します。
 * [0] => Array
 * (
 * [created_rev] => 最後に変更されたリビジョン番号
 * [last_author] => 最後に変更した人の名前
 * [size] => ファイルのバイト数
 * [time] => 最終更新日時を、その古さによって 'M d H:i'
 * あるいは 'M d Y' のいずれかの形式で表したもの
 * [time_t] => 最終更新日時の unix タイムスタンプ
 * [name] => ファイル/ディレクトリの名前
 * [type] => 'file' あるいは 'dir' のいずれか
 * )
[1] => ...[0] => Array
 * (
 * [created_rev] => 最後に変更されたリビジョン番号
 * [last_author] => 最後に変更した人の名前
 * [size] => ファイルのバイト数
 * [time] => 最終更新日時を、その古さによって 'M d H:i'
 * あるいは 'M d Y' のいずれかの形式で表したもの
 * [time_t] => 最終更新日時の unix タイムスタンプ
 * [name] => ファイル/ディレクトリの名前
 * [type] => 'file' あるいは 'dir' のいずれか
 * )
[1] => ...
 */
function svn_ls($repos_url, $revision_no = SVN_REVISION_HEAD, $recurse = false, $peg = false) {}