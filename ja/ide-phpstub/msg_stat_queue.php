/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.msg-stat-queue.php
 * @param resource $queue [optional] <p> TODO DESCRIPTION </p>
 * @return array 返り値は配列で、そのキーと値は以下のような意味をもちます。
 * msg_stat_queue の配列構造
 * msg_perm.uid
 * キューの所有者の uid 。
 * msg_perm.gid
 * キューの所有者の gid 。
 * msg_perm.mode
 * キューのファイルアクセスモード。
 * msg_stime
 * キューに対して最後にメッセージが送信された時刻。
 * msg_rtime
 * キューから最後にメッセージを受信した時刻。
 * msg_ctime
 * キューが最後に更新された時刻。
 * msg_qnum
 * キューにある読み込み待ちのメッセージの数。
 * msg_qbytes
 * ひとつのメッセージキューに含められる最大のバイト数。
 * Linux では、この値の取得や設定を
 * /proc/sys/kernel/msgmnb で行えます。
 * msg_lspid
 * 最後にキューに対してメッセージを送信したプロセスの pid 。
 * msg_lrpid
 * 最後にキューからメッセージを受信したプロセスの pid 。msg_stat_queue の配列構造
 * msg_perm.uid
 * キューの所有者の uid 。
 * msg_perm.gid
 * キューの所有者の gid 。
 * msg_perm.mode
 * キューのファイルアクセスモード。
 * msg_stime
 * キューに対して最後にメッセージが送信された時刻。
 * msg_rtime
 * キューから最後にメッセージを受信した時刻。
 * msg_ctime
 * キューが最後に更新された時刻。
 * msg_qnum
 * キューにある読み込み待ちのメッセージの数。
 * msg_qbytes
 * ひとつのメッセージキューに含められる最大のバイト数。
 * Linux では、この値の取得や設定を
 * /proc/sys/kernel/msgmnb で行えます。
 * msg_lspid
 * 最後にキューに対してメッセージを送信したプロセスの pid 。
 * msg_lrpid
 * 最後にキューからメッセージを受信したプロセスの pid 。msg_perm.uid
 * キューの所有者の uid 。
 * msg_perm.gid
 * キューの所有者の gid 。
 * msg_perm.mode
 * キューのファイルアクセスモード。
 * msg_stime
 * キューに対して最後にメッセージが送信された時刻。
 * msg_rtime
 * キューから最後にメッセージを受信した時刻。
 * msg_ctime
 * キューが最後に更新された時刻。
 * msg_qnum
 * キューにある読み込み待ちのメッセージの数。
 * msg_qbytes
 * ひとつのメッセージキューに含められる最大のバイト数。
 * Linux では、この値の取得や設定を
 * /proc/sys/kernel/msgmnb で行えます。
 * msg_lspid
 * 最後にキューに対してメッセージを送信したプロセスの pid 。
 * msg_lrpid
 * 最後にキューからメッセージを受信したプロセスの pid 。msg_perm.uid
 * キューの所有者の uid 。
 * msg_perm.gid
 * キューの所有者の gid 。
 * msg_perm.mode
 * キューのファイルアクセスモード。
 * msg_stime
 * キューに対して最後にメッセージが送信された時刻。
 * msg_rtime
 * キューから最後にメッセージを受信した時刻。
 * msg_ctime
 * キューが最後に更新された時刻。
 * msg_qnum
 * キューにある読み込み待ちのメッセージの数。
 * msg_qbytes
 * ひとつのメッセージキューに含められる最大のバイト数。
 * Linux では、この値の取得や設定を
 * /proc/sys/kernel/msgmnb で行えます。
 * msg_lspid
 * 最後にキューに対してメッセージを送信したプロセスの pid 。
 * msg_lrpid
 * 最後にキューからメッセージを受信したプロセスの pid 。msg_perm.uid
 * キューの所有者の uid 。msg_perm.uidmsg_perm.uidキューの所有者の uid 。msg_perm.gid
 * キューの所有者の gid 。msg_perm.gidmsg_perm.gidキューの所有者の gid 。msg_perm.mode
 * キューのファイルアクセスモード。msg_perm.modemsg_perm.modeキューのファイルアクセスモード。msg_stime
 * キューに対して最後にメッセージが送信された時刻。msg_stimemsg_stimeキューに対して最後にメッセージが送信された時刻。msg_rtime
 * キューから最後にメッセージを受信した時刻。msg_rtimemsg_rtimeキューから最後にメッセージを受信した時刻。msg_ctime
 * キューが最後に更新された時刻。msg_ctimemsg_ctimeキューが最後に更新された時刻。msg_qnum
 * キューにある読み込み待ちのメッセージの数。msg_qnummsg_qnumキューにある読み込み待ちのメッセージの数。msg_qbytes
 * ひとつのメッセージキューに含められる最大のバイト数。
 * Linux では、この値の取得や設定を
 * /proc/sys/kernel/msgmnb で行えます。msg_qbytesmsg_qbytesひとつのメッセージキューに含められる最大のバイト数。
 * Linux では、この値の取得や設定を
 * /proc/sys/kernel/msgmnb で行えます。/proc/sys/kernel/msgmnbmsg_lspid
 * 最後にキューに対してメッセージを送信したプロセスの pid 。msg_lspidmsg_lspid最後にキューに対してメッセージを送信したプロセスの pid 。msg_lrpid
 * 最後にキューからメッセージを受信したプロセスの pid 。msg_lrpidmsg_lrpid最後にキューからメッセージを受信したプロセスの pid 。
 */
function msg_stat_queue($queue) {}