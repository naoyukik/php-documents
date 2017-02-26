/**
 * (PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0)<br/>
 * @link http://php.net/manual/en/pdo.prepare.php
 * @param string $statement [optional] <p> TODO DESCRIPTION </p>
 * @param array $driver_options [optional] <p> TODO DESCRIPTION </p>
 * @return PDOStatement もしデータベースサーバーが正常に文を準備する場合、
 * PDO::prepare は
 * PDOStatement オブジェクトを返します。
 * もしデータベースサーバーが文を準備できなかった場合、
 * PDO::prepare は FALSE を返すか
 * PDOException を発行します
 * (エラー処理 の方法に依存します)。PDO::preparePDOStatementPDO::prepareFALSEPDOExceptionエラー処理プリペアドステートメントをエミュレートする際にデータベースサーバーとの通信は行いません。
 * したがって PDO::prepare はステートメントのチェックを行いません。プリペアドステートメントをエミュレートする際にデータベースサーバーとの通信は行いません。
 * したがって PDO::prepare はステートメントのチェックを行いません。PDO::prepare
 */
function PDO.prepare($statement, $driver_options = array()) {}