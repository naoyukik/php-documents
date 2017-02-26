/**
 * (PHP 5, PHP 7, PECL OCI8 >= 1.1.0)<br/>
 * @link http://php.net/manual/en/function.oci-fetch-array.php
 * @param resource $statement [optional] <p> TODO DESCRIPTION </p>
 * @param int $mode [optional] <p> TODO DESCRIPTION </p>
 * @return array 連想配列や数値添字配列を返します。
 * statement にもう行がない場合は
 * FALSE を返します。statementFALSEデフォルトでは、LOB カラムは LOB ディスクリプタを返します。LOBDATE カラムは、現行のデータフォーマットにフォーマットされた
 * 文字列として返されます。既定のフォーマットは NLS_LANG
 * のような Oracle 環境変数で変更したり、またはあらかじめ
 * ALTER SESSION SET NLS_DATE_FORMAT コマンドを実行して変更します。DATENLS_LANGALTER SESSION SET NLS_DATE_FORMATOracle のデフォルトでは、大文字小文字を区別しないカラム名はすべて大文字となり、
 * 結果の連想配列のインデックスも大文字になります。
 * 大文字小文字を区別するカラム名は、配列のインデックスもそれと同じになります。
 * 結果の配列を var_dump すれば、
 * 各クエリの大文字小文字を確かめることができます。var_dumpテーブル名は配列のインデックスには含まれません。
 * もし同じ名前の別カラムを複数取得するクエリを実行する場合は、
 * OCI_NUM を使うか、あるいはカラムのエイリアスを指定して名前の一意性を保ちましょう。
 * 例 7 を参照ください。そうしなければ、PHP からはひとつのカラムだけしか見えなくなります。OCI_NUM
 */
function oci_fetch_array($statement, $mode) {}