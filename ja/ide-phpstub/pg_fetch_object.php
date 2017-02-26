/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.pg-fetch-object.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $row [optional] <p> TODO DESCRIPTION </p>
 * @param int $result_type [optional] <p> TODO DESCRIPTION </p>
 * @param string $class_name [optional] <p> TODO DESCRIPTION </p>
 * @param array $params [optional] <p> TODO DESCRIPTION </p>
 * @return object 結果の各フィールドに対応する属性を持つ object を返します。
 * データベースの NULL 値は NULL として返します。objectNULLNULLrow が結果の行数より大きい場合・行が存在しない場合
 * 、そしてそれ以外のエラーが発生した場合は FALSE を返します。rowFALSE
 */
function pg_fetch_object($result, $row, $result_type = PGSQL_ASSOC, $class_name, $params) {}