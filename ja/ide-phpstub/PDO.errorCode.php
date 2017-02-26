/**
 * (PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0)<br/>
 * @link http://php.net/manual/en/pdo.errorcode.php
 * @return mixed SQLSTATE を返します。これは、ANSI SQL-92 標準で定義された英数 5
 * 文字の ID です。簡潔に言えば、SQLSTATE は 2文字のクラス値の後に
 * 3 文字のサブクラス値が続きます。クラス値 01 はワーニングを表し、
 * 戻り値のコード SQL_SUCCESS_WITH_INFO を伴います。
 * クラス 'IM' を除く '01' 以外のクラス値はエラーを表します。
 * クラス 'IM' は PDO 自身の実装 (もしくは ODBC ドライバを使用している場合は
 * ODBC かも知れません) に由来するワーニングやエラーに固有の値です。
 * あらゆるクラスでのサブクラス値 '000' は SQLSTATE
 * に対するサブクラスがない事を示しています。PDO::errorCode はデータベースハンドラに
 * 直接行った操作に対するエラーコードのみを取得します。
 * もし PDO::prepare や PDO::query
 * を通して PDOStatement オブジェクトを生成し、
 * 文でエラーが発生した場合、PDO::errorCode
 * はエラーを反映しません。
 * 特定の文ハンドラに対して実行された操作についてのエラーコードを返すには
 * PDOStatement::errorCode
 * をコールしなければなりません。PDO::errorCodePDO::preparePDO::queryPDO::errorCodePDOStatement::errorCodeそのデータベースハンドル上で何も操作が行われていない場合は NULL を返します。NULL
 */
function PDO.errorCode() {}