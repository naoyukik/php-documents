/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.msg-receive.php
 * @param resource $queue [optional] <p> TODO DESCRIPTION </p>
 * @param int $desiredmsgtype [optional] <p> TODO DESCRIPTION </p>
 * @param int $msgtype [optional] <p> TODO DESCRIPTION </p>
 * @param int $maxsize [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $message [optional] <p> TODO DESCRIPTION </p>
 * @param bool $unserialize [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param int $errorcode [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。TRUEFALSE処理が正常に完了すると、メッセージキューデータ構造体は以下のように更新されます。
 * msg_lrpid には呼び出し元のプロセス ID が
 * 設定され、msg_qnum が 1 減少し、
 * msg_rtime が現在の時刻に設定されます。msg_lrpidmsg_qnummsg_rtime
 */
function msg_receive($queue, $desiredmsgtype, $msgtype, $maxsize, $message, $unserialize = true, $flags, $errorcode) {}