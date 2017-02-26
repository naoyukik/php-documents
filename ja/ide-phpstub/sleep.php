/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.sleep.php
 * @param int $seconds [optional] <p> TODO DESCRIPTION </p>
 * @return int 成功した場合にゼロ、エラーが発生した場合に FALSE を返します。FALSEシグナルで中断した場合、sleep はゼロ以外の値を返します。
 * Windows では、この値は常に
 * 192 (Windows API の定数
 * WAIT_IO_COMPLETION の値) です。
 * その他のプラットフォームでは、残りの遅延秒数を返します。sleep192WAIT_IO_COMPLETION
 */
function sleep($seconds) {}