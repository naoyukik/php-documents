/**
 * (PHP 4, PHP 5)<br/>
 * @link http://php.net/manual/en/function.mysql-fetch-array.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $result_type [optional] <p> TODO DESCRIPTION </p>
 * @return array 取得した行をあらわす文字列の配列を返します。もし行が存在しない場合は FALSE
 * を返します。返される配列の形式は、result_type
 * がどのように指定されているかによります。MYSQL_BOTH（デフォルト）
 * を利用すると、連想添字と数値添字を共に持つ配列を取得します。
 * MYSQL_ASSOC を利用すると（
 * mysql_fetch_assoc の動作と同様に）連想添字のみが取得され、
 * MYSQL_NUM を利用すると
 * （mysql_fetch_row の動作と同様に）数値添字のみが
 * 取得されます。FALSEresult_typeMYSQL_BOTHMYSQL_ASSOCmysql_fetch_assocMYSQL_NUMmysql_fetch_row結果の中で同じフィールド名のカラムが 2 つ以上ある場合、
 * 最後のカラムが優先されます。
 * 同名の他のカラムにアクセスするには、そのカラムの数値インデックスを
 * 使うかまたはカラムの別名を定義する必要があります。
 * カラムの別名を定義した場合は、本来の列名でそのカラムにアクセスすることは
 * できません。
 */
function mysql_fetch_array($result, $result_type = MYSQL_BOTH) {}