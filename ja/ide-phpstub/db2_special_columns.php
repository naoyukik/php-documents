/**
 * (PECL ibm_db2 >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.db2-special-columns.php
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $schema [optional] <p> TODO DESCRIPTION </p>
 * @param string $table_name [optional] <p> TODO DESCRIPTION </p>
 * @param int $scope [optional] <p> TODO DESCRIPTION </p>
 * @return resource テーブルのユニーク行 ID 情報を含む結果セットの
 * ステートメントリソースを返します。
 * 行の内容は、以下のカラムで構成されています。
 * カラム名
 * 説明
 * SCOPE
 * 整数値
 * SQL 定数
 * 説明
 * 0
 * SQL_SCOPE_CURROW
 * 行 ID は、カーソルがその行にある場合にのみ有効です。
 * 1
 * SQL_SCOPE_TRANSACTION
 * 行 ID は、そのトランザクションの間のみ有効です。
 * 2
 * SQL_SCOPE_SESSION
 * 行 ID は、その接続の間のみ有効です。
 * COLUMN_NAME
 * ユニークカラムの名前。
 * DATA_TYPE
 * カラムの SQL データ型。
 * TYPE_NAME
 * カラムの SQL データ型を文字列で表したもの。
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
 * PSEUDO_COLUMN
 * 常に 1 を返します。カラム名
 * 説明
 * SCOPE
 * 整数値
 * SQL 定数
 * 説明
 * 0
 * SQL_SCOPE_CURROW
 * 行 ID は、カーソルがその行にある場合にのみ有効です。
 * 1
 * SQL_SCOPE_TRANSACTION
 * 行 ID は、そのトランザクションの間のみ有効です。
 * 2
 * SQL_SCOPE_SESSION
 * 行 ID は、その接続の間のみ有効です。
 * COLUMN_NAME
 * ユニークカラムの名前。
 * DATA_TYPE
 * カラムの SQL データ型。
 * TYPE_NAME
 * カラムの SQL データ型を文字列で表したもの。
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
 * PSEUDO_COLUMN
 * 常に 1 を返します。カラム名
 * 説明
 * SCOPE
 * 整数値
 * SQL 定数
 * 説明
 * 0
 * SQL_SCOPE_CURROW
 * 行 ID は、カーソルがその行にある場合にのみ有効です。
 * 1
 * SQL_SCOPE_TRANSACTION
 * 行 ID は、そのトランザクションの間のみ有効です。
 * 2
 * SQL_SCOPE_SESSION
 * 行 ID は、その接続の間のみ有効です。
 * COLUMN_NAME
 * ユニークカラムの名前。
 * DATA_TYPE
 * カラムの SQL データ型。
 * TYPE_NAME
 * カラムの SQL データ型を文字列で表したもの。
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
 * PSEUDO_COLUMN
 * 常に 1 を返します。カラム名
 * 説明カラム名
 * 説明カラム名説明SCOPE
 * 整数値
 * SQL 定数
 * 説明
 * 0
 * SQL_SCOPE_CURROW
 * 行 ID は、カーソルがその行にある場合にのみ有効です。
 * 1
 * SQL_SCOPE_TRANSACTION
 * 行 ID は、そのトランザクションの間のみ有効です。
 * 2
 * SQL_SCOPE_SESSION
 * 行 ID は、その接続の間のみ有効です。
 * COLUMN_NAME
 * ユニークカラムの名前。
 * DATA_TYPE
 * カラムの SQL データ型。
 * TYPE_NAME
 * カラムの SQL データ型を文字列で表したもの。
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
 * PSEUDO_COLUMN
 * 常に 1 を返します。SCOPE
 * 整数値
 * SQL 定数
 * 説明
 * 0
 * SQL_SCOPE_CURROW
 * 行 ID は、カーソルがその行にある場合にのみ有効です。
 * 1
 * SQL_SCOPE_TRANSACTION
 * 行 ID は、そのトランザクションの間のみ有効です。
 * 2
 * SQL_SCOPE_SESSION
 * 行 ID は、その接続の間のみ有効です。SCOPE整数値
 * SQL 定数
 * 説明
 * 0
 * SQL_SCOPE_CURROW
 * 行 ID は、カーソルがその行にある場合にのみ有効です。
 * 1
 * SQL_SCOPE_TRANSACTION
 * 行 ID は、そのトランザクションの間のみ有効です。
 * 2
 * SQL_SCOPE_SESSION
 * 行 ID は、その接続の間のみ有効です。整数値
 * SQL 定数
 * 説明
 * 0
 * SQL_SCOPE_CURROW
 * 行 ID は、カーソルがその行にある場合にのみ有効です。
 * 1
 * SQL_SCOPE_TRANSACTION
 * 行 ID は、そのトランザクションの間のみ有効です。
 * 2
 * SQL_SCOPE_SESSION
 * 行 ID は、その接続の間のみ有効です。整数値
 * SQL 定数
 * 説明
 * 0
 * SQL_SCOPE_CURROW
 * 行 ID は、カーソルがその行にある場合にのみ有効です。
 * 1
 * SQL_SCOPE_TRANSACTION
 * 行 ID は、そのトランザクションの間のみ有効です。
 * 2
 * SQL_SCOPE_SESSION
 * 行 ID は、その接続の間のみ有効です。整数値
 * SQL 定数
 * 説明
 * 0
 * SQL_SCOPE_CURROW
 * 行 ID は、カーソルがその行にある場合にのみ有効です。
 * 1
 * SQL_SCOPE_TRANSACTION
 * 行 ID は、そのトランザクションの間のみ有効です。
 * 2
 * SQL_SCOPE_SESSION
 * 行 ID は、その接続の間のみ有効です。整数値
 * SQL 定数
 * 説明整数値
 * SQL 定数
 * 説明整数値SQL 定数説明0
 * SQL_SCOPE_CURROW
 * 行 ID は、カーソルがその行にある場合にのみ有効です。
 * 1
 * SQL_SCOPE_TRANSACTION
 * 行 ID は、そのトランザクションの間のみ有効です。
 * 2
 * SQL_SCOPE_SESSION
 * 行 ID は、その接続の間のみ有効です。0
 * SQL_SCOPE_CURROW
 * 行 ID は、カーソルがその行にある場合にのみ有効です。0SQL_SCOPE_CURROW行 ID は、カーソルがその行にある場合にのみ有効です。1
 * SQL_SCOPE_TRANSACTION
 * 行 ID は、そのトランザクションの間のみ有効です。1SQL_SCOPE_TRANSACTION行 ID は、そのトランザクションの間のみ有効です。2
 * SQL_SCOPE_SESSION
 * 行 ID は、その接続の間のみ有効です。2SQL_SCOPE_SESSION行 ID は、その接続の間のみ有効です。COLUMN_NAME
 * ユニークカラムの名前。COLUMN_NAMEユニークカラムの名前。DATA_TYPE
 * カラムの SQL データ型。DATA_TYPEカラムの SQL データ型。TYPE_NAME
 * カラムの SQL データ型を文字列で表したもの。TYPE_NAMEカラムの SQL データ型を文字列で表したもの。COLUMN_SIZE
 * カラムのサイズを表す整数値。COLUMN_SIZEカラムのサイズを表す整数値。BUFFER_LENGTH
 * このカラムのデータを保存するために必要な最大のバイト数。BUFFER_LENGTHこのカラムのデータを保存するために必要な最大のバイト数。DECIMAL_DIGITS
 * カラムの位取り。位取りが適用できない場合は NULL。DECIMAL_DIGITSカラムの位取り。位取りが適用できない場合は NULL。NULLNUM_PREC_RADIX
 * 10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。NUM_PREC_RADIX10 (正確な数値データ型を表す)、
 * 2 (概数データ型を表す)、
 * あるいは NULL (基数が適用できないデータ型を表す)
 * のいずれか。102NULLPSEUDO_COLUMN
 * 常に 1 を返します。PSEUDO_COLUMN常に 1 を返します。
 */
function db2_special_columns($connection, $qualifier, $schema, $table_name, $scope) {}