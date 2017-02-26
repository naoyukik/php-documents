/**
 * (PECL ibm_db2 >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.db2-procedure-columns.php
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $schema [optional] <p> TODO DESCRIPTION </p>
 * @param string $procedure [optional] <p> TODO DESCRIPTION </p>
 * @param string $parameter [optional] <p> TODO DESCRIPTION </p>
 * @return resource 指定したパラメータに一致するストアドプロシージャのパラメータ情報を含む結果セットの
 * ステートメントリソースを返します。
 * 行の内容は、以下のカラムで構成されています。
 * カラム名
 * 説明
 * PROCEDURE_CAT
 * プロシージャを含むカタログ。テーブルがカタログを保持していない場合は NULL。
 * PROCEDURE_SCHEM
 * ストアドプロシージャを含むスキーマの名前。
 * PROCEDURE_NAME
 * プロシージャの名前。
 * COLUMN_NAME
 * パラメータの名前。
 * COLUMN_TYPE
 * パラメータの型を表す整数値。
 * 返される値
 * パラメータの型
 * 1 (SQL_PARAM_INPUT)
 * 入力 (IN) パラメータ。
 * 2 (SQL_PARAM_INPUT_OUTPUT)
 * 入力/出力 (INOUT) パラメータ。
 * 3 (SQL_PARAM_OUTPUT)
 * 出力 (OUT) パラメータ。
 * DATA_TYPE
 * パラメータの SQL データ型を表す整数値。
 * TYPE_NAME
 * パラメータのデータ型を表す文字列。
 * COLUMN_SIZE
 * パラメータのサイズを表す整数値。
 * BUFFER_LENGTH
 * このパラメータのデータを保存するために必要な最大バイト数。
 * DECIMAL_DIGITS
 * パラメータの位取り。位取りが適用できない場合は NULL。
 * NUM_PREC_RADIX
 * 10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。
 * NULLABLE
 * パラメータが null 値をとることができるかどうかを表す整数値。
 * REMARKS
 * パラメータの説明。
 * COLUMN_DEF
 * パラメータのデフォルト値。
 * SQL_DATA_TYPE
 * パラメータのサイズを表す整数値。
 * SQL_DATETIME_SUB
 * datetime 型のコードを表す整数値、
 * あるいはこれが適用できない SQL データ型である場合に NULL。
 * CHAR_OCTET_LENGTH
 * 文字型のパラメータにおける最大のオクテット数。
 * シングルバイト文字セットのデータの場合、これは COLUMN_SIZE
 * に一致します。文字型でないカラムの場合は NULL となります。
 * ORDINAL_POSITION
 * CALL 文の中でのパラメータの位置を表す、1 から始まるインデックス。
 * IS_NULLABLE
 * パラメータが null 値をとることができるかどうかを表す文字列。
 * 'YES' の場合は null 値をとることができ、
 * 'NO' の場合はできません。カラム名
 * 説明
 * PROCEDURE_CAT
 * プロシージャを含むカタログ。テーブルがカタログを保持していない場合は NULL。
 * PROCEDURE_SCHEM
 * ストアドプロシージャを含むスキーマの名前。
 * PROCEDURE_NAME
 * プロシージャの名前。
 * COLUMN_NAME
 * パラメータの名前。
 * COLUMN_TYPE
 * パラメータの型を表す整数値。
 * 返される値
 * パラメータの型
 * 1 (SQL_PARAM_INPUT)
 * 入力 (IN) パラメータ。
 * 2 (SQL_PARAM_INPUT_OUTPUT)
 * 入力/出力 (INOUT) パラメータ。
 * 3 (SQL_PARAM_OUTPUT)
 * 出力 (OUT) パラメータ。
 * DATA_TYPE
 * パラメータの SQL データ型を表す整数値。
 * TYPE_NAME
 * パラメータのデータ型を表す文字列。
 * COLUMN_SIZE
 * パラメータのサイズを表す整数値。
 * BUFFER_LENGTH
 * このパラメータのデータを保存するために必要な最大バイト数。
 * DECIMAL_DIGITS
 * パラメータの位取り。位取りが適用できない場合は NULL。
 * NUM_PREC_RADIX
 * 10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。
 * NULLABLE
 * パラメータが null 値をとることができるかどうかを表す整数値。
 * REMARKS
 * パラメータの説明。
 * COLUMN_DEF
 * パラメータのデフォルト値。
 * SQL_DATA_TYPE
 * パラメータのサイズを表す整数値。
 * SQL_DATETIME_SUB
 * datetime 型のコードを表す整数値、
 * あるいはこれが適用できない SQL データ型である場合に NULL。
 * CHAR_OCTET_LENGTH
 * 文字型のパラメータにおける最大のオクテット数。
 * シングルバイト文字セットのデータの場合、これは COLUMN_SIZE
 * に一致します。文字型でないカラムの場合は NULL となります。
 * ORDINAL_POSITION
 * CALL 文の中でのパラメータの位置を表す、1 から始まるインデックス。
 * IS_NULLABLE
 * パラメータが null 値をとることができるかどうかを表す文字列。
 * 'YES' の場合は null 値をとることができ、
 * 'NO' の場合はできません。カラム名
 * 説明
 * PROCEDURE_CAT
 * プロシージャを含むカタログ。テーブルがカタログを保持していない場合は NULL。
 * PROCEDURE_SCHEM
 * ストアドプロシージャを含むスキーマの名前。
 * PROCEDURE_NAME
 * プロシージャの名前。
 * COLUMN_NAME
 * パラメータの名前。
 * COLUMN_TYPE
 * パラメータの型を表す整数値。
 * 返される値
 * パラメータの型
 * 1 (SQL_PARAM_INPUT)
 * 入力 (IN) パラメータ。
 * 2 (SQL_PARAM_INPUT_OUTPUT)
 * 入力/出力 (INOUT) パラメータ。
 * 3 (SQL_PARAM_OUTPUT)
 * 出力 (OUT) パラメータ。
 * DATA_TYPE
 * パラメータの SQL データ型を表す整数値。
 * TYPE_NAME
 * パラメータのデータ型を表す文字列。
 * COLUMN_SIZE
 * パラメータのサイズを表す整数値。
 * BUFFER_LENGTH
 * このパラメータのデータを保存するために必要な最大バイト数。
 * DECIMAL_DIGITS
 * パラメータの位取り。位取りが適用できない場合は NULL。
 * NUM_PREC_RADIX
 * 10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。
 * NULLABLE
 * パラメータが null 値をとることができるかどうかを表す整数値。
 * REMARKS
 * パラメータの説明。
 * COLUMN_DEF
 * パラメータのデフォルト値。
 * SQL_DATA_TYPE
 * パラメータのサイズを表す整数値。
 * SQL_DATETIME_SUB
 * datetime 型のコードを表す整数値、
 * あるいはこれが適用できない SQL データ型である場合に NULL。
 * CHAR_OCTET_LENGTH
 * 文字型のパラメータにおける最大のオクテット数。
 * シングルバイト文字セットのデータの場合、これは COLUMN_SIZE
 * に一致します。文字型でないカラムの場合は NULL となります。
 * ORDINAL_POSITION
 * CALL 文の中でのパラメータの位置を表す、1 から始まるインデックス。
 * IS_NULLABLE
 * パラメータが null 値をとることができるかどうかを表す文字列。
 * 'YES' の場合は null 値をとることができ、
 * 'NO' の場合はできません。カラム名
 * 説明カラム名
 * 説明カラム名説明PROCEDURE_CAT
 * プロシージャを含むカタログ。テーブルがカタログを保持していない場合は NULL。
 * PROCEDURE_SCHEM
 * ストアドプロシージャを含むスキーマの名前。
 * PROCEDURE_NAME
 * プロシージャの名前。
 * COLUMN_NAME
 * パラメータの名前。
 * COLUMN_TYPE
 * パラメータの型を表す整数値。
 * 返される値
 * パラメータの型
 * 1 (SQL_PARAM_INPUT)
 * 入力 (IN) パラメータ。
 * 2 (SQL_PARAM_INPUT_OUTPUT)
 * 入力/出力 (INOUT) パラメータ。
 * 3 (SQL_PARAM_OUTPUT)
 * 出力 (OUT) パラメータ。
 * DATA_TYPE
 * パラメータの SQL データ型を表す整数値。
 * TYPE_NAME
 * パラメータのデータ型を表す文字列。
 * COLUMN_SIZE
 * パラメータのサイズを表す整数値。
 * BUFFER_LENGTH
 * このパラメータのデータを保存するために必要な最大バイト数。
 * DECIMAL_DIGITS
 * パラメータの位取り。位取りが適用できない場合は NULL。
 * NUM_PREC_RADIX
 * 10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。
 * NULLABLE
 * パラメータが null 値をとることができるかどうかを表す整数値。
 * REMARKS
 * パラメータの説明。
 * COLUMN_DEF
 * パラメータのデフォルト値。
 * SQL_DATA_TYPE
 * パラメータのサイズを表す整数値。
 * SQL_DATETIME_SUB
 * datetime 型のコードを表す整数値、
 * あるいはこれが適用できない SQL データ型である場合に NULL。
 * CHAR_OCTET_LENGTH
 * 文字型のパラメータにおける最大のオクテット数。
 * シングルバイト文字セットのデータの場合、これは COLUMN_SIZE
 * に一致します。文字型でないカラムの場合は NULL となります。
 * ORDINAL_POSITION
 * CALL 文の中でのパラメータの位置を表す、1 から始まるインデックス。
 * IS_NULLABLE
 * パラメータが null 値をとることができるかどうかを表す文字列。
 * 'YES' の場合は null 値をとることができ、
 * 'NO' の場合はできません。PROCEDURE_CAT
 * プロシージャを含むカタログ。テーブルがカタログを保持していない場合は NULL。PROCEDURE_CATプロシージャを含むカタログ。テーブルがカタログを保持していない場合は NULL。NULLPROCEDURE_SCHEM
 * ストアドプロシージャを含むスキーマの名前。PROCEDURE_SCHEMストアドプロシージャを含むスキーマの名前。PROCEDURE_NAME
 * プロシージャの名前。PROCEDURE_NAMEプロシージャの名前。COLUMN_NAME
 * パラメータの名前。COLUMN_NAMEパラメータの名前。COLUMN_TYPE
 * パラメータの型を表す整数値。
 * 返される値
 * パラメータの型
 * 1 (SQL_PARAM_INPUT)
 * 入力 (IN) パラメータ。
 * 2 (SQL_PARAM_INPUT_OUTPUT)
 * 入力/出力 (INOUT) パラメータ。
 * 3 (SQL_PARAM_OUTPUT)
 * 出力 (OUT) パラメータ。COLUMN_TYPEパラメータの型を表す整数値。
 * 返される値
 * パラメータの型
 * 1 (SQL_PARAM_INPUT)
 * 入力 (IN) パラメータ。
 * 2 (SQL_PARAM_INPUT_OUTPUT)
 * 入力/出力 (INOUT) パラメータ。
 * 3 (SQL_PARAM_OUTPUT)
 * 出力 (OUT) パラメータ。パラメータの型を表す整数値。
 * 返される値
 * パラメータの型
 * 1 (SQL_PARAM_INPUT)
 * 入力 (IN) パラメータ。
 * 2 (SQL_PARAM_INPUT_OUTPUT)
 * 入力/出力 (INOUT) パラメータ。
 * 3 (SQL_PARAM_OUTPUT)
 * 出力 (OUT) パラメータ。返される値
 * パラメータの型
 * 1 (SQL_PARAM_INPUT)
 * 入力 (IN) パラメータ。
 * 2 (SQL_PARAM_INPUT_OUTPUT)
 * 入力/出力 (INOUT) パラメータ。
 * 3 (SQL_PARAM_OUTPUT)
 * 出力 (OUT) パラメータ。返される値
 * パラメータの型
 * 1 (SQL_PARAM_INPUT)
 * 入力 (IN) パラメータ。
 * 2 (SQL_PARAM_INPUT_OUTPUT)
 * 入力/出力 (INOUT) パラメータ。
 * 3 (SQL_PARAM_OUTPUT)
 * 出力 (OUT) パラメータ。返される値
 * パラメータの型返される値
 * パラメータの型返される値パラメータの型1 (SQL_PARAM_INPUT)
 * 入力 (IN) パラメータ。
 * 2 (SQL_PARAM_INPUT_OUTPUT)
 * 入力/出力 (INOUT) パラメータ。
 * 3 (SQL_PARAM_OUTPUT)
 * 出力 (OUT) パラメータ。1 (SQL_PARAM_INPUT)
 * 入力 (IN) パラメータ。1 (SQL_PARAM_INPUT)入力 (IN) パラメータ。2 (SQL_PARAM_INPUT_OUTPUT)
 * 入力/出力 (INOUT) パラメータ。2 (SQL_PARAM_INPUT_OUTPUT)入力/出力 (INOUT) パラメータ。3 (SQL_PARAM_OUTPUT)
 * 出力 (OUT) パラメータ。3 (SQL_PARAM_OUTPUT)出力 (OUT) パラメータ。DATA_TYPE
 * パラメータの SQL データ型を表す整数値。DATA_TYPEパラメータの SQL データ型を表す整数値。TYPE_NAME
 * パラメータのデータ型を表す文字列。TYPE_NAMEパラメータのデータ型を表す文字列。COLUMN_SIZE
 * パラメータのサイズを表す整数値。COLUMN_SIZEパラメータのサイズを表す整数値。BUFFER_LENGTH
 * このパラメータのデータを保存するために必要な最大バイト数。BUFFER_LENGTHこのパラメータのデータを保存するために必要な最大バイト数。DECIMAL_DIGITS
 * パラメータの位取り。位取りが適用できない場合は NULL。DECIMAL_DIGITSパラメータの位取り。位取りが適用できない場合は NULL。NULLNUM_PREC_RADIX
 * 10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。NUM_PREC_RADIX10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。102NULLNULLABLE
 * パラメータが null 値をとることができるかどうかを表す整数値。NULLABLEパラメータが null 値をとることができるかどうかを表す整数値。REMARKS
 * パラメータの説明。REMARKSパラメータの説明。COLUMN_DEF
 * パラメータのデフォルト値。COLUMN_DEFパラメータのデフォルト値。SQL_DATA_TYPE
 * パラメータのサイズを表す整数値。SQL_DATA_TYPEパラメータのサイズを表す整数値。SQL_DATETIME_SUB
 * datetime 型のコードを表す整数値、
 * あるいはこれが適用できない SQL データ型である場合に NULL。SQL_DATETIME_SUBdatetime 型のコードを表す整数値、
 * あるいはこれが適用できない SQL データ型である場合に NULL。NULLCHAR_OCTET_LENGTH
 * 文字型のパラメータにおける最大のオクテット数。
 * シングルバイト文字セットのデータの場合、これは COLUMN_SIZE
 * に一致します。文字型でないカラムの場合は NULL となります。CHAR_OCTET_LENGTH文字型のパラメータにおける最大のオクテット数。
 * シングルバイト文字セットのデータの場合、これは COLUMN_SIZE
 * に一致します。文字型でないカラムの場合は NULL となります。NULLORDINAL_POSITION
 * CALL 文の中でのパラメータの位置を表す、1 から始まるインデックス。ORDINAL_POSITIONCALL 文の中でのパラメータの位置を表す、1 から始まるインデックス。IS_NULLABLE
 * パラメータが null 値をとることができるかどうかを表す文字列。
 * 'YES' の場合は null 値をとることができ、
 * 'NO' の場合はできません。IS_NULLABLEパラメータが null 値をとることができるかどうかを表す文字列。
 * 'YES' の場合は null 値をとることができ、
 * 'NO' の場合はできません。
 */
function db2_procedure_columns($connection, $qualifier, $schema, $procedure, $parameter) {}