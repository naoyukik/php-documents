/**
 * (PHP 4 >= 4.0.6, PHP 5 <= 5.0.5, PECL mnogosearch >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.udm-cat-path.php
 * @param resource $agent [optional] <p> TODO DESCRIPTION </p>
 * @param string $category [optional] <p> TODO DESCRIPTION </p>
 * @return array 返される配列は、組で構成されています。偶数添字番号の要素にはカテゴリパス、
 * 奇数要素には、対応するカテゴリ名が含まれます。たとえば、$array=udm_cat_path($agent, '02031D');
 * をコールすると以下のような配列を返します。
 * $array[0] will contain ''
 * $array[1] will contain 'Root'
 * $array[2] will contain '02'
 * $array[3] will contain 'Sport'
 * $array[4] will contain '0203'
 * $array[5] will contain 'Auto'
 * $array[4] will contain '02031D'
 * $array[5] will contain 'Ferrari'$array=udm_cat_path($agent, '02031D');$array[0] will contain ''
 * $array[1] will contain 'Root'
 * $array[2] will contain '02'
 * $array[3] will contain 'Sport'
 * $array[4] will contain '0203'
 * $array[5] will contain 'Auto'
 * $array[4] will contain '02031D'
 * $array[5] will contain 'Ferrari'
 */
function udm_cat_path($agent, $category) {}