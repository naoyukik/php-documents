/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.preg-replace.php
 * @param mixed $pattern [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $replacement [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $subject [optional] <p> TODO DESCRIPTION </p>
 * @param int $limit [optional] <p> TODO DESCRIPTION </p>
 * @param int $count [optional] <p> TODO DESCRIPTION </p>
 * @return mixed preg_replace は、
 * subject 引数が配列の場合は配列を、
 * その他の場合は文字列を返します。preg_replacesubjectパターンがマッチした場合、〔置換が行われた〕新しい subject
 * を返します。マッチしなかった場合、subject
 * をそのまま返します。エラーが発生した場合、NULL を返します。subjectsubjectNULL
 */
function preg_replace($pattern, $replacement, $subject, $limit = -1, $count) {}