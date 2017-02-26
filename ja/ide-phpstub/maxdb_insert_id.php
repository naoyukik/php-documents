/**
 * (PECL maxdb >= 1.0)<br/>
 * @link http://php.net/manual/en/function.maxdb-insert-id.php
 * @param resource $link [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 直近のクエリによって更新された DEFAULT SERIAL
 * フィールドの値を返します。直近のクエリがない場合、
 * あるいは直近のクエリが DEFAULT_SERIAL
 * を更新しなかった場合はゼロを返します。DEFAULT SERIALDEFAULT_SERIAL結果の数値が int の最大値をこえる場合は、maxdb_insert_id
 * は文字列を返します。結果の数値が int の最大値をこえる場合は、maxdb_insert_id
 * は文字列を返します。maxdb_insert_id
 */
function maxdb_insert_id($link) {}