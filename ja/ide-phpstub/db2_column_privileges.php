/**
 * (PECL ibm_db2 >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.db2-column-privileges.php
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $schema [optional] <p> TODO DESCRIPTION </p>
 * @param string $table-name [optional] <p> TODO DESCRIPTION </p>
 * @param string $column-name [optional] <p> TODO DESCRIPTION </p>
 * @return resource 指定したパラメータに一致するカラムの権限情報を含むステートメントリソースを返します。
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
 * GRANTOR
 * その権限を与えたユーザーの認証 ID。
 * GRANTEE
 * その権限を与えられたユーザーの認証 ID。
 * PRIVILEGE
 * カラムの権限。
 * IS_GRANTABLE
 * GRANTEE が、この権限を他のユーザーに与えることができるかどうか。カラム名
 * 説明
 * TABLE_CAT
 * カタログの名前。テーブルがカタログを保持していない場合は NULL。
 * TABLE_SCHEM
 * スキーマの名前。
 * TABLE_NAME
 * テーブルあるいはビューの名前。
 * COLUMN_NAME
 * カラムの名前。
 * GRANTOR
 * その権限を与えたユーザーの認証 ID。
 * GRANTEE
 * その権限を与えられたユーザーの認証 ID。
 * PRIVILEGE
 * カラムの権限。
 * IS_GRANTABLE
 * GRANTEE が、この権限を他のユーザーに与えることができるかどうか。カラム名
 * 説明
 * TABLE_CAT
 * カタログの名前。テーブルがカタログを保持していない場合は NULL。
 * TABLE_SCHEM
 * スキーマの名前。
 * TABLE_NAME
 * テーブルあるいはビューの名前。
 * COLUMN_NAME
 * カラムの名前。
 * GRANTOR
 * その権限を与えたユーザーの認証 ID。
 * GRANTEE
 * その権限を与えられたユーザーの認証 ID。
 * PRIVILEGE
 * カラムの権限。
 * IS_GRANTABLE
 * GRANTEE が、この権限を他のユーザーに与えることができるかどうか。カラム名
 * 説明カラム名
 * 説明カラム名説明TABLE_CAT
 * カタログの名前。テーブルがカタログを保持していない場合は NULL。
 * TABLE_SCHEM
 * スキーマの名前。
 * TABLE_NAME
 * テーブルあるいはビューの名前。
 * COLUMN_NAME
 * カラムの名前。
 * GRANTOR
 * その権限を与えたユーザーの認証 ID。
 * GRANTEE
 * その権限を与えられたユーザーの認証 ID。
 * PRIVILEGE
 * カラムの権限。
 * IS_GRANTABLE
 * GRANTEE が、この権限を他のユーザーに与えることができるかどうか。TABLE_CAT
 * カタログの名前。テーブルがカタログを保持していない場合は NULL。TABLE_CATカタログの名前。テーブルがカタログを保持していない場合は NULL。TABLE_SCHEM
 * スキーマの名前。TABLE_SCHEMスキーマの名前。TABLE_NAME
 * テーブルあるいはビューの名前。TABLE_NAMEテーブルあるいはビューの名前。COLUMN_NAME
 * カラムの名前。COLUMN_NAMEカラムの名前。GRANTOR
 * その権限を与えたユーザーの認証 ID。GRANTORその権限を与えたユーザーの認証 ID。GRANTEE
 * その権限を与えられたユーザーの認証 ID。GRANTEEその権限を与えられたユーザーの認証 ID。PRIVILEGE
 * カラムの権限。PRIVILEGEカラムの権限。IS_GRANTABLE
 * GRANTEE が、この権限を他のユーザーに与えることができるかどうか。IS_GRANTABLEGRANTEE が、この権限を他のユーザーに与えることができるかどうか。
 */
function db2_column_privileges($connection, $qualifier, $schema, $table-name, $column-name) {}