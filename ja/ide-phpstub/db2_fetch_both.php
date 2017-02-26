/**
 * (PECL ibm_db2 >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.db2-fetch-both.php
 * @param resource $stmt [optional] <p> TODO DESCRIPTION </p>
 * @param int $row_number [optional] <p> TODO DESCRIPTION </p>
 * @return array 結果セットの次の行あるいは要求した行のデータを表す、
 * カラム名および (0 から始まる) カラム番号の両方をインデックスとした連想配列を返します。
 * 結果セットに行がもうない場合、あるいは
 * row_number
 * で指定された行が結果セットに存在しない場合に FALSE を返します。row_numberFALSE
 */
function db2_fetch_both($stmt, $row_number = -1) {}