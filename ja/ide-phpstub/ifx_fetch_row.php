/**
 * (PHP 4, PHP <=5.2.0)<br/>
 * @link http://php.net/manual/en/function.ifx-fetch-row.php
 * @param resource $result_id [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $position [optional] <p> TODO DESCRIPTION </p>
 * @return array 取得された行に対応する連想配列を返します。行がもうない場合には
 * FALSE を返します。FALSEBLOB カラムは、ifx_get_blob で使用するために
 * 整数値 BLOB ID として返されます。ただし、ifx_textasvarchar(1)
 * または ifx_byteasvarchar(1) を指定している場合を除きます。この場合、
 * BLOB は文字列として返されます。エラーの場合は FALSE が返されます。ifx_get_blobFALSE
 */
function ifx_fetch_row($result_id, $position) {}