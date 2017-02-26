/**
 * @link http://php.net/manual/en/function.ingres-unbuffered-query.php
 * @param resource $link [optional] <p> TODO DESCRIPTION </p>
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param array $params [optional] <p> TODO DESCRIPTION </p>
 * @param string $types [optional] <p> TODO DESCRIPTION </p>
 * @return mixed ingres_unbuffered_query は、行を取得した場合にクエリ結果 ID
 * を返します。行がない場合、たとえば INSERT や UPDATE あるいは DELETE
 * 文を実行した場合は FALSE を返します。
 * エラーが発生したかどうかを知るには
 * ingres_errno、
 * ingres_error あるいは
 * ingres_errsqlstate を使用します。ingres_unbuffered_queryFALSEingres_errnoingres_erroringres_errsqlstate
 */
function ingres_unbuffered_query($link, $query, $params, $types) {}