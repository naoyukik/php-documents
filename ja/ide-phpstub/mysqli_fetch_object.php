/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/mysqli-result.fetch-object.php
 * @param string $class_name [optional] <p> TODO DESCRIPTION </p>
 * @param array $params [optional] <p> TODO DESCRIPTION </p>
 * @param mysqli_result $result [optional] <p> TODO DESCRIPTION </p>
 * @return object 取得した行に対応する文字列プロパティを有するオブジェクトを返します。
 * もし結果セットにもう行がない場合には NULL を返します。NULLこの関数により返されるフィー
ルド名は 大文字小文字を区別 します。この関数により返されるフィー
ルド名は 大文字小文字を区別 します。大文字小文字を区別この関数は、
NULL フィールドに PHPの NULL 値を設定します。この関数は、
NULL フィールドに PHPの NULL 値を設定します。NULL
 */
function mysqli_fetch_object($class_name = "stdClass", $params, $result) {}