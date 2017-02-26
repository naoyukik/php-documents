/**
 * (PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)<br/>
 * @link http://php.net/manual/en/function.yaz-hits.php
 * @param resource $id [optional] <p> TODO DESCRIPTION </p>
 * @param array $searchresult [optional] <p> TODO DESCRIPTION </p>
 * @return int 直近の検索に関するヒット数を返します。検索が行われていない場合は
 * 0 を返します。検索結果配列がもし指定されていた場合、そこには Z39.50 サーバーが返す情報が
 * 含まれます。この情報の形式は、検索結果の応答の一部である
 * SearchResult-1 フォーマットとなります。
 * SearchResult-1 フォーマットは、さまざまなクエリ(サブクエリ)のヒット数に
 * 関する情報を取得するために使用可能です。
 * 特に、クエリ内の個々の検索語句に関するヒット数を得ることが可能です。
 * 最初のサブクエリについての情報が $array[0] に、2 番目のサブクエリについての
 * 情報が $array[1] に、というような形式となります。検索結果の項目
 * 要素
 * 説明
 * id
 * サブクエリの ID2 (string)
 * count
 * 結果のカウント / ヒット数 (integer)
 * subquery.term
 * サブクエリの語句 (string)
 * interpretation.term
 * 解釈されたサブクエリの語句 (string)
 * recommendation.term
 * 推奨されるサブクエリの語句 (string)要素
 * 説明
 * id
 * サブクエリの ID2 (string)
 * count
 * 結果のカウント / ヒット数 (integer)
 * subquery.term
 * サブクエリの語句 (string)
 * interpretation.term
 * 解釈されたサブクエリの語句 (string)
 * recommendation.term
 * 推奨されるサブクエリの語句 (string)要素
 * 説明要素
 * 説明要素説明id
 * サブクエリの ID2 (string)
 * count
 * 結果のカウント / ヒット数 (integer)
 * subquery.term
 * サブクエリの語句 (string)
 * interpretation.term
 * 解釈されたサブクエリの語句 (string)
 * recommendation.term
 * 推奨されるサブクエリの語句 (string)id
 * サブクエリの ID2 (string)ididサブクエリの ID2 (string)count
 * 結果のカウント / ヒット数 (integer)countcount結果のカウント / ヒット数 (integer)subquery.term
 * サブクエリの語句 (string)subquery.termsubquery.termサブクエリの語句 (string)interpretation.term
 * 解釈されたサブクエリの語句 (string)interpretation.terminterpretation.term解釈されたサブクエリの語句 (string)recommendation.term
 * 推奨されるサブクエリの語句 (string)recommendation.termrecommendation.term推奨されるサブクエリの語句 (string)SearchResult 機能を使用するには、PECL YAZ 1.0.5 以降
 * および YAZ 2.1.9 以降が必要です。SearchResult 機能を使用するには、PECL YAZ 1.0.5 以降
 * および YAZ 2.1.9 以降が必要です。SearchResult 機能をサポートしている Z39.50 実装は
 * ほとんどありません。SearchResult 機能をサポートしている Z39.50 実装は
 * ほとんどありません。
 */
function yaz_hits($id, $searchresult) {}