/**
 * (PECL ibm_db2 >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.db2-foreign-keys.php
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $schema [optional] <p> TODO DESCRIPTION </p>
 * @param string $table-name [optional] <p> TODO DESCRIPTION </p>
 * @return resource 指定したテーブルの外部キーを含む結果セットのステートメントリソースを返します。
 * 結果セットは、以下のカラムで構成されています。
 * カラム名
 * 説明
 * PKTABLE_CAT
 * 主キーを含むテーブルのカタログの名前。
 * テーブルがカタログを保持していない場合は NULL。
 * PKTABLE_SCHEM
 * 主キーを含むテーブルのスキーマの名前。
 * PKTABLE_NAME
 * 主キーを含むテーブルの名前。
 * PKCOLUMN_NAME
 * 主キーを含むカラムの名前。
 * FKTABLE_CAT
 * 外部キーを含むテーブルのカタログの名前。
 * テーブルがカタログを保持していない場合は NULL。
 * FKTABLE_SCHEM
 * 外部キーを含むテーブルのスキーマの名前。
 * FKTABLE_NAME
 * 外部キーを含むテーブルの名前。
 * FKCOLUMN_NAME
 * 外部キーを含むカラムの名前。
 * KEY_SEQ
 * 1 から始まる数字で表した、キー内のカラムの位置。
 * UPDATE_RULE
 * SQL で UPDATE 操作を行った際に外部キーに適用される動作を表す整数値。
 * DELETE_RULE
 * SQL で DELETE 操作を行った際に外部キーに適用される動作を表す整数値。
 * FK_NAME
 * 外部キーの名前。
 * PK_NAME
 * 主キーの名前。
 * DEFERRABILITY
 * 外部キーの遅延度を表す整数値。
 * SQL_INITIALLY_DEFERRED、SQL_INITIALLY_IMMEDIATE あるいは
 * SQL_NOT_DEFERRABLE のいずれか。カラム名
 * 説明
 * PKTABLE_CAT
 * 主キーを含むテーブルのカタログの名前。
 * テーブルがカタログを保持していない場合は NULL。
 * PKTABLE_SCHEM
 * 主キーを含むテーブルのスキーマの名前。
 * PKTABLE_NAME
 * 主キーを含むテーブルの名前。
 * PKCOLUMN_NAME
 * 主キーを含むカラムの名前。
 * FKTABLE_CAT
 * 外部キーを含むテーブルのカタログの名前。
 * テーブルがカタログを保持していない場合は NULL。
 * FKTABLE_SCHEM
 * 外部キーを含むテーブルのスキーマの名前。
 * FKTABLE_NAME
 * 外部キーを含むテーブルの名前。
 * FKCOLUMN_NAME
 * 外部キーを含むカラムの名前。
 * KEY_SEQ
 * 1 から始まる数字で表した、キー内のカラムの位置。
 * UPDATE_RULE
 * SQL で UPDATE 操作を行った際に外部キーに適用される動作を表す整数値。
 * DELETE_RULE
 * SQL で DELETE 操作を行った際に外部キーに適用される動作を表す整数値。
 * FK_NAME
 * 外部キーの名前。
 * PK_NAME
 * 主キーの名前。
 * DEFERRABILITY
 * 外部キーの遅延度を表す整数値。
 * SQL_INITIALLY_DEFERRED、SQL_INITIALLY_IMMEDIATE あるいは
 * SQL_NOT_DEFERRABLE のいずれか。カラム名
 * 説明
 * PKTABLE_CAT
 * 主キーを含むテーブルのカタログの名前。
 * テーブルがカタログを保持していない場合は NULL。
 * PKTABLE_SCHEM
 * 主キーを含むテーブルのスキーマの名前。
 * PKTABLE_NAME
 * 主キーを含むテーブルの名前。
 * PKCOLUMN_NAME
 * 主キーを含むカラムの名前。
 * FKTABLE_CAT
 * 外部キーを含むテーブルのカタログの名前。
 * テーブルがカタログを保持していない場合は NULL。
 * FKTABLE_SCHEM
 * 外部キーを含むテーブルのスキーマの名前。
 * FKTABLE_NAME
 * 外部キーを含むテーブルの名前。
 * FKCOLUMN_NAME
 * 外部キーを含むカラムの名前。
 * KEY_SEQ
 * 1 から始まる数字で表した、キー内のカラムの位置。
 * UPDATE_RULE
 * SQL で UPDATE 操作を行った際に外部キーに適用される動作を表す整数値。
 * DELETE_RULE
 * SQL で DELETE 操作を行った際に外部キーに適用される動作を表す整数値。
 * FK_NAME
 * 外部キーの名前。
 * PK_NAME
 * 主キーの名前。
 * DEFERRABILITY
 * 外部キーの遅延度を表す整数値。
 * SQL_INITIALLY_DEFERRED、SQL_INITIALLY_IMMEDIATE あるいは
 * SQL_NOT_DEFERRABLE のいずれか。カラム名
 * 説明カラム名
 * 説明カラム名説明PKTABLE_CAT
 * 主キーを含むテーブルのカタログの名前。
 * テーブルがカタログを保持していない場合は NULL。
 * PKTABLE_SCHEM
 * 主キーを含むテーブルのスキーマの名前。
 * PKTABLE_NAME
 * 主キーを含むテーブルの名前。
 * PKCOLUMN_NAME
 * 主キーを含むカラムの名前。
 * FKTABLE_CAT
 * 外部キーを含むテーブルのカタログの名前。
 * テーブルがカタログを保持していない場合は NULL。
 * FKTABLE_SCHEM
 * 外部キーを含むテーブルのスキーマの名前。
 * FKTABLE_NAME
 * 外部キーを含むテーブルの名前。
 * FKCOLUMN_NAME
 * 外部キーを含むカラムの名前。
 * KEY_SEQ
 * 1 から始まる数字で表した、キー内のカラムの位置。
 * UPDATE_RULE
 * SQL で UPDATE 操作を行った際に外部キーに適用される動作を表す整数値。
 * DELETE_RULE
 * SQL で DELETE 操作を行った際に外部キーに適用される動作を表す整数値。
 * FK_NAME
 * 外部キーの名前。
 * PK_NAME
 * 主キーの名前。
 * DEFERRABILITY
 * 外部キーの遅延度を表す整数値。
 * SQL_INITIALLY_DEFERRED、SQL_INITIALLY_IMMEDIATE あるいは
 * SQL_NOT_DEFERRABLE のいずれか。PKTABLE_CAT
 * 主キーを含むテーブルのカタログの名前。
 * テーブルがカタログを保持していない場合は NULL。PKTABLE_CAT主キーを含むテーブルのカタログの名前。
 * テーブルがカタログを保持していない場合は NULL。PKTABLE_SCHEM
 * 主キーを含むテーブルのスキーマの名前。PKTABLE_SCHEM主キーを含むテーブルのスキーマの名前。PKTABLE_NAME
 * 主キーを含むテーブルの名前。PKTABLE_NAME主キーを含むテーブルの名前。PKCOLUMN_NAME
 * 主キーを含むカラムの名前。PKCOLUMN_NAME主キーを含むカラムの名前。FKTABLE_CAT
 * 外部キーを含むテーブルのカタログの名前。
 * テーブルがカタログを保持していない場合は NULL。FKTABLE_CAT外部キーを含むテーブルのカタログの名前。
 * テーブルがカタログを保持していない場合は NULL。FKTABLE_SCHEM
 * 外部キーを含むテーブルのスキーマの名前。FKTABLE_SCHEM外部キーを含むテーブルのスキーマの名前。FKTABLE_NAME
 * 外部キーを含むテーブルの名前。FKTABLE_NAME外部キーを含むテーブルの名前。FKCOLUMN_NAME
 * 外部キーを含むカラムの名前。FKCOLUMN_NAME外部キーを含むカラムの名前。KEY_SEQ
 * 1 から始まる数字で表した、キー内のカラムの位置。KEY_SEQ1 から始まる数字で表した、キー内のカラムの位置。UPDATE_RULE
 * SQL で UPDATE 操作を行った際に外部キーに適用される動作を表す整数値。UPDATE_RULESQL で UPDATE 操作を行った際に外部キーに適用される動作を表す整数値。DELETE_RULE
 * SQL で DELETE 操作を行った際に外部キーに適用される動作を表す整数値。DELETE_RULESQL で DELETE 操作を行った際に外部キーに適用される動作を表す整数値。FK_NAME
 * 外部キーの名前。FK_NAME外部キーの名前。PK_NAME
 * 主キーの名前。PK_NAME主キーの名前。DEFERRABILITY
 * 外部キーの遅延度を表す整数値。
 * SQL_INITIALLY_DEFERRED、SQL_INITIALLY_IMMEDIATE あるいは
 * SQL_NOT_DEFERRABLE のいずれか。DEFERRABILITY外部キーの遅延度を表す整数値。
 * SQL_INITIALLY_DEFERRED、SQL_INITIALLY_IMMEDIATE あるいは
 * SQL_NOT_DEFERRABLE のいずれか。
 */
function db2_foreign_keys($connection, $qualifier, $schema, $table-name) {}