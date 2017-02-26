/**
 * (PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0)<br/>
 * @link http://php.net/manual/en/pdostatement.fetchall.php
 * @param int $fetch_style [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $fetch_argument [optional] <p> TODO DESCRIPTION </p>
 * @param array $ctor_args [optional] <p> TODO DESCRIPTION </p>
 * @return array PDOStatement::fetchAll は、
 * 結果セットに残っている全ての行を含む配列を返します。
 * この配列は、カラム値の配列もしくは各カラム名に対応するプロパティを持つオブジェクトとして各行を表します。
 * 取得結果がゼロ件だった場合は空の配列を返し、
 * 失敗した場合は FALSE を返します。PDOStatement::fetchAllFALSE大きな結果セットをフェッチするためにこのメソッドを使用することは、
 * システムとネットワークリソースに大量の要求を行うことになります。
 * PHP で全てのデータ処理と操作を行うよりも、データベースサーバー側で
 * 結果セットを操作することを検討してください。例えば、PHP で処理を行う前に
 * SQL で WHERE 句や ORDER BY 句を使用し、結果を制限することです。
 */
function PDOStatement.fetchAll($fetch_style, $fetch_argument, $ctor_args = array()) {}