/**
 * (PHP 4 >= 4.0.7, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imap-thread.php
 * @param resource $imap_stream [optional] <p> TODO DESCRIPTION </p>
 * @param int $options [optional] <p> TODO DESCRIPTION </p>
 * @return array imap_thread は、REFERENCES
 * でスレッド化したメッセージのツリーを含む連想配列を返します。
 * エラー時には FALSE を返します。imap_threadREFERENCESFALSE現在のメールボックス内のすべてのメッセージが、結果の配列の 3 つの
 * エントリで表されます。
 * $thread["XX.num"] - 現在のメッセージ番号。
 * $thread["XX.next"]
 * $thread["XX.branch"]$thread["XX.num"] - 現在のメッセージ番号。
 * $thread["XX.next"]
 * $thread["XX.branch"]$thread["XX.num"] - 現在のメッセージ番号。$thread["XX.num"] - 現在のメッセージ番号。$thread["XX.num"]$thread["XX.next"]$thread["XX.next"]$thread["XX.next"]$thread["XX.branch"]$thread["XX.branch"]$thread["XX.branch"]
 */
function imap_thread($imap_stream, $options = SE_FREE) {}