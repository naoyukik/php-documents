/**
 * (PECL ibm_db2 >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.db2-fetch-object.php
 * @param resource $stmt [optional] <p> TODO DESCRIPTION </p>
 * @param int $row_number [optional] <p> TODO DESCRIPTION </p>
 * @return object 結果セット内の行を表すオブジェクトを返します。
 * オブジェクトのプロパティが、結果セット内のカラム名に対応します。IBM DB2、Cloudscape および Apache Derby データベースサーバーは、
 * 通常はカラム名を大文字として扱います。そのため、
 * オブジェクトのプロパティも同じようになります。SELECT 文の中でスカラ関数をコールすることでカラムの値を変更している場合、
 * データベースサーバーは、そのカラムの名前としてカラム番号を返します。
 * もし何らかの意味のある名前をオブジェクトのプロパティとして使用したいのなら、
 * AS 句を使用して結果セット内のカラムに名前を割り当てる必要があります。行が取得されなかった場合は FALSE を返します。FALSE
 */
function db2_fetch_object($stmt, $row_number = -1) {}