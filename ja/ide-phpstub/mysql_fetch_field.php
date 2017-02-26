/**
 * (PHP 4, PHP 5)<br/>
 * @link http://php.net/manual/en/function.mysql-fetch-field.php
 * @param resource $result [optional] <p> TODO DESCRIPTION </p>
 * @param int $field_offset [optional] <p> TODO DESCRIPTION </p>
 * @return object フィールド情報を含むobjectを返します。オブジェクトの
 * プロパティは次のとおりです。objectname - カラム名
 * table - カラムが属しているテーブルの名前。エイリアスを定義している場合はエイリアスの名前
 * max_length - カラムの最大長
 * not_null - カラムが NULL 値をとることができない場合 1
 * primary_key - カラムが主キーであれば 1
 * unique_key - カラムがユニークキーであれば 1
 * multiple_key - カラムが非ユニークキーであれば 1
 * numeric - カラムが数値(numeric)であれば 1
 * blob - カラムがBLOBであれば 1
 * type - カラムの型
 * unsigned - カラムが符号無し(unsigned)であれば 1
 * zerofill - カラムがゼロで埋められている(zero-filled)場合に 1name - カラム名
 * table - カラムが属しているテーブルの名前。エイリアスを定義している場合はエイリアスの名前
 * max_length - カラムの最大長
 * not_null - カラムが NULL 値をとることができない場合 1
 * primary_key - カラムが主キーであれば 1
 * unique_key - カラムがユニークキーであれば 1
 * multiple_key - カラムが非ユニークキーであれば 1
 * numeric - カラムが数値(numeric)であれば 1
 * blob - カラムがBLOBであれば 1
 * type - カラムの型
 * unsigned - カラムが符号無し(unsigned)であれば 1
 * zerofill - カラムがゼロで埋められている(zero-filled)場合に 1name - カラム名name - カラム名table - カラムが属しているテーブルの名前。エイリアスを定義している場合はエイリアスの名前table - カラムが属しているテーブルの名前。エイリアスを定義している場合はエイリアスの名前max_length - カラムの最大長max_length - カラムの最大長not_null - カラムが NULL 値をとることができない場合 1not_null - カラムが NULL 値をとることができない場合 1NULLprimary_key - カラムが主キーであれば 1primary_key - カラムが主キーであれば 1unique_key - カラムがユニークキーであれば 1unique_key - カラムがユニークキーであれば 1multiple_key - カラムが非ユニークキーであれば 1multiple_key - カラムが非ユニークキーであれば 1numeric - カラムが数値(numeric)であれば 1numeric - カラムが数値(numeric)であれば 1blob - カラムがBLOBであれば 1blob - カラムがBLOBであれば 1type - カラムの型type - カラムの型unsigned - カラムが符号無し(unsigned)であれば 1unsigned - カラムが符号無し(unsigned)であれば 1zerofill - カラムがゼロで埋められている(zero-filled)場合に 1zerofill - カラムがゼロで埋められている(zero-filled)場合に 1
 */
function mysql_fetch_field($result, $field_offset) {}