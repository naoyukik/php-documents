/**
 * (PHP 5 < 5.4.0, PECL sqlite >= 1.0.3)<br/>
 * @link http://php.net/manual/en/function.sqlite-exec.php
 * @param resource $dbhandle [optional] <p> TODO DESCRIPTION </p>
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param string $error_msg [optional] <p> TODO DESCRIPTION </p>
 * @return bool この関数はブール型の結果を返します。
 * 成功時は TRUE、失敗時は FALSE を返します。
 * もしレコードを返すクエリを実行する必要がある場合は
 * sqlite_query を参照ください。TRUEFALSEsqlite_querySQLITE_ASSOC および SQLITE_BOTH で
返されるカラム名は、設定オプション
sqlite.assoc_case の値に基づき、
大文字小文字が変換されます。SQLITE_ASSOCSQLITE_BOTHsqlite.assoc_case
 */
function SQLiteDatabase.exec($dbhandle, $query, $error_msg) {}