/**
 * (PECL ibm_db2 >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.db2-table-privileges.php
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $schema [optional] <p> TODO DESCRIPTION </p>
 * @param string $table_name [optional] <p> TODO DESCRIPTION </p>
 * @return resource 指定したパラメータに一致するテーブルの権限情報を含むステートメントリソースを返します。
 * 行の内容は、以下のカラムで構成されています。
 * カラム名
 * 説明
 * TABLE_CAT
 * テーブルを含むカタログの名前。テーブルがカタログを保持していない場合は NULL。
 * TABLE_SCHEM
 * テーブルを含むスキーマの名前。
 * TABLE_NAME
 * テーブルの名前。
 * GRANTOR
 * その権限を与えたユーザーの認証 ID。
 * GRANTEE
 * その権限を与えられたユーザーの認証 ID。
 * PRIVILEGE
 * 与えられた権限。ALTER、
 * CONTROL、DELETE、INDEX、INSERT、REFERENCES、SELECT あるいは UPDATE
 * のいずれかです。
 * IS_GRANTABLE
 * grantee が、この権限を他のユーザーに与えることができるかどうかを、
 * 文字列 "YES" あるいは "NO" で表す。カラム名
 * 説明
 * TABLE_CAT
 * テーブルを含むカタログの名前。テーブルがカタログを保持していない場合は NULL。
 * TABLE_SCHEM
 * テーブルを含むスキーマの名前。
 * TABLE_NAME
 * テーブルの名前。
 * GRANTOR
 * その権限を与えたユーザーの認証 ID。
 * GRANTEE
 * その権限を与えられたユーザーの認証 ID。
 * PRIVILEGE
 * 与えられた権限。ALTER、
 * CONTROL、DELETE、INDEX、INSERT、REFERENCES、SELECT あるいは UPDATE
 * のいずれかです。
 * IS_GRANTABLE
 * grantee が、この権限を他のユーザーに与えることができるかどうかを、
 * 文字列 "YES" あるいは "NO" で表す。カラム名
 * 説明
 * TABLE_CAT
 * テーブルを含むカタログの名前。テーブルがカタログを保持していない場合は NULL。
 * TABLE_SCHEM
 * テーブルを含むスキーマの名前。
 * TABLE_NAME
 * テーブルの名前。
 * GRANTOR
 * その権限を与えたユーザーの認証 ID。
 * GRANTEE
 * その権限を与えられたユーザーの認証 ID。
 * PRIVILEGE
 * 与えられた権限。ALTER、
 * CONTROL、DELETE、INDEX、INSERT、REFERENCES、SELECT あるいは UPDATE
 * のいずれかです。
 * IS_GRANTABLE
 * grantee が、この権限を他のユーザーに与えることができるかどうかを、
 * 文字列 "YES" あるいは "NO" で表す。カラム名
 * 説明カラム名
 * 説明カラム名説明TABLE_CAT
 * テーブルを含むカタログの名前。テーブルがカタログを保持していない場合は NULL。
 * TABLE_SCHEM
 * テーブルを含むスキーマの名前。
 * TABLE_NAME
 * テーブルの名前。
 * GRANTOR
 * その権限を与えたユーザーの認証 ID。
 * GRANTEE
 * その権限を与えられたユーザーの認証 ID。
 * PRIVILEGE
 * 与えられた権限。ALTER、
 * CONTROL、DELETE、INDEX、INSERT、REFERENCES、SELECT あるいは UPDATE
 * のいずれかです。
 * IS_GRANTABLE
 * grantee が、この権限を他のユーザーに与えることができるかどうかを、
 * 文字列 "YES" あるいは "NO" で表す。TABLE_CAT
 * テーブルを含むカタログの名前。テーブルがカタログを保持していない場合は NULL。TABLE_CATテーブルを含むカタログの名前。テーブルがカタログを保持していない場合は NULL。NULLTABLE_SCHEM
 * テーブルを含むスキーマの名前。TABLE_SCHEMテーブルを含むスキーマの名前。TABLE_NAME
 * テーブルの名前。TABLE_NAMEテーブルの名前。GRANTOR
 * その権限を与えたユーザーの認証 ID。GRANTORその権限を与えたユーザーの認証 ID。GRANTEE
 * その権限を与えられたユーザーの認証 ID。GRANTEEその権限を与えられたユーザーの認証 ID。PRIVILEGE
 * 与えられた権限。ALTER、
 * CONTROL、DELETE、INDEX、INSERT、REFERENCES、SELECT あるいは UPDATE
 * のいずれかです。PRIVILEGE与えられた権限。ALTER、
 * CONTROL、DELETE、INDEX、INSERT、REFERENCES、SELECT あるいは UPDATE
 * のいずれかです。IS_GRANTABLE
 * grantee が、この権限を他のユーザーに与えることができるかどうかを、
 * 文字列 "YES" あるいは "NO" で表す。IS_GRANTABLEgrantee が、この権限を他のユーザーに与えることができるかどうかを、
 * 文字列 "YES" あるいは "NO" で表す。
 */
function db2_table_privileges($connection, $qualifier, $schema, $table_name) {}