/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imap-status.php
 * @param resource $imap_stream [optional] <p> TODO DESCRIPTION </p>
 * @param string $mailbox [optional] <p> TODO DESCRIPTION </p>
 * @param int $options [optional] <p> TODO DESCRIPTION </p>
 * @return object この関数は、ステータス情報を含むオブジェクトを返します。このオブジェクトには
 * messages、
 * recent、unseen、
 * uidnext および uidvalidity
 * というプロパティが含まれます。messagesrecentunseenuidnextuidvalidityflags にも、
 * 上の各定数に対応するビットマスクを設定することができます。flags
 */
function imap_status($imap_stream, $mailbox, $options) {}