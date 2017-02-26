/**
 * (PHP 5, PHP 7, PECL OCI8 >= 1.1.0)<br/>
 * @link http://php.net/manual/en/function.oci-fetch-object.php
 * @param resource $statement [optional] <p> TODO DESCRIPTION </p>
 * @return object オブジェクトを返します。
 * オブジェクトの属性は文中のフィールドと一致しています。
 * statement にもう行がない場合は FALSE を返します。statementFALSELOB カラムは LOB ディスクリプタを返します。LOBDATE カラムは、現行のデータフォーマットにフォーマットされた
 * 文字列として返されます。既定のフォーマットは NLS_LANG
 * のような Oracle 環境変数で変更したり、またはあらかじめ
 * ALTER SESSION SET NLS_DATE_FORMAT コマンドを実行して変更します。DATENLS_LANGALTER SESSION SET NLS_DATE_FORMATOracle のデフォルトでは、文字の大小を区別しないカラム名はすべて大文字となります。
 * 文字の大小を区別するカラム名は、属性の名前もそれと同じになります。
 * 結果のオブジェクト配列を var_dump すれば、
 * 属性にアクセスするための大文字小文字の区別を確かめられます。var_dumpNULL データ・フィールドの全てに対して、属性の値は NULL になります。NULLNULL
 */
function oci_fetch_object($statement) {}