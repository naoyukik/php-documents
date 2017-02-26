/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.msg-send.php
 * @param resource $queue [optional] <p> TODO DESCRIPTION </p>
 * @param int $msgtype [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $message [optional] <p> TODO DESCRIPTION </p>
 * @param bool $serialize [optional] <p> TODO DESCRIPTION </p>
 * @param bool $blocking [optional] <p> TODO DESCRIPTION </p>
 * @param int $errorcode [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。TRUEFALSE処理が正常に完了すると、メッセージキューデータ構造体は以下のように更新されます。
 * msg_lspid には呼び出し元のプロセス ID が
 * 設定され、msg_qnum が 1 増加し、
 * msg_stime が現在の時刻に設定されます。msg_lspidmsg_qnummsg_stime
 */
function msg_send($queue, $msgtype, $message, $serialize = true, $blocking = true, $errorcode) {}