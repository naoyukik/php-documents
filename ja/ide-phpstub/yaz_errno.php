/**
 * (PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)<br/>
 * @link http://php.net/manual/en/function.yaz-errno.php
 * @param resource $id [optional] <p> TODO DESCRIPTION </p>
 * @return int エラーコードを返します。エラーコードは Z39.50 診断コード
 * （通常は Bib-1 診断）あるいは PHP/YAZ が生成するクライアント側の
 * エラーコード（たとえば "Connect failed"、"Init Rejected" など）
 * のいずれかです。
 */
function yaz_errno($id) {}