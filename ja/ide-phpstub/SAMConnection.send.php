/**
 * (PECL sam >= 0.1.0)<br/>
 * @link http://php.net/manual/en/samconnection.send.php
 * @param string $target [optional] <p> TODO DESCRIPTION </p>
 * @param SAMMessage $msg [optional] <p> TODO DESCRIPTION </p>
 * @param array $properties [optional] <p> TODO DESCRIPTION </p>
 * @return string ID を文字列で返します。返信や応答を取得する際にこの文字列を使用します。
 * エラーが発生した場合には FALSE を返します。FALSEID が返されるのは、メッセージが送信先キュー (queue://xxxx)
 * に正常に送信できた場合のみで、キュー上のメッセージの ID となります。
 * トピックにメッセージを投稿するために send を使用した場合の返り値は
 * TRUE となり、ID は返されません。ID が返されるのは、メッセージが送信先キュー (queue://xxxx)
 * に正常に送信できた場合のみで、キュー上のメッセージの ID となります。
 * トピックにメッセージを投稿するために send を使用した場合の返り値は
 * TRUE となり、ID は返されません。queue://xxxxTRUE
 */
function SAMConnection.send($target, $msg, $properties) {}