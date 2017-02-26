/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.proc-get-status.php
 * @param resource $process [optional] <p> TODO DESCRIPTION </p>
 * @return array 成功時は集められた情報の配列、失敗時は FALSE 。
 * 返される配列は次のような要素を持ちます:配列FALSE要素型説明
 * command
 * string
 * proc_open に指定されたコマンド文字列。
 * pid
 * int
 * プロセス ID
 * running
 * bool
 * もしプロセスがまだ動いている場合は、TRUE 、すでに終了している場合は
 * FALSE。
 * signaled
 * bool
 * 子プロセスが、キャッチされていないシグナルにより終了した場合に
 * TRUE となります。Windows では常に FALSE にセットされます。
 * stopped
 * bool
 * 子プロセスが、シグナルにより停止した時に TRUE となります。
 * Windows では常に FALSE にセットされます。
 * exitcode
 * int
 * プロセスが返した終了コード
 * (running が FALSE の時のみ意味を持ちます)。
 * 正しい値を返すのは関数を最初にコールした時のみで、次に
 * コールした際には -1 を返します。
 * termsig
 * int
 * プロセスを終了させたシグナルの番号です (signaled が
 * TRUE の時のみ意味を持ちます)。
 * stopsig
 * int
 * プロセスを停止させたシグナルの番号です (stopped が
 * TRUE の時のみ意味を持ちます)。要素型説明
 * command
 * string
 * proc_open に指定されたコマンド文字列。
 * pid
 * int
 * プロセス ID
 * running
 * bool
 * もしプロセスがまだ動いている場合は、TRUE 、すでに終了している場合は
 * FALSE。
 * signaled
 * bool
 * 子プロセスが、キャッチされていないシグナルにより終了した場合に
 * TRUE となります。Windows では常に FALSE にセットされます。
 * stopped
 * bool
 * 子プロセスが、シグナルにより停止した時に TRUE となります。
 * Windows では常に FALSE にセットされます。
 * exitcode
 * int
 * プロセスが返した終了コード
 * (running が FALSE の時のみ意味を持ちます)。
 * 正しい値を返すのは関数を最初にコールした時のみで、次に
 * コールした際には -1 を返します。
 * termsig
 * int
 * プロセスを終了させたシグナルの番号です (signaled が
 * TRUE の時のみ意味を持ちます)。
 * stopsig
 * int
 * プロセスを停止させたシグナルの番号です (stopped が
 * TRUE の時のみ意味を持ちます)。要素型説明
 * command
 * string
 * proc_open に指定されたコマンド文字列。
 * pid
 * int
 * プロセス ID
 * running
 * bool
 * もしプロセスがまだ動いている場合は、TRUE 、すでに終了している場合は
 * FALSE。
 * signaled
 * bool
 * 子プロセスが、キャッチされていないシグナルにより終了した場合に
 * TRUE となります。Windows では常に FALSE にセットされます。
 * stopped
 * bool
 * 子プロセスが、シグナルにより停止した時に TRUE となります。
 * Windows では常に FALSE にセットされます。
 * exitcode
 * int
 * プロセスが返した終了コード
 * (running が FALSE の時のみ意味を持ちます)。
 * 正しい値を返すのは関数を最初にコールした時のみで、次に
 * コールした際には -1 を返します。
 * termsig
 * int
 * プロセスを終了させたシグナルの番号です (signaled が
 * TRUE の時のみ意味を持ちます)。
 * stopsig
 * int
 * プロセスを停止させたシグナルの番号です (stopped が
 * TRUE の時のみ意味を持ちます)。要素型説明要素型説明要素型説明command
 * string
 * proc_open に指定されたコマンド文字列。
 * pid
 * int
 * プロセス ID
 * running
 * bool
 * もしプロセスがまだ動いている場合は、TRUE 、すでに終了している場合は
 * FALSE。
 * signaled
 * bool
 * 子プロセスが、キャッチされていないシグナルにより終了した場合に
 * TRUE となります。Windows では常に FALSE にセットされます。
 * stopped
 * bool
 * 子プロセスが、シグナルにより停止した時に TRUE となります。
 * Windows では常に FALSE にセットされます。
 * exitcode
 * int
 * プロセスが返した終了コード
 * (running が FALSE の時のみ意味を持ちます)。
 * 正しい値を返すのは関数を最初にコールした時のみで、次に
 * コールした際には -1 を返します。
 * termsig
 * int
 * プロセスを終了させたシグナルの番号です (signaled が
 * TRUE の時のみ意味を持ちます)。
 * stopsig
 * int
 * プロセスを停止させたシグナルの番号です (stopped が
 * TRUE の時のみ意味を持ちます)。command
 * string
 * proc_open に指定されたコマンド文字列。commandstringstringproc_open に指定されたコマンド文字列。proc_openpid
 * int
 * プロセス IDpidintintプロセス IDrunning
 * bool
 * もしプロセスがまだ動いている場合は、TRUE 、すでに終了している場合は
 * FALSE。runningboolboolもしプロセスがまだ動いている場合は、TRUE 、すでに終了している場合は
 * FALSE。TRUEFALSEsignaled
 * bool
 * 子プロセスが、キャッチされていないシグナルにより終了した場合に
 * TRUE となります。Windows では常に FALSE にセットされます。signaledboolbool子プロセスが、キャッチされていないシグナルにより終了した場合に
 * TRUE となります。Windows では常に FALSE にセットされます。TRUEFALSEstopped
 * bool
 * 子プロセスが、シグナルにより停止した時に TRUE となります。
 * Windows では常に FALSE にセットされます。stoppedboolbool子プロセスが、シグナルにより停止した時に TRUE となります。
 * Windows では常に FALSE にセットされます。TRUEFALSEexitcode
 * int
 * プロセスが返した終了コード
 * (running が FALSE の時のみ意味を持ちます)。
 * 正しい値を返すのは関数を最初にコールした時のみで、次に
 * コールした際には -1 を返します。exitcodeintintプロセスが返した終了コード
 * (running が FALSE の時のみ意味を持ちます)。
 * 正しい値を返すのは関数を最初にコールした時のみで、次に
 * コールした際には -1 を返します。runningFALSE-1termsig
 * int
 * プロセスを終了させたシグナルの番号です (signaled が
 * TRUE の時のみ意味を持ちます)。termsigintintプロセスを終了させたシグナルの番号です (signaled が
 * TRUE の時のみ意味を持ちます)。signaledTRUEstopsig
 * int
 * プロセスを停止させたシグナルの番号です (stopped が
 * TRUE の時のみ意味を持ちます)。stopsigintintプロセスを停止させたシグナルの番号です (stopped が
 * TRUE の時のみ意味を持ちます)。stoppedTRUE
 */
function proc_get_status($process) {}