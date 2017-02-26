/**
 * @link http://php.net/manual/en/function.sqlsrv-field-metadata.php
 * @param resource $stmt [optional] <p> TODO DESCRIPTION </p>
 * @return mixed Returns an array of arrays is returned on success. Otherwise, FALSE is returned. 
 * Each returned array is described by the following table:
 * Array returned by sqlsrv_field_metadata
 * Key
 * Description
 * Name
 * The name of the field.
 * Type
 * The numeric value for the SQL type.
 * Size
 * The number of characters for fields of character type, the number of 
 * bytes for fields of binary type, or NULL for other types.
 * Precision
 * The precision for types of variable precision, NULL for other types.
 * Scale
 * The scale for types of variable scale, NULL for other types.
 * Nullable
 * An enumeration indicating whether the column is nullable, not nullable, 
 * or if it is not known.
 * For more information, see sqlsrv_field_metadata 
 * in the Microsoft SQLSRV documentation.FALSEArray returned by sqlsrv_field_metadata
 * Key
 * Description
 * Name
 * The name of the field.
 * Type
 * The numeric value for the SQL type.
 * Size
 * The number of characters for fields of character type, the number of 
 * bytes for fields of binary type, or NULL for other types.
 * Precision
 * The precision for types of variable precision, NULL for other types.
 * Scale
 * The scale for types of variable scale, NULL for other types.
 * Nullable
 * An enumeration indicating whether the column is nullable, not nullable, 
 * or if it is not known.Key
 * Description
 * Name
 * The name of the field.
 * Type
 * The numeric value for the SQL type.
 * Size
 * The number of characters for fields of character type, the number of 
 * bytes for fields of binary type, or NULL for other types.
 * Precision
 * The precision for types of variable precision, NULL for other types.
 * Scale
 * The scale for types of variable scale, NULL for other types.
 * Nullable
 * An enumeration indicating whether the column is nullable, not nullable, 
 * or if it is not known.Key
 * DescriptionKey
 * DescriptionKeyDescriptionName
 * The name of the field.
 * Type
 * The numeric value for the SQL type.
 * Size
 * The number of characters for fields of character type, the number of 
 * bytes for fields of binary type, or NULL for other types.
 * Precision
 * The precision for types of variable precision, NULL for other types.
 * Scale
 * The scale for types of variable scale, NULL for other types.
 * Nullable
 * An enumeration indicating whether the column is nullable, not nullable, 
 * or if it is not known.Name
 * The name of the field.NameThe name of the field.Type
 * The numeric value for the SQL type.TypeThe numeric value for the SQL type.Size
 * The number of characters for fields of character type, the number of 
 * bytes for fields of binary type, or NULL for other types.SizeThe number of characters for fields of character type, the number of 
 * bytes for fields of binary type, or NULL for other types.NULLPrecision
 * The precision for types of variable precision, NULL for other types.PrecisionThe precision for types of variable precision, NULL for other types.NULLScale
 * The scale for types of variable scale, NULL for other types.ScaleThe scale for types of variable scale, NULL for other types.NULLNullable
 * An enumeration indicating whether the column is nullable, not nullable, 
 * or if it is not known.NullableAn enumeration indicating whether the column is nullable, not nullable, 
 * or if it is not known.sqlsrv_field_metadata
 */
function sqlsrv_field_metadata($stmt) {}