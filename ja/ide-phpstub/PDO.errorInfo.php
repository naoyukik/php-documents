/**
 * (PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0)<br/>
 * @link http://php.net/manual/en/pdo.errorinfo.php
 * @return array PDO::errorInfo は、
 * このデータベースハンドラによって実行された直近の操作に関するエラー情報を
 * 配列として返します。この配列は次のフィールドを含みます。
 * 要素
 * 情報
 * 0
 * SQLSTATE エラーコード
 * (これは、ANSI SQL 標準で定義された英数 5 文字の ID)
 * 1
 * ドライバ固有のエラーコード
 * 2
 * ドライバ固有のエラーメッセージPDO::errorInfo要素
 * 情報
 * 0
 * SQLSTATE エラーコード
 * (これは、ANSI SQL 標準で定義された英数 5 文字の ID)
 * 1
 * ドライバ固有のエラーコード
 * 2
 * ドライバ固有のエラーメッセージ要素
 * 情報
 * 0
 * SQLSTATE エラーコード
 * (これは、ANSI SQL 標準で定義された英数 5 文字の ID)
 * 1
 * ドライバ固有のエラーコード
 * 2
 * ドライバ固有のエラーメッセージ要素
 * 情報要素
 * 情報要素情報0
 * SQLSTATE エラーコード
 * (これは、ANSI SQL 標準で定義された英数 5 文字の ID)
 * 1
 * ドライバ固有のエラーコード
 * 2
 * ドライバ固有のエラーメッセージ0
 * SQLSTATE エラーコード
 * (これは、ANSI SQL 標準で定義された英数 5 文字の ID)0SQLSTATE エラーコード
 * (これは、ANSI SQL 標準で定義された英数 5 文字の ID)1
 * ドライバ固有のエラーコード1ドライバ固有のエラーコード2
 * ドライバ固有のエラーメッセージ2ドライバ固有のエラーメッセージSQLSTATE エラーコードが設定されていない場合やドライバ固有のエラーがない場合は、
 * 要素 0 に続く要素は NULL となります。SQLSTATE エラーコードが設定されていない場合やドライバ固有のエラーがない場合は、
 * 要素 0 に続く要素は NULL となります。NULLPDO::errorInfo はデータベースハンドラに
 * 直接行った操作に対するエラーコードのみを取得します。
 * もし PDO::prepare や PDO::query
 * を通して PDOStatement オブジェクトを生成し、
 * 文でエラーが発生した場合、PDO::errorInfo
 * はそのエラーを反映しません。
 * 特定の文ハンドラに対して実行された操作についてのエラーコードを返すには
 * PDOStatement::errorInfo
 * をコールしなければなりません。PDO::errorInfoPDO::preparePDO::queryPDO::errorInfoPDOStatement::errorInfo
 */
function PDO.errorInfo() {}