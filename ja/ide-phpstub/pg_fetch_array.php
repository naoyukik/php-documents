/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.pg-fetch-array.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $row [optional] <p> TODO DESCRIPTION </p>
 * @param int $result_type [optional] <p> TODO DESCRIPTION </p>
 * @return array 0 から始まる数値添字の配列か連想配列（フィールド名をキーとする）、
 * あるいはその両方を返します。配列の各要素の値は文字列です。
 * データベースの NULL 値は、NULL として返します。NULLNULLrow が結果の行数より大きい場合や行が存在しない場合、
 * そしてそれ以外のエラーが発生した場合は FALSE を返します。rowFALSE
 */
function pg_fetch_array($result, $row, $result_type = PGSQL_BOTH) {}