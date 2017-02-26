/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/mysqli-result.lengths.php
 * @param mysqli_result $result [optional] <p> TODO DESCRIPTION </p>
 * @return array 各カラムのサイズ（終端の null 文字は含みません）を表す整数の配列を
 * 返します。エラー時には FALSE を返します。FALSEmysqli_fetch_lengths は、結果セットの現在の行に
 * ついてのみ有効です。mysqli_fetch_row/array/object をコールする前、あるいは
 * 結果のすべての行を取得した後にこの関数をコールすると、FALSE
 * を返します。mysqli_fetch_lengthsFALSE
 */
function mysqli_result.$lengths($result) {}