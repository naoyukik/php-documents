/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.ldap-connect.php
 * @param string $host [optional] <p> TODO DESCRIPTION </p>
 * @param int $port [optional] <p> TODO DESCRIPTION </p>
 * @return resource 指定したホスト名とポートの組み合わせ、あるいは LDAP URI が妥当であると思われる場合に正の LDAP リンク ID を返します。
 * これは単なる構文チェックであり、実際にサーバーに接続するわけではありません。
 * 構文チェックに失敗した場合は FALSE を返します。
 * OpenLDAP 2.x.x を使用している場合は、
 * ldap_connect は常に resource
 * を返しますが、実際には接続せずにパラメータの初期化だけを行います。
 * 実際に接続するのは次に ldap_* 関数がコールされた際で、これは
 * 通常は ldap_bind です。FALSEldap_connectresourceldap_bind引数が指定されない場合、既に開かれているリンクのリンク ID を返します。
 */
function ldap_connect($host, $port = 389) {}