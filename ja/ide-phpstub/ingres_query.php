/**
 * (PHP 4 >= 4.0.2, PHP 5 <= 5.0.5, PECL ingres >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.ingres-query.php
 * @param resource $link [optional] <p> TODO DESCRIPTION </p>
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param array $params [optional] <p> TODO DESCRIPTION </p>
 * @param string $types [optional] <p> TODO DESCRIPTION </p>
 * @return mixed ingres_query は、
 * 成功した場合にクエリ結果 ID、それ以外の場合に FALSE を返します。
 * エラーが発生したかどうかを知るには
 * ingres_errno、
 * ingres_error あるいは
 * ingres_errsqlstate を使用します。ingres_queryFALSEingres_errnoingres_erroringres_errsqlstate
 */
function ingres_query($link, $query, $params, $types) {}