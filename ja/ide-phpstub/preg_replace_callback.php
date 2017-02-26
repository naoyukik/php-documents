/**
 * (PHP 4 >= 4.0.5, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.preg-replace-callback.php
 * @param mixed $pattern [optional] <p> TODO DESCRIPTION </p>
 * @param callable $callback [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $subject [optional] <p> TODO DESCRIPTION </p>
 * @param int $limit [optional] <p> TODO DESCRIPTION </p>
 * @param int $count [optional] <p> TODO DESCRIPTION </p>
 * @return mixed preg_replace_callback は、
 * subject が配列の場合には配列を、
 * それ以外の場合は文字列を返します。
 * エラー時の返り値は NULL となります。preg_replace_callbacksubjectNULLマッチするものが見つかった場合は新しい subject
 * を返し、それ以外の場合はもとの subject
 * をそのまま返します。subject
 */
function preg_replace_callback($pattern, $callback, $subject, $limit = -1, $count) {}