/**
 * (PECL ibm_db2 >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.db2-columns.php
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $schema [optional] <p> TODO DESCRIPTION </p>
 * @param string $table-name [optional] <p> TODO DESCRIPTION </p>
 * @param string $column-name [optional] <p> TODO DESCRIPTION </p>
 * @return resource 指定したパラメータに一致するカラムの情報を含む結果セットの
 * ステートメントリソースを返します。
 * 行の内容は、以下のカラムで構成されています。
 * カラム名
 * 説明
 * TABLE_CAT
 * カタログの名前。テーブルがカタログを保持していない場合は NULL。
 * TABLE_SCHEM
 * スキーマの名前。
 * TABLE_NAME
 * テーブルあるいはビューの名前。
 * COLUMN_NAME
 * カラムの名前。
 * DATA_TYPE
 * カラムの SQL データ型を整数値で表したもの。
 * TYPE_NAME
 * カラムのデータ型を文字列で表したもの。
 * COLUMN_SIZE
 * カラムのサイズを表す整数値。
 * BUFFER_LENGTH
 * このカラムのデータを保存するために必要な最大のバイト数。
 * DECIMAL_DIGITS
 * カラムの位取り。位取りが適用できない場合は NULL。
 * NUM_PREC_RADIX
 * 10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。
 * NULLABLE
 * カラムが null 値をとることができるかどうかを表す整数値。
 * REMARKS
 * カラムの説明。
 * COLUMN_DEF
 * カラムのデフォルト値。
 * SQL_DATA_TYPE
 * カラムのサイズを表す整数値。
 * SQL_DATETIME_SUB
 * datetime 型のコードを表す整数値、
 * あるいはこれが適用できない SQL データ型である場合に NULL。
 * CHAR_OCTET_LENGTH
 * 文字型のカラムにおける最大のオクテット数。
 * シングルバイト文字セットのデータの場合、これは COLUMN_SIZE
 * に一致します。文字型でないカラムの場合は NULL となります。
 * ORDINAL_POSITION
 * テーブル内でのカラムの位置を表す、1 から始まるインデックス。
 * IS_NULLABLE
 * カラムが null 値をとることができるかどうかを表す文字列。
 * 'YES' の場合は null 値をとることができ、
 * 'NO' の場合はできません。カラム名
 * 説明
 * TABLE_CAT
 * カタログの名前。テーブルがカタログを保持していない場合は NULL。
 * TABLE_SCHEM
 * スキーマの名前。
 * TABLE_NAME
 * テーブルあるいはビューの名前。
 * COLUMN_NAME
 * カラムの名前。
 * DATA_TYPE
 * カラムの SQL データ型を整数値で表したもの。
 * TYPE_NAME
 * カラムのデータ型を文字列で表したもの。
 * COLUMN_SIZE
 * カラムのサイズを表す整数値。
 * BUFFER_LENGTH
 * このカラムのデータを保存するために必要な最大のバイト数。
 * DECIMAL_DIGITS
 * カラムの位取り。位取りが適用できない場合は NULL。
 * NUM_PREC_RADIX
 * 10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。
 * NULLABLE
 * カラムが null 値をとることができるかどうかを表す整数値。
 * REMARKS
 * カラムの説明。
 * COLUMN_DEF
 * カラムのデフォルト値。
 * SQL_DATA_TYPE
 * カラムのサイズを表す整数値。
 * SQL_DATETIME_SUB
 * datetime 型のコードを表す整数値、
 * あるいはこれが適用できない SQL データ型である場合に NULL。
 * CHAR_OCTET_LENGTH
 * 文字型のカラムにおける最大のオクテット数。
 * シングルバイト文字セットのデータの場合、これは COLUMN_SIZE
 * に一致します。文字型でないカラムの場合は NULL となります。
 * ORDINAL_POSITION
 * テーブル内でのカラムの位置を表す、1 から始まるインデックス。
 * IS_NULLABLE
 * カラムが null 値をとることができるかどうかを表す文字列。
 * 'YES' の場合は null 値をとることができ、
 * 'NO' の場合はできません。カラム名
 * 説明
 * TABLE_CAT
 * カタログの名前。テーブルがカタログを保持していない場合は NULL。
 * TABLE_SCHEM
 * スキーマの名前。
 * TABLE_NAME
 * テーブルあるいはビューの名前。
 * COLUMN_NAME
 * カラムの名前。
 * DATA_TYPE
 * カラムの SQL データ型を整数値で表したもの。
 * TYPE_NAME
 * カラムのデータ型を文字列で表したもの。
 * COLUMN_SIZE
 * カラムのサイズを表す整数値。
 * BUFFER_LENGTH
 * このカラムのデータを保存するために必要な最大のバイト数。
 * DECIMAL_DIGITS
 * カラムの位取り。位取りが適用できない場合は NULL。
 * NUM_PREC_RADIX
 * 10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。
 * NULLABLE
 * カラムが null 値をとることができるかどうかを表す整数値。
 * REMARKS
 * カラムの説明。
 * COLUMN_DEF
 * カラムのデフォルト値。
 * SQL_DATA_TYPE
 * カラムのサイズを表す整数値。
 * SQL_DATETIME_SUB
 * datetime 型のコードを表す整数値、
 * あるいはこれが適用できない SQL データ型である場合に NULL。
 * CHAR_OCTET_LENGTH
 * 文字型のカラムにおける最大のオクテット数。
 * シングルバイト文字セットのデータの場合、これは COLUMN_SIZE
 * に一致します。文字型でないカラムの場合は NULL となります。
 * ORDINAL_POSITION
 * テーブル内でのカラムの位置を表す、1 から始まるインデックス。
 * IS_NULLABLE
 * カラムが null 値をとることができるかどうかを表す文字列。
 * 'YES' の場合は null 値をとることができ、
 * 'NO' の場合はできません。カラム名
 * 説明カラム名
 * 説明カラム名説明TABLE_CAT
 * カタログの名前。テーブルがカタログを保持していない場合は NULL。
 * TABLE_SCHEM
 * スキーマの名前。
 * TABLE_NAME
 * テーブルあるいはビューの名前。
 * COLUMN_NAME
 * カラムの名前。
 * DATA_TYPE
 * カラムの SQL データ型を整数値で表したもの。
 * TYPE_NAME
 * カラムのデータ型を文字列で表したもの。
 * COLUMN_SIZE
 * カラムのサイズを表す整数値。
 * BUFFER_LENGTH
 * このカラムのデータを保存するために必要な最大のバイト数。
 * DECIMAL_DIGITS
 * カラムの位取り。位取りが適用できない場合は NULL。
 * NUM_PREC_RADIX
 * 10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。
 * NULLABLE
 * カラムが null 値をとることができるかどうかを表す整数値。
 * REMARKS
 * カラムの説明。
 * COLUMN_DEF
 * カラムのデフォルト値。
 * SQL_DATA_TYPE
 * カラムのサイズを表す整数値。
 * SQL_DATETIME_SUB
 * datetime 型のコードを表す整数値、
 * あるいはこれが適用できない SQL データ型である場合に NULL。
 * CHAR_OCTET_LENGTH
 * 文字型のカラムにおける最大のオクテット数。
 * シングルバイト文字セットのデータの場合、これは COLUMN_SIZE
 * に一致します。文字型でないカラムの場合は NULL となります。
 * ORDINAL_POSITION
 * テーブル内でのカラムの位置を表す、1 から始まるインデックス。
 * IS_NULLABLE
 * カラムが null 値をとることができるかどうかを表す文字列。
 * 'YES' の場合は null 値をとることができ、
 * 'NO' の場合はできません。TABLE_CAT
 * カタログの名前。テーブルがカタログを保持していない場合は NULL。TABLE_CATカタログの名前。テーブルがカタログを保持していない場合は NULL。TABLE_SCHEM
 * スキーマの名前。TABLE_SCHEMスキーマの名前。TABLE_NAME
 * テーブルあるいはビューの名前。TABLE_NAMEテーブルあるいはビューの名前。COLUMN_NAME
 * カラムの名前。COLUMN_NAMEカラムの名前。DATA_TYPE
 * カラムの SQL データ型を整数値で表したもの。DATA_TYPEカラムの SQL データ型を整数値で表したもの。TYPE_NAME
 * カラムのデータ型を文字列で表したもの。TYPE_NAMEカラムのデータ型を文字列で表したもの。COLUMN_SIZE
 * カラムのサイズを表す整数値。COLUMN_SIZEカラムのサイズを表す整数値。BUFFER_LENGTH
 * このカラムのデータを保存するために必要な最大のバイト数。BUFFER_LENGTHこのカラムのデータを保存するために必要な最大のバイト数。DECIMAL_DIGITS
 * カラムの位取り。位取りが適用できない場合は NULL。DECIMAL_DIGITSカラムの位取り。位取りが適用できない場合は NULL。NULLNUM_PREC_RADIX
 * 10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。NUM_PREC_RADIX10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。102NULLNULLABLE
 * カラムが null 値をとることができるかどうかを表す整数値。NULLABLEカラムが null 値をとることができるかどうかを表す整数値。REMARKS
 * カラムの説明。REMARKSカラムの説明。COLUMN_DEF
 * カラムのデフォルト値。COLUMN_DEFカラムのデフォルト値。SQL_DATA_TYPE
 * カラムのサイズを表す整数値。SQL_DATA_TYPEカラムのサイズを表す整数値。SQL_DATETIME_SUB
 * datetime 型のコードを表す整数値、
 * あるいはこれが適用できない SQL データ型である場合に NULL。SQL_DATETIME_SUBdatetime 型のコードを表す整数値、
 * あるいはこれが適用できない SQL データ型である場合に NULL。NULLCHAR_OCTET_LENGTH
 * 文字型のカラムにおける最大のオクテット数。
 * シングルバイト文字セットのデータの場合、これは COLUMN_SIZE
 * に一致します。文字型でないカラムの場合は NULL となります。CHAR_OCTET_LENGTH文字型のカラムにおける最大のオクテット数。
 * シングルバイト文字セットのデータの場合、これは COLUMN_SIZE
 * に一致します。文字型でないカラムの場合は NULL となります。NULLORDINAL_POSITION
 * テーブル内でのカラムの位置を表す、1 から始まるインデックス。ORDINAL_POSITIONテーブル内でのカラムの位置を表す、1 から始まるインデックス。IS_NULLABLE
 * カラムが null 値をとることができるかどうかを表す文字列。
 * 'YES' の場合は null 値をとることができ、
 * 'NO' の場合はできません。IS_NULLABLEカラムが null 値をとることができるかどうかを表す文字列。
 * 'YES' の場合は null 値をとることができ、
 * 'NO' の場合はできません。
 */
function db2_columns($connection, $qualifier, $schema, $table-name, $column-name) {}