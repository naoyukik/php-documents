/**
 * (PECL maxdb >= 1.0)<br/>
 * @link http://php.net/manual/en/function.maxdb-fetch-lengths.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @return array 各カラムの長さ (終端の null 文字を含まない) を表す整数値の配列、
 * あるいはエラー時には FALSE を返します。FALSEmaxdb_fetch_lengths は、
 * 結果セットの現在の行に対してのみ有効です。
 * maxdb_fetch_row/array/resource をコールする前や、
 * 結果セットのすべての行を取得した後にこの関数をコールすると、
 * FALSE を返します。maxdb_fetch_lengthsFALSE
 */
function maxdb_fetch_lengths($result) {}