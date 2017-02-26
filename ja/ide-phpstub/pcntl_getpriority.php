/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.pcntl-getpriority.php
 * @param int $pid [optional] <p> TODO DESCRIPTION </p>
 * @param int $process_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return int pcntl_getpriority はプロセスの優先度を返します。
 * エラー時には FALSE を返します。数字が小さいほど、優先順位は上となります。pcntl_getpriorityFALSEこの関数は論理値
FALSE を返す可能性がありますが、FALSE として評価される値を返す可能性もあります。
詳細については 論理値の
セクションを参照してください。この関数の返り値を調べるには
===演算子 を
使用してください。この関数は論理値
FALSE を返す可能性がありますが、FALSE として評価される値を返す可能性もあります。
詳細については 論理値の
セクションを参照してください。この関数の返り値を調べるには
===演算子 を
使用してください。FALSEFALSE論理値===演算子
 */
function pcntl_getpriority($pid = getmypid(), $process_identifier = PRIO_PROCESS) {}