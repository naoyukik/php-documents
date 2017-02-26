/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.array-udiff-assoc.php
 * @param array $array1 [optional] <p> TODO DESCRIPTION </p>
 * @param array $array2 [optional] <p> TODO DESCRIPTION </p>
 * @param array $... [optional] <p> TODO DESCRIPTION </p>
 * @param callable $value_compare_func [optional] <p> TODO DESCRIPTION </p>
 * @return array array_udiff_assoc は、
 * array1 から他の引数の配列の中に現れない全ての値を含む
 * array を返します。
 * array_diff や array_udiff
 * と異なり、キーが比較に使用されることに注意してください。
 * 配列のデータの比較は、ユーザーが指定したコールバックを用いて行われます。
 * この点で、array_diff_assoc は反対の動作、つまり
 * 内部関数を利用した比較を行います。array_udiff_assocarray1arrayarray_diffarray_udiffarray_diff_assoc
 */
function array_udiff_assoc($array1, $array2, $..., $value_compare_func) {}