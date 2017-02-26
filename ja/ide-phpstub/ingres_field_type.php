/**
 * (PHP 4 >= 4.0.2, PHP 5 <= 5.0.5, PECL ingres >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.ingres-field-type.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $index [optional] <p> TODO DESCRIPTION </p>
 * @return string ingres_field_type はクエリ結果のフィールド型、
 * 失敗した場合に FALSE を返します。返される型は、例えば、
 * IIAPI_BYTE_TYPE, IIAPI_CHA_TYPE, IIAPI_DTE_TYPE,
 * IIAPI_FLT_TYPE, IIAPI_INT_TYPE, IIAPI_VCH_TYPE になります。
 * これらの型のいくつかは、フィールド長に応じて複数の SQL 型を
 * マップすることが可能です(ingres_field_length
 * を参照ください)。例えば IIAPI_FLT_TYPE は、float4 または float8
 * とすることが可能です。詳細な情報については、Ingres
 * OpenAPI User Guide
 * の Appendix "Data Types" を参照ください。ingres_field_typeFALSEIIAPI_BYTE_TYPEIIAPI_CHA_TYPEIIAPI_DTE_TYPEIIAPI_FLT_TYPEIIAPI_INT_TYPEIIAPI_VCH_TYPEingres_field_lengthOpenAPI User Guide
 */
function ingres_field_type($result, $index) {}