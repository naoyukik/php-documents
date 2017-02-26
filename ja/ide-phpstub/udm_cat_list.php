/**
 * (PHP 4 >= 4.0.6, PHP 5 <= 5.0.5, PECL mnogosearch >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.udm-cat-list.php
 * @param resource $agent [optional] <p> TODO DESCRIPTION </p>
 * @param string $category [optional] <p> TODO DESCRIPTION </p>
 * @return array カテゴリツリーにおける現在の category
 * と同レベルのカテゴリの一覧を配列で返します。category返される配列は、組で構成されています。偶数添字番号の要素にはカテゴリパス、
 * 奇数要素には、対応するカテゴリ名が含まれます。$array[0] will contain '020300'
 * $array[1] will contain 'Audi'
 * $array[2] will contain '020301'
 * $array[3] will contain 'BMW'
 * $array[4] will contain '020302'
 * $array[5] will contain 'Opel'
 * ...
 * etc.
 */
function udm_cat_list($agent, $category) {}