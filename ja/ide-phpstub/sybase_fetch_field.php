/**
 * (PHP 4, PHP 5)<br/>
 * @link http://php.net/manual/en/function.sybase-fetch-field.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $field_offset [optional] <p> TODO DESCRIPTION </p>
 * @return object フィールド情報を含むオブジェクトを返します。オブジェクトのプロパティを以下に示します。name - カラム名。そのカラムがある関数の結果である場合、
 * このプロパティは、computed#N にセットされます。ただし、#N はシリアルナンバーです。
 * column_source - そのカラムが取り出されたテーブル
 * max_length - カラムの最大長
 * numeric - そのカラムが数値である場合に 1 
 * type - カラムのデータ型name - カラム名。そのカラムがある関数の結果である場合、
 * このプロパティは、computed#N にセットされます。ただし、#N はシリアルナンバーです。name - カラム名。そのカラムがある関数の結果である場合、
 * このプロパティは、computed#N にセットされます。ただし、#N はシリアルナンバーです。column_source - そのカラムが取り出されたテーブルcolumn_source - そのカラムが取り出されたテーブルmax_length - カラムの最大長max_length - カラムの最大長numeric - そのカラムが数値である場合に 1numeric - そのカラムが数値である場合に 1type - カラムのデータ型type - カラムのデータ型
 */
function sybase_fetch_field($result, $field_offset = -1) {}