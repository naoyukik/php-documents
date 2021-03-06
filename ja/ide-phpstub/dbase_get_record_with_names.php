/**
 * (PHP 5 < 5.3.0, dbase 5, dbase 7)<br/>
 * @link http://php.net/manual/en/function.dbase-get-record-with-names.php
 * @param resource $dbase_identifier [optional] <p> TODO DESCRIPTION </p>
 * @param int $record_number [optional] <p> TODO DESCRIPTION </p>
 * @return array An associative array with the record. This will also include a key named 
 * deleted which is set to 1 if the record has been marked
 * for deletion (see dbase_delete_record).
 * Therefore it is not possible to retrieve the value of a field named
 * deleted with this function.deleteddbase_delete_recorddeleted各フィールドは適切な PHP の型に変換されますが、以下に挙げる例外があります。
 * Date は文字列のままになります。
 * DateTime は文字列に変換されます。
 * PHP_INT_MIN..PHP_INT_MAX
 * の範囲外の Integer は文字列になります。
 * dbase 7.0.0 より前のバージョンでは、boolean (L) が
 * 1 あるいは 0 に変換されていました。Date は文字列のままになります。
 * DateTime は文字列に変換されます。
 * PHP_INT_MIN..PHP_INT_MAX
 * の範囲外の Integer は文字列になります。
 * dbase 7.0.0 より前のバージョンでは、boolean (L) が
 * 1 あるいは 0 に変換されていました。Date は文字列のままになります。Date は文字列のままになります。DateTime は文字列に変換されます。DateTime は文字列に変換されます。PHP_INT_MIN..PHP_INT_MAX
 * の範囲外の Integer は文字列になります。PHP_INT_MIN..PHP_INT_MAX
 * の範囲外の Integer は文字列になります。PHP_INT_MINPHP_INT_MAXdbase 7.0.0 より前のバージョンでは、boolean (L) が
 * 1 あるいは 0 に変換されていました。dbase 7.0.0 より前のバージョンでは、boolean (L) が
 * 1 あるいは 0 に変換されていました。L10On error, dbase_get_record_with_names will return FALSE.dbase_get_record_with_namesFALSE
 */
function dbase_get_record_with_names($dbase_identifier, $record_number) {}