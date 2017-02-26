/**
 * (PECL svn >= 0.1.0)<br/>
 * @link http://php.net/manual/en/function.svn-commit.php
 * @param string $log [optional] <p> TODO DESCRIPTION </p>
 * @param array $targets [optional] <p> TODO DESCRIPTION </p>
 * @param bool $recursive [optional] <p> TODO DESCRIPTION </p>
 * @return array 以下のような形式の配列を返します。array(
 * 0 => そのコミットのリビジョン番号
 * 1 => コミット日時を表す ISO 8601 形式の文字列
 * 2 => コミッターの名前
)失敗した場合は FALSE を返します。FALSE
 */
function svn_commit($log, $targets, $recursive = true) {}