/**
 * (^)<br/>
 * @link http://php.net/manual/en/sdo-das-relational.executepreparedquery.php
 * @param PDO $database_handle [optional] <p> TODO DESCRIPTION </p>
 * @param PDOStatement $prepared_statement [optional] <p> TODO DESCRIPTION </p>
 * @param array $value_list [optional] <p> TODO DESCRIPTION </p>
 * @param array $column_specifier [optional] <p> TODO DESCRIPTION </p>
 * @return SDODataObject データグラフを返します。具体的には、特別な型のルートオブジェクトを返します。
 * このルートオブジェクトの下に、結果セットからのデータが格納されています。
 * ルートオブジェクトは複数の値を持つプロパティを持っており、
 * そのプロパティは、コンストラクタで指定した
 * アプリケーションのルート型と同じ名前になります。
 * また、そのプロパティの内容は、
 * アプリケーションのルート型のオブジェクトとなります。クエリがデータを返さなかった場合にも特別なルート型のオブジェクトが返されますが、
 * その中にあるアプリケーションルート型のプロパティの内容は空となります。
 */
function SDO_DAS_Relational.executePreparedQuery($database_handle, $prepared_statement, $value_list, $column_specifier) {}