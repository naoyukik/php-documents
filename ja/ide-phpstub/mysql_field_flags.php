/**
 * (PHP 4, PHP 5)<br/>
 * @link http://php.net/manual/en/function.mysql-field-flags.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $field_offset [optional] <p> TODO DESCRIPTION </p>
 * @return string 結果についてのフラグを文字列で返します。失敗した場合に FALSE を返します。FALSE運用システム上のMySQLがサポートしている場合、次のフラグがレポート
 * されます。 "not_null", 
 * "primary_key", "unique_key", 
 * "multiple_key", "blob", 
 * "unsigned", "zerofill",
 * "binary", "enum", 
 * "auto_increment" そして "timestamp""not_null""primary_key""unique_key""multiple_key""blob""unsigned""zerofill""binary""enum""auto_increment""timestamp"
 */
function mysql_field_flags($result, $field_offset) {}