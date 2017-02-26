/**
 * (PECL svn >= 0.1.0)<br/>
 * @link http://php.net/manual/en/function.svn-status.php
 * @param string $path [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @return array 数値添字の配列を返します。配列の各要素は連想配列となり、
 * リポジトリ内のアイテムの状態の詳細を表します。Array (
 * [0] => Array (
 * // アイテムの情報
 * )
 * [1] => ...
)アイテムの情報を表す連想配列には、以下のようなキーが含まれます。path
 * このエントリのファイル/ディレクトリの、ローカルファイルシステム上でのパスを表す文字列。
 * text_status
 * アイテムのテキストの状態。とりうる値については 状態に関する定数 を参照ください。
 * repos_text_status
 * リポジトリ内でのアイテムのテキストの状態。正確な値となるのは、
 * update が TRUE の場合のみです。
 * とりうる値については 状態に関する定数 を参照ください。
 * prop_status
 * アイテムのプロパティの状態。とりうる値については 状態に関する定数 を参照ください。
 * repos_prop_status
 * リポジトリ内でのアイテムのプロパティの状態。正確な値となるのは、
 * update が TRUE の場合のみです。
 * とりうる値については 状態に関する定数 を参照ください。
 * locked
 * そのアイテムがロックされているかどうか
 * (設定されるのは TRUE の場合のみです)。
 * copied
 * アイテムがコピーされている (追加予約されている) かどうか。
 * (設定されるのは TRUE の場合のみです)。
 * switched
 * switch コマンドによる変更がされているかどうか。
 * (設定されるのは TRUE の場合のみです)。path
 * このエントリのファイル/ディレクトリの、ローカルファイルシステム上でのパスを表す文字列。pathpathこのエントリのファイル/ディレクトリの、ローカルファイルシステム上でのパスを表す文字列。このエントリのファイル/ディレクトリの、ローカルファイルシステム上でのパスを表す文字列。text_status
 * アイテムのテキストの状態。とりうる値については 状態に関する定数 を参照ください。text_statustext_statusアイテムのテキストの状態。とりうる値については 状態に関する定数 を参照ください。アイテムのテキストの状態。とりうる値については 状態に関する定数 を参照ください。状態に関する定数repos_text_status
 * リポジトリ内でのアイテムのテキストの状態。正確な値となるのは、
 * update が TRUE の場合のみです。
 * とりうる値については 状態に関する定数 を参照ください。repos_text_statusrepos_text_statusリポジトリ内でのアイテムのテキストの状態。正確な値となるのは、
 * update が TRUE の場合のみです。
 * とりうる値については 状態に関する定数 を参照ください。リポジトリ内でのアイテムのテキストの状態。正確な値となるのは、
 * update が TRUE の場合のみです。
 * とりうる値については 状態に関する定数 を参照ください。updateTRUE状態に関する定数prop_status
 * アイテムのプロパティの状態。とりうる値については 状態に関する定数 を参照ください。prop_statusprop_statusアイテムのプロパティの状態。とりうる値については 状態に関する定数 を参照ください。アイテムのプロパティの状態。とりうる値については 状態に関する定数 を参照ください。状態に関する定数repos_prop_status
 * リポジトリ内でのアイテムのプロパティの状態。正確な値となるのは、
 * update が TRUE の場合のみです。
 * とりうる値については 状態に関する定数 を参照ください。repos_prop_statusrepos_prop_statusリポジトリ内でのアイテムのプロパティの状態。正確な値となるのは、
 * update が TRUE の場合のみです。
 * とりうる値については 状態に関する定数 を参照ください。リポジトリ内でのアイテムのプロパティの状態。正確な値となるのは、
 * update が TRUE の場合のみです。
 * とりうる値については 状態に関する定数 を参照ください。updateTRUE状態に関する定数locked
 * そのアイテムがロックされているかどうか
 * (設定されるのは TRUE の場合のみです)。lockedlockedそのアイテムがロックされているかどうか
 * (設定されるのは TRUE の場合のみです)。そのアイテムがロックされているかどうか
 * (設定されるのは TRUE の場合のみです)。TRUEcopied
 * アイテムがコピーされている (追加予約されている) かどうか。
 * (設定されるのは TRUE の場合のみです)。copiedcopiedアイテムがコピーされている (追加予約されている) かどうか。
 * (設定されるのは TRUE の場合のみです)。アイテムがコピーされている (追加予約されている) かどうか。
 * (設定されるのは TRUE の場合のみです)。TRUEswitched
 * switch コマンドによる変更がされているかどうか。
 * (設定されるのは TRUE の場合のみです)。switchedswitchedswitch コマンドによる変更がされているかどうか。
 * (設定されるのは TRUE の場合のみです)。switch コマンドによる変更がされているかどうか。
 * (設定されるのは TRUE の場合のみです)。TRUEこれらのキーは、バージョン管理されているアイテムについてのみ設定されます。name
 * リポジトリ内でのアイテムのベース名。
 * url
 * リポジトリ内でのアイテムの URL。
 * repos
 * リポジトリのベース URL。
 * revision
 * 作業コピーのリビジョン番号。
 * kind
 * アイテムの形式。file あるいは directory のいずれか。とりうる値については 型に関する定数 を参照ください。
 * schedule
 * そのアイテムに予定されているアクション (追加や削除など)。
 * これらのマジックナンバーに対応する定数は定義されていません。
 * 定数を定義するには、次のようにします。
 * <?php
if (!defined('svn_wc_schedule_normal')) {
 * define('svn_wc_schedule_normal',  0); // 何も予定なし
 * define('svn_wc_schedule_add',     1); // 追加予定
 * define('svn_wc_schedule_delete',  2); // 削除予定
 * define('svn_wc_schedule_replace', 3); // 追加・削除予定
}
?>
 * deleted
 * アイテムが削除されたが、親リビジョンのログがあるかどうか
 * (設定されるのは TRUE の場合のみです)。
 * absent
 * アイテムが行方不明、
 * つまり Subversion 上では存在するはずなのに実際には存在しない
 * という状態になっているかどうか
 * (設定されるのは TRUE の場合のみです)。
 * incomplete
 * Whether or not the entries file for a directory is incomplete.
 * (設定されるのは TRUE の場合のみです)。
 * cmt_date
 * 最終更新日時を表す Unix タイムスタンプ
 * (update の影響を受けません)。
 * cmt_rev
 * 最終更新時のリビジョン
 * (update の影響を受けません)。
 * cmt_author
 * 最終更新者
 * (update の影響を受けません)。
 * prop_time
 * プロパティの最新日時を表す Unix タイムスタンプ。
 * text_time
 * テキストの最新日時を表す Unix タイムスタンプ。name
 * リポジトリ内でのアイテムのベース名。namenameリポジトリ内でのアイテムのベース名。リポジトリ内でのアイテムのベース名。url
 * リポジトリ内でのアイテムの URL。urlurlリポジトリ内でのアイテムの URL。リポジトリ内でのアイテムの URL。repos
 * リポジトリのベース URL。reposreposリポジトリのベース URL。リポジトリのベース URL。revision
 * 作業コピーのリビジョン番号。revisionrevision作業コピーのリビジョン番号。作業コピーのリビジョン番号。kind
 * アイテムの形式。file あるいは directory のいずれか。とりうる値については 型に関する定数 を参照ください。kindkindアイテムの形式。file あるいは directory のいずれか。とりうる値については 型に関する定数 を参照ください。アイテムの形式。file あるいは directory のいずれか。とりうる値については 型に関する定数 を参照ください。型に関する定数schedule
 * そのアイテムに予定されているアクション (追加や削除など)。
 * これらのマジックナンバーに対応する定数は定義されていません。
 * 定数を定義するには、次のようにします。
 * <?php
if (!defined('svn_wc_schedule_normal')) {
 * define('svn_wc_schedule_normal',  0); // 何も予定なし
 * define('svn_wc_schedule_add',     1); // 追加予定
 * define('svn_wc_schedule_delete',  2); // 削除予定
 * define('svn_wc_schedule_replace', 3); // 追加・削除予定
}
?>schedulescheduleそのアイテムに予定されているアクション (追加や削除など)。
 * これらのマジックナンバーに対応する定数は定義されていません。
 * 定数を定義するには、次のようにします。
 * <?php
if (!defined('svn_wc_schedule_normal')) {
 * define('svn_wc_schedule_normal',  0); // 何も予定なし
 * define('svn_wc_schedule_add',     1); // 追加予定
 * define('svn_wc_schedule_delete',  2); // 削除予定
 * define('svn_wc_schedule_replace', 3); // 追加・削除予定
}
?>そのアイテムに予定されているアクション (追加や削除など)。
 * これらのマジックナンバーに対応する定数は定義されていません。
 * 定数を定義するには、次のようにします。<?php
if (!defined('svn_wc_schedule_normal')) {
 * define('svn_wc_schedule_normal',  0); // 何も予定なし
 * define('svn_wc_schedule_add',     1); // 追加予定
 * define('svn_wc_schedule_delete',  2); // 削除予定
 * define('svn_wc_schedule_replace', 3); // 追加・削除予定
}
?>deleted
 * アイテムが削除されたが、親リビジョンのログがあるかどうか
 * (設定されるのは TRUE の場合のみです)。deleteddeletedアイテムが削除されたが、親リビジョンのログがあるかどうか
 * (設定されるのは TRUE の場合のみです)。アイテムが削除されたが、親リビジョンのログがあるかどうか
 * (設定されるのは TRUE の場合のみです)。TRUEabsent
 * アイテムが行方不明、
 * つまり Subversion 上では存在するはずなのに実際には存在しない
 * という状態になっているかどうか
 * (設定されるのは TRUE の場合のみです)。absentabsentアイテムが行方不明、
 * つまり Subversion 上では存在するはずなのに実際には存在しない
 * という状態になっているかどうか
 * (設定されるのは TRUE の場合のみです)。アイテムが行方不明、
 * つまり Subversion 上では存在するはずなのに実際には存在しない
 * という状態になっているかどうか
 * (設定されるのは TRUE の場合のみです)。TRUEincomplete
 * Whether or not the entries file for a directory is incomplete.
 * (設定されるのは TRUE の場合のみです)。incompleteincompleteWhether or not the entries file for a directory is incomplete.
 * (設定されるのは TRUE の場合のみです)。Whether or not the entries file for a directory is incomplete.
 * (設定されるのは TRUE の場合のみです)。TRUEcmt_date
 * 最終更新日時を表す Unix タイムスタンプ
 * (update の影響を受けません)。cmt_datecmt_date最終更新日時を表す Unix タイムスタンプ
 * (update の影響を受けません)。最終更新日時を表す Unix タイムスタンプ
 * (update の影響を受けません)。updatecmt_rev
 * 最終更新時のリビジョン
 * (update の影響を受けません)。cmt_revcmt_rev最終更新時のリビジョン
 * (update の影響を受けません)。最終更新時のリビジョン
 * (update の影響を受けません)。updatecmt_author
 * 最終更新者
 * (update の影響を受けません)。cmt_authorcmt_author最終更新者
 * (update の影響を受けません)。最終更新者
 * (update の影響を受けません)。updateprop_time
 * プロパティの最新日時を表す Unix タイムスタンプ。prop_timeprop_timeプロパティの最新日時を表す Unix タイムスタンプ。プロパティの最新日時を表す Unix タイムスタンプ。text_time
 * テキストの最新日時を表す Unix タイムスタンプ。text_timetext_timeテキストの最新日時を表す Unix タイムスタンプ。テキストの最新日時を表す Unix タイムスタンプ。
 */
function svn_status($path, $flags) {}