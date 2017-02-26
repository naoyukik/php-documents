/**
 * (PECL wincache >= 1.1.0)<br/>
 * @link http://php.net/manual/en/function.wincache-ucache-info.php
 * @param bool $summaryonly [optional] <p> TODO DESCRIPTION </p>
 * @param string $key [optional] <p> TODO DESCRIPTION </p>
 * @return array ユーザーキャッシュについてのメタデータの配列を返します。失敗した場合に FALSE を返しますFALSEこの関数が返す配列には次の要素が含まれます。
 * total_cache_uptime - ユーザーキャッシュがアクティブになってからの経過秒数。
 * total_item_count - 現在ユーザーキャッシュに入っている要素の数。
 * is_local_cache - メタデータがローカルキャッシュ用のものである場合に true、
 * グローバルキャッシュ用のものである場合に false。
 * total_hit_count - キャッシュからファイルが取り出された回数。
 * total_miss_count - ファイルがキャッシュに見つからなかった回数。
 * ucache_entries - キャッシュされているアイテムに関する情報を含む配列。
 * key_name - データを保存する際に使うキーの名前。
 * value_type - キーに関連づけて格納する値の型。
 * use_time - ユーザーキャッシュ内でアクセスされてからの経過秒数。
 * last_check - ファイルの変更をチェックされてからの経過秒数。
 * is_session - indicates if the data is a session variable
 * ttl_seconds - データをキャッシュ内に残す残り時間。0 は無制限。
 * age_seconds - データがキャッシュに追加されてからのおよその経過時間。
 * hitcount - キャッシュからファイルが取り出された回数。total_cache_uptime - ユーザーキャッシュがアクティブになってからの経過秒数。
 * total_item_count - 現在ユーザーキャッシュに入っている要素の数。
 * is_local_cache - メタデータがローカルキャッシュ用のものである場合に true、
 * グローバルキャッシュ用のものである場合に false。
 * total_hit_count - キャッシュからファイルが取り出された回数。
 * total_miss_count - ファイルがキャッシュに見つからなかった回数。
 * ucache_entries - キャッシュされているアイテムに関する情報を含む配列。
 * key_name - データを保存する際に使うキーの名前。
 * value_type - キーに関連づけて格納する値の型。
 * use_time - ユーザーキャッシュ内でアクセスされてからの経過秒数。
 * last_check - ファイルの変更をチェックされてからの経過秒数。
 * is_session - indicates if the data is a session variable
 * ttl_seconds - データをキャッシュ内に残す残り時間。0 は無制限。
 * age_seconds - データがキャッシュに追加されてからのおよその経過時間。
 * hitcount - キャッシュからファイルが取り出された回数。total_cache_uptime - ユーザーキャッシュがアクティブになってからの経過秒数。total_cache_uptime - ユーザーキャッシュがアクティブになってからの経過秒数。total_cache_uptimetotal_item_count - 現在ユーザーキャッシュに入っている要素の数。total_item_count - 現在ユーザーキャッシュに入っている要素の数。total_item_countis_local_cache - メタデータがローカルキャッシュ用のものである場合に true、
 * グローバルキャッシュ用のものである場合に false。is_local_cache - メタデータがローカルキャッシュ用のものである場合に true、
 * グローバルキャッシュ用のものである場合に false。is_local_cachetotal_hit_count - キャッシュからファイルが取り出された回数。total_hit_count - キャッシュからファイルが取り出された回数。total_hit_counttotal_miss_count - ファイルがキャッシュに見つからなかった回数。total_miss_count - ファイルがキャッシュに見つからなかった回数。total_miss_countucache_entries - キャッシュされているアイテムに関する情報を含む配列。
 * key_name - データを保存する際に使うキーの名前。
 * value_type - キーに関連づけて格納する値の型。
 * use_time - ユーザーキャッシュ内でアクセスされてからの経過秒数。
 * last_check - ファイルの変更をチェックされてからの経過秒数。
 * is_session - indicates if the data is a session variable
 * ttl_seconds - データをキャッシュ内に残す残り時間。0 は無制限。
 * age_seconds - データがキャッシュに追加されてからのおよその経過時間。
 * hitcount - キャッシュからファイルが取り出された回数。ucache_entries - キャッシュされているアイテムに関する情報を含む配列。
 * key_name - データを保存する際に使うキーの名前。
 * value_type - キーに関連づけて格納する値の型。
 * use_time - ユーザーキャッシュ内でアクセスされてからの経過秒数。
 * last_check - ファイルの変更をチェックされてからの経過秒数。
 * is_session - indicates if the data is a session variable
 * ttl_seconds - データをキャッシュ内に残す残り時間。0 は無制限。
 * age_seconds - データがキャッシュに追加されてからのおよその経過時間。
 * hitcount - キャッシュからファイルが取り出された回数。ucache_entrieskey_name - データを保存する際に使うキーの名前。
 * value_type - キーに関連づけて格納する値の型。
 * use_time - ユーザーキャッシュ内でアクセスされてからの経過秒数。
 * last_check - ファイルの変更をチェックされてからの経過秒数。
 * is_session - indicates if the data is a session variable
 * ttl_seconds - データをキャッシュ内に残す残り時間。0 は無制限。
 * age_seconds - データがキャッシュに追加されてからのおよその経過時間。
 * hitcount - キャッシュからファイルが取り出された回数。key_name - データを保存する際に使うキーの名前。key_name - データを保存する際に使うキーの名前。key_namevalue_type - キーに関連づけて格納する値の型。value_type - キーに関連づけて格納する値の型。value_typeuse_time - ユーザーキャッシュ内でアクセスされてからの経過秒数。use_time - ユーザーキャッシュ内でアクセスされてからの経過秒数。use_timelast_check - ファイルの変更をチェックされてからの経過秒数。last_check - ファイルの変更をチェックされてからの経過秒数。last_checkis_session - indicates if the data is a session variableis_session - indicates if the data is a session variableis_sessionttl_seconds - データをキャッシュ内に残す残り時間。0 は無制限。ttl_seconds - データをキャッシュ内に残す残り時間。0 は無制限。ttl_secondsage_seconds - データがキャッシュに追加されてからのおよその経過時間。age_seconds - データがキャッシュに追加されてからのおよその経過時間。age_secondshitcount - キャッシュからファイルが取り出された回数。hitcount - キャッシュからファイルが取り出された回数。hitcount
 */
function wincache_ucache_info($summaryonly = false, $key = NULL) {}