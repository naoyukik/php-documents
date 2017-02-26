/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imap-fetch-overview.php
 * @param resource $imap_stream [optional] <p> TODO DESCRIPTION </p>
 * @param string $sequence [optional] <p> TODO DESCRIPTION </p>
 * @param int $options [optional] <p> TODO DESCRIPTION </p>
 * @return array オブジェクトの配列を返します。各要素が、
 * それぞれひとつのメッセージのヘッダを表します。
 * オブジェクトで定義されるのは、存在するプロパティのみです。
 * 以下のプロパティがあります。
 * subject - メッセージの題名(subject)
 * from - 送信者
 * to - 受信者
 * date - 送信日
 * message_id - Message-ID 
 * references - このメッセージ ID への参照です
 * in_reply_to - このメッセージ ID への返信です
 * size - サイズ（バイト数）
 * uid - メールボックスにおけるこのメッセージの UID
 * msgno - メールボックスにおけるこのメッセージのシーケンス番号
 * recent - このメッセージには recent フラグが立てられています
 * flagged -  フラグが立てられています
 * answered -  返信済みフラグが立てられています
 * deleted -  削除フラグが立てられています
 * seen -  既読フラグが立てられています
 * draft -  草稿フラグが立てられています
 * update - 受信日時の UNIX タイムスタンプsubject - メッセージの題名(subject)
 * from - 送信者
 * to - 受信者
 * date - 送信日
 * message_id - Message-ID 
 * references - このメッセージ ID への参照です
 * in_reply_to - このメッセージ ID への返信です
 * size - サイズ（バイト数）
 * uid - メールボックスにおけるこのメッセージの UID
 * msgno - メールボックスにおけるこのメッセージのシーケンス番号
 * recent - このメッセージには recent フラグが立てられています
 * flagged -  フラグが立てられています
 * answered -  返信済みフラグが立てられています
 * deleted -  削除フラグが立てられています
 * seen -  既読フラグが立てられています
 * draft -  草稿フラグが立てられています
 * update - 受信日時の UNIX タイムスタンプsubject - メッセージの題名(subject)subject - メッセージの題名(subject)subjectfrom - 送信者from - 送信者fromto - 受信者to - 受信者todate - 送信日date - 送信日datemessage_id - Message-IDmessage_id - Message-IDmessage_idreferences - このメッセージ ID への参照ですreferences - このメッセージ ID への参照ですreferencesin_reply_to - このメッセージ ID への返信ですin_reply_to - このメッセージ ID への返信ですin_reply_tosize - サイズ（バイト数）size - サイズ（バイト数）sizeuid - メールボックスにおけるこのメッセージの UIDuid - メールボックスにおけるこのメッセージの UIDuidmsgno - メールボックスにおけるこのメッセージのシーケンス番号msgno - メールボックスにおけるこのメッセージのシーケンス番号msgnorecent - このメッセージには recent フラグが立てられていますrecent - このメッセージには recent フラグが立てられていますrecentflagged -  フラグが立てられていますflagged -  フラグが立てられていますflaggedanswered -  返信済みフラグが立てられていますanswered -  返信済みフラグが立てられていますanswereddeleted -  削除フラグが立てられていますdeleted -  削除フラグが立てられていますdeletedseen -  既読フラグが立てられていますseen -  既読フラグが立てられていますseendraft -  草稿フラグが立てられていますdraft -  草稿フラグが立てられていますdraftupdate - 受信日時の UNIX タイムスタンプupdate - 受信日時の UNIX タイムスタンプupdate
 */
function imap_fetch_overview($imap_stream, $sequence, $options) {}