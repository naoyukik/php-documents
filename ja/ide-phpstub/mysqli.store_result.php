/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/mysqli.store-result.php
 * @param int $option [optional] <p> TODO DESCRIPTION </p>
 * @param mysqli $link [optional] <p> TODO DESCRIPTION </p>
 * @return mysqli_result バッファに格納した結果オブジェクトを返します。エラー時には FALSE を返します。FALSEmysqli_store_result は、クエリが結果セットを
 * 返さなかった場合（例えば、クエリが INSERT 文であった場合）に
 * FALSE を返します。また、結果セットの読み込みに失敗した場合にも
 * FALSE を返します。エラーが発生したかどうかを調べるには、
 * mysqli_error が空文字列以外を返す・
 * mysqli_errno がゼロ以外の値を返す・あるいは
 * mysqli_field_count がゼロ以外の値を返す
 * のいずれかを確認します。それ以外にこの関数が FALSE を返す理由としては
 * mysqli_query のコールに成功して返された
 * 結果セットが大きすぎる（メモリに割り当てられない）場合がありえます。
 * もし mysqli_field_count がゼロ以外の値を
 * 返した場合、文は空でない結果セットを生成しています。mysqli_store_result は、クエリが結果セットを
 * 返さなかった場合（例えば、クエリが INSERT 文であった場合）に
 * FALSE を返します。また、結果セットの読み込みに失敗した場合にも
 * FALSE を返します。エラーが発生したかどうかを調べるには、
 * mysqli_error が空文字列以外を返す・
 * mysqli_errno がゼロ以外の値を返す・あるいは
 * mysqli_field_count がゼロ以外の値を返す
 * のいずれかを確認します。それ以外にこの関数が FALSE を返す理由としては
 * mysqli_query のコールに成功して返された
 * 結果セットが大きすぎる（メモリに割り当てられない）場合がありえます。
 * もし mysqli_field_count がゼロ以外の値を
 * 返した場合、文は空でない結果セットを生成しています。mysqli_store_resultFALSEFALSEmysqli_errormysqli_errnomysqli_field_countFALSEmysqli_querymysqli_field_count
 */
function mysqli.store_result($option, $link) {}