/**
 * (PECL inotify >= 0.1.2)<br/>
 * @link http://php.net/manual/en/function.inotify-read.php
 * @param resource $inotify_instance [optional] <p> TODO DESCRIPTION </p>
 * @return array inotify イベントの配列、を返します。待機中のイベントがなく、かつ
 * inotify_instance が非ブロックモードである場合は
 * FALSE を返します。各イベントは次のキーを持つ配列となります。
 * wd は、inotify_add_watch
 * が返す監視記述子です
 * mask は、events のビットマスクです
 * cookie は、接続関連のイベント (たとえば IN_MOVE_FROM
 * や IN_MOVE_TO) の一意な ID です
 * name は、ファイル名 (たとえば
 * 監視対象のディレクトリ内でファイルが変更された場合) ですinotify_instanceFALSEwd は、inotify_add_watch
 * が返す監視記述子です
 * mask は、events のビットマスクです
 * cookie は、接続関連のイベント (たとえば IN_MOVE_FROM
 * や IN_MOVE_TO) の一意な ID です
 * name は、ファイル名 (たとえば
 * 監視対象のディレクトリ内でファイルが変更された場合) ですwd は、inotify_add_watch
 * が返す監視記述子ですinotify_add_watchmask は、events のビットマスクですeventscookie は、接続関連のイベント (たとえば IN_MOVE_FROM
 * や IN_MOVE_TO) の一意な ID ですIN_MOVE_FROMIN_MOVE_TOname は、ファイル名 (たとえば
 * 監視対象のディレクトリ内でファイルが変更された場合) です
 */
function inotify_read($inotify_instance) {}