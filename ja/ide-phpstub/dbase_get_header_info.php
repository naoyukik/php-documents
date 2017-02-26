/**
 * (PHP 5 < 5.3.0, dbase 5, dbase 7)<br/>
 * @link http://php.net/manual/en/function.dbase-get-header-info.php
 * @param resource $dbase_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return array An indexed array with an entry for each column in the database. The array index
 * starts at 0.Each array element contains an associative array of column information, as
 * described here:
 * name
 * The name of the column
 * type
 * The human-readable name for the dbase type of the column (i.e. date,
 * boolean, etc.)
 * The supported field types are listed in the introduction section.
 * length
 * The number of bytes this column can hold
 * precision
 * The number of digits of decimal precision for the column
 * format
 * A suggested printf format specifier for the column
 * offset
 * The byte offset of the column from the start of the rowname
 * The name of the column
 * type
 * The human-readable name for the dbase type of the column (i.e. date,
 * boolean, etc.)
 * The supported field types are listed in the introduction section.
 * length
 * The number of bytes this column can hold
 * precision
 * The number of digits of decimal precision for the column
 * format
 * A suggested printf format specifier for the column
 * offset
 * The byte offset of the column from the start of the rowname
 * The name of the columnnameThe name of the columnThe name of the columntype
 * The human-readable name for the dbase type of the column (i.e. date,
 * boolean, etc.)
 * The supported field types are listed in the introduction section.typeThe human-readable name for the dbase type of the column (i.e. date,
 * boolean, etc.)
 * The supported field types are listed in the introduction section.The human-readable name for the dbase type of the column (i.e. date,
 * boolean, etc.)
 * The supported field types are listed in the introduction section.introduction sectionlength
 * The number of bytes this column can holdlengthThe number of bytes this column can holdThe number of bytes this column can holdprecision
 * The number of digits of decimal precision for the columnprecisionThe number of digits of decimal precision for the columnThe number of digits of decimal precision for the columnformat
 * A suggested printf format specifier for the columnformatA suggested printf format specifier for the columnA suggested printf format specifier for the columnprintfoffset
 * The byte offset of the column from the start of the rowoffsetThe byte offset of the column from the start of the rowThe byte offset of the column from the start of the rowIf the database header information cannot be read, FALSE is returned.FALSE
 */
function dbase_get_header_info($dbase_identifier) {}