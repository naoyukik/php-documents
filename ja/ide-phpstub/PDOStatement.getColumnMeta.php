/**
 * (PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0)<br/>
 * @link http://php.net/manual/en/pdostatement.getcolumnmeta.php
 * @param int $column [optional] <p> TODO DESCRIPTION </p>
 * @return array 1つのカラムについてのメタデータに相当する次の値を含んだ連想配列を返します。カラムのメタデータ
 * 名前
 * 値
 * native_type
 * カラム値を表現するために使用される PHP のネイティブ型
 * driver:decl_type
 * データベースにおけるカラム値を表現するために使用される SQL 型。
 * もし、結果セットのカラムが関数から返される場合、
 * この値は PDOStatement::getColumnMeta.
 * よって返されません。
 * flags
 * このカラムにセットされているあらゆるフラグ
 * name
 * データベースによって返されるこのカラムの名前
 * table
 * データベースによって返されるこのカラムのテーブル名
 * len
 * カラム長。浮動小数点数以外の型については通常
 * -1 となる。
 * precision
 * カラムの数値精度。浮動小数点数以外の型については通常
 * 0 となる。
 * pdo_type
 * PDO::PARAM_* 定数
 * によって表現されるカラムの型名前
 * 値
 * native_type
 * カラム値を表現するために使用される PHP のネイティブ型
 * driver:decl_type
 * データベースにおけるカラム値を表現するために使用される SQL 型。
 * もし、結果セットのカラムが関数から返される場合、
 * この値は PDOStatement::getColumnMeta.
 * よって返されません。
 * flags
 * このカラムにセットされているあらゆるフラグ
 * name
 * データベースによって返されるこのカラムの名前
 * table
 * データベースによって返されるこのカラムのテーブル名
 * len
 * カラム長。浮動小数点数以外の型については通常
 * -1 となる。
 * precision
 * カラムの数値精度。浮動小数点数以外の型については通常
 * 0 となる。
 * pdo_type
 * PDO::PARAM_* 定数
 * によって表現されるカラムの型名前
 * 値名前
 * 値名前値native_type
 * カラム値を表現するために使用される PHP のネイティブ型
 * driver:decl_type
 * データベースにおけるカラム値を表現するために使用される SQL 型。
 * もし、結果セットのカラムが関数から返される場合、
 * この値は PDOStatement::getColumnMeta.
 * よって返されません。
 * flags
 * このカラムにセットされているあらゆるフラグ
 * name
 * データベースによって返されるこのカラムの名前
 * table
 * データベースによって返されるこのカラムのテーブル名
 * len
 * カラム長。浮動小数点数以外の型については通常
 * -1 となる。
 * precision
 * カラムの数値精度。浮動小数点数以外の型については通常
 * 0 となる。
 * pdo_type
 * PDO::PARAM_* 定数
 * によって表現されるカラムの型native_type
 * カラム値を表現するために使用される PHP のネイティブ型native_typenative_typeカラム値を表現するために使用される PHP のネイティブ型driver:decl_type
 * データベースにおけるカラム値を表現するために使用される SQL 型。
 * もし、結果セットのカラムが関数から返される場合、
 * この値は PDOStatement::getColumnMeta.
 * よって返されません。driver:decl_typedriver:decl_typeデータベースにおけるカラム値を表現するために使用される SQL 型。
 * もし、結果セットのカラムが関数から返される場合、
 * この値は PDOStatement::getColumnMeta.
 * よって返されません。PDOStatement::getColumnMetaflags
 * このカラムにセットされているあらゆるフラグflagsflagsこのカラムにセットされているあらゆるフラグname
 * データベースによって返されるこのカラムの名前namenameデータベースによって返されるこのカラムの名前table
 * データベースによって返されるこのカラムのテーブル名tabletableデータベースによって返されるこのカラムのテーブル名len
 * カラム長。浮動小数点数以外の型については通常
 * -1 となる。lenlenカラム長。浮動小数点数以外の型については通常
 * -1 となる。-1precision
 * カラムの数値精度。浮動小数点数以外の型については通常
 * 0 となる。precisionprecisionカラムの数値精度。浮動小数点数以外の型については通常
 * 0 となる。0pdo_type
 * PDO::PARAM_* 定数
 * によって表現されるカラムの型pdo_typepdo_typePDO::PARAM_* 定数
 * によって表現されるカラムの型PDO::PARAM_* 定数PDO::PARAM_*要求されたカラムが結果セットに存在しない、
 * もしくは結果セットが存在しない場合、FALSE を返します。FALSE
 */
function PDOStatement.getColumnMeta($column) {}