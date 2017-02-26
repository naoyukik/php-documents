/**
 * (PHP 5, PHP 7, PECL OCI8 >= 1.1.0)<br/>
 * @link http://php.net/manual/en/function.oci-error.php
 * @param resource $resource [optional] <p> TODO DESCRIPTION </p>
 * @return array もしエラーが見つからない場合、oci_error は
 * FALSE を返します。それ以外の場合は、
 * oci_error はエラーの情報を連想配列で返します。oci_errorFALSEoci_erroroci_error の配列の形式
 * 配列のキー
 * 型
 * 説明
 * code
 * integer
 * Oracle のエラーコード。
 * message
 * string
 * Oracle のエラーメッセージ。
 * offset
 * integer
 * SQL 文の中でのエラーが発生した場所のバイト位置。SQL 文がない場合は
 * 0 となります。
 * sqltext
 * string
 * SQL 文のテキスト。SQL 文がない場合は空文字列となります。oci_error の配列の形式
 * 配列のキー
 * 型
 * 説明
 * code
 * integer
 * Oracle のエラーコード。
 * message
 * string
 * Oracle のエラーメッセージ。
 * offset
 * integer
 * SQL 文の中でのエラーが発生した場所のバイト位置。SQL 文がない場合は
 * 0 となります。
 * sqltext
 * string
 * SQL 文のテキスト。SQL 文がない場合は空文字列となります。oci_error配列のキー
 * 型
 * 説明
 * code
 * integer
 * Oracle のエラーコード。
 * message
 * string
 * Oracle のエラーメッセージ。
 * offset
 * integer
 * SQL 文の中でのエラーが発生した場所のバイト位置。SQL 文がない場合は
 * 0 となります。
 * sqltext
 * string
 * SQL 文のテキスト。SQL 文がない場合は空文字列となります。配列のキー
 * 型
 * 説明配列のキー
 * 型
 * 説明配列のキー型説明code
 * integer
 * Oracle のエラーコード。
 * message
 * string
 * Oracle のエラーメッセージ。
 * offset
 * integer
 * SQL 文の中でのエラーが発生した場所のバイト位置。SQL 文がない場合は
 * 0 となります。
 * sqltext
 * string
 * SQL 文のテキスト。SQL 文がない場合は空文字列となります。code
 * integer
 * Oracle のエラーコード。codecodeintegerintegerOracle のエラーコード。message
 * string
 * Oracle のエラーメッセージ。messagemessagestringstringOracle のエラーメッセージ。offset
 * integer
 * SQL 文の中でのエラーが発生した場所のバイト位置。SQL 文がない場合は
 * 0 となります。offsetoffsetintegerintegerSQL 文の中でのエラーが発生した場所のバイト位置。SQL 文がない場合は
 * 0 となります。0sqltext
 * string
 * SQL 文のテキスト。SQL 文がない場合は空文字列となります。sqltextsqltextstringstringSQL 文のテキスト。SQL 文がない場合は空文字列となります。
 */
function oci_error($resource) {}