/**
 * (PHP 4 >= 4.0.6, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.fbsql-fetch-array.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $result_type [optional] <p> TODO DESCRIPTION </p>
 * @return array 取得した行に対応する配列を返します。行がもうない場合には
 * FALSE を返します。FALSE2 つ以上のカラムが同じ名前を持っている場合、最後にあらわれたカラムが
 * 優先されます。他のカラムにアクセスするには、カラムの数値インデックスを
 * 使用するか、カラムに別名をつける必要があります。
 * select t1.f1 as foo t2.f1 as bar from t1, t2select t1.f1 as foo t2.f1 as bar from t1, t2select t1.f1 as foo t2.f1 as bar from t1, t2
 */
function fbsql_fetch_array($result, $result_type) {}