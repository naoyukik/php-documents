/**
 * (PHP 5 >= 5.2.0, PHP 7)<br/>
 * @link http://php.net/manual/en/function.filter-input-array.php
 * @param int $type [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $definition [optional] <p> TODO DESCRIPTION </p>
 * @param bool $add_empty [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 成功した場合は要求された変数の値を含む配列、
 * あるいは失敗した場合に FALSE を返します。
 * 配列の値は、フィルタリングに失敗した場合には FALSE、
 * 変数が設定されていない場合は NULL となります。
 * フラグ FILTER_NULL_ON_FAILURE
 * が指定されている場合は、変数が設定されていないときに FALSE、
 * フィルタリングに失敗した場合に NULL となります。FALSEFALSENULLFILTER_NULL_ON_FAILUREFALSENULL
 */
function filter_input_array($type, $definition, $add_empty = true) {}