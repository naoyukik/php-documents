/**
 * (PHP 4 >= 4.3.0, PHP 5)<br/>
 * @link http://php.net/manual/en/function.mysql-stat.php
 * @param resource $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return string 稼働時間、スレッド、クエリ、オープンされているテーブル、フラッシュされた
 * テーブル、そして 1 秒あたりのクエリ数を文字列で返します。その他のデータも
 * 含めた完全な状態を得るには、SHOW STATUS SQL コマンドを
 * 実行する必要があります。link_identifier が不正な
 * 場合には NULL が返されます。SHOW STATUSlink_identifierNULL
 */
function mysql_stat($link_identifier = NULL) {}