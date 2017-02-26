/**
 * (PHP 4 >= 4.2.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.pg-fetch-result.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $row [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $field [optional] <p> TODO DESCRIPTION </p>
 * @return string 論理型の値は "t" あるいは "f" の形式で返します。
 * 配列を含むそれ以外の型は、PostgreSQL のやりかたにしたがって文字列として
 * フォーマットされた形式で返します。これは psql
 * プログラムの出力と同じ形式です。データベースの NULL
 * 値は、NULL として返します。psqlNULLNULLrow が結果の行数より大きい場合、
 * あるいはそれ以外のエラーが発生した場合は FALSE を返します。rowFALSE
 */
function pg_fetch_result($result, $row, $field) {}