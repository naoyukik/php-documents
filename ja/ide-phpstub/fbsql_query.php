/**
 * (PHP 4 >= 4.0.6, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.fbsql-query.php
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param resource $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @param int $batch_size [optional] <p> TODO DESCRIPTION </p>
 * @return resource fbsql_query は、クエリが成功したかどうかを
 * 示すために TRUE (非ゼロ) あるいは FALSE を返します。
 * 返り値が TRUE の場合、クエリは正しい形式であってサーバーで実行された
 * ことを示します。変更された行数や返された行数については何も示しません。
 * クエリが成功しても 1 行も変更しなかったり 1 行も返さなかったりすることは
 * 十分にありえることです。fbsql_queryTRUEFALSETRUESELECT 文の場合は fbsql_query は新しい結果 ID
 * を返し、これを fbsql_result に渡すことができます。fbsql_queryfbsql_resultクエリが参照しているテーブルへのアクセス権がない場合にも
 * fbsql_query は失敗し、FALSE を返します。fbsql_queryFALSE
 */
function fbsql_query($query, $link_identifier, $batch_size) {}