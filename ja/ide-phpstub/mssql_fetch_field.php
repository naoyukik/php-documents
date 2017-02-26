/**
 * (PHP 4, PHP 5, PECL odbtp >= 1.1.1)<br/>
 * @link http://php.net/manual/en/function.mssql-fetch-field.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $field_offset [optional] <p> TODO DESCRIPTION </p>
 * @return object フィールド情報を含むオブジェクトを返します。オブジェクトのプロパティは次のようになります。name - カラム名。カラムが関数の結果である場合、このプロパティは
 * computed#N に設定されます。ただし、#N はシリアル番号です。
 * column_source - そのカラムが取得されたテーブル
 * max_length - カラムの最大長
 * numeric - そのカラムが数字である場合に 1
 * type - カラムの型name - カラム名。カラムが関数の結果である場合、このプロパティは
 * computed#N に設定されます。ただし、#N はシリアル番号です。name - カラム名。カラムが関数の結果である場合、このプロパティは
 * computed#N に設定されます。ただし、#N はシリアル番号です。column_source - そのカラムが取得されたテーブルcolumn_source - そのカラムが取得されたテーブルmax_length - カラムの最大長max_length - カラムの最大長numeric - そのカラムが数字である場合に 1numeric - そのカラムが数字である場合に 1type - カラムの型type - カラムの型
 */
function mssql_fetch_field($result, $field_offset = -1) {}