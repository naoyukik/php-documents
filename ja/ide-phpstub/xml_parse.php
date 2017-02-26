/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.xml-parse.php
 * @param resource $parser [optional] <p> TODO DESCRIPTION </p>
 * @param string $data [optional] <p> TODO DESCRIPTION </p>
 * @param bool $is_final [optional] <p> TODO DESCRIPTION </p>
 * @return int 成功した場合に 1、失敗した場合に 0 を返します。処理が成功しなかった場合、エラー情報を
 * xml_get_error_code,
 * xml_error_string,
 * xml_get_current_line_number,
 * xml_get_current_column_number および
 * xml_get_current_byte_index
 * により取得可能です。xml_get_error_codexml_error_stringxml_get_current_line_numberxml_get_current_column_numberxml_get_current_byte_indexエンティティのエラーが報告されるのは、ドキュメントの最後
 * つまり is_final が TRUE に設定されている場合です。エンティティのエラーが報告されるのは、ドキュメントの最後
 * つまり is_final が TRUE に設定されている場合です。is_finalTRUE
 */
function xml_parse($parser, $data, $is_final = false) {}