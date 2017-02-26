/**
 * (PHP 5 >= 5.2.0, PHP 7)<br/>
 * @link http://php.net/manual/en/function.openssl-pkey-get-details.php
 * @param resource $key [optional] <p> TODO DESCRIPTION </p>
 * @return array 成功した場合にキーの詳細を含む配列、失敗した場合に FALSE を返します。
 * 返される配列のキーは bits (ビット数)、
 * key (公開鍵を表す文字列) および
 * type (キーの種類。
 * OPENSSL_KEYTYPE_RSA、
 * OPENSSL_KEYTYPE_DSA、
 * OPENSSL_KEYTYPE_DH、
 * OPENSSL_KEYTYPE_EC のいずれか。あるいは不明な場合は -1)
 * となります。FALSEbitskeytypeOPENSSL_KEYTYPE_RSAOPENSSL_KEYTYPE_DSAOPENSSL_KEYTYPE_DHOPENSSL_KEYTYPE_EC使っているキーの型によって、さらに詳細が返されます。
 * 常に存在するわけではない要素もあることに注意しましょう。OPENSSL_KEYTYPE_RSA の場合は "rsa"
 * というキーがあり、キーのデータが返されます。
 * キー
 * 説明
 * "n"
 * "e"
 * "d"
 * "p"
 * "q"
 * "dmp1"
 * "dmq1"
 * "iqmp"
 * OPENSSL_KEYTYPE_DSA の場合は "dsa"
 * というキーがあり、キーのデータが返されます。
 * キー
 * 説明
 * "p"
 * "q"
 * "g"
 * "priv_key"
 * "pub_key"
 * OPENSSL_KEYTYPE_DH の場合は "dh"
 * というキーがあり、キーのデータが返されます。
 * キー
 * 説明
 * "p"
 * "g"
 * "priv_key"
 * "pub_key"OPENSSL_KEYTYPE_RSA の場合は "rsa"
 * というキーがあり、キーのデータが返されます。
 * キー
 * 説明
 * "n"
 * "e"
 * "d"
 * "p"
 * "q"
 * "dmp1"
 * "dmq1"
 * "iqmp"OPENSSL_KEYTYPE_RSA の場合は "rsa"
 * というキーがあり、キーのデータが返されます。OPENSSL_KEYTYPE_RSA"rsa"キー
 * 説明
 * "n"
 * "e"
 * "d"
 * "p"
 * "q"
 * "dmp1"
 * "dmq1"
 * "iqmp"キー
 * 説明
 * "n"
 * "e"
 * "d"
 * "p"
 * "q"
 * "dmp1"
 * "dmq1"
 * "iqmp"キー
 * 説明キー
 * 説明キー説明"n"
 * "e"
 * "d"
 * "p"
 * "q"
 * "dmp1"
 * "dmq1"
 * "iqmp""n""n""n""e""e""e""d""d""d""p""p""p""q""q""q""dmp1""dmp1""dmp1""dmq1""dmq1""dmq1""iqmp""iqmp""iqmp"OPENSSL_KEYTYPE_DSA の場合は "dsa"
 * というキーがあり、キーのデータが返されます。
 * キー
 * 説明
 * "p"
 * "q"
 * "g"
 * "priv_key"
 * "pub_key"OPENSSL_KEYTYPE_DSA の場合は "dsa"
 * というキーがあり、キーのデータが返されます。OPENSSL_KEYTYPE_DSA"dsa"キー
 * 説明
 * "p"
 * "q"
 * "g"
 * "priv_key"
 * "pub_key"キー
 * 説明
 * "p"
 * "q"
 * "g"
 * "priv_key"
 * "pub_key"キー
 * 説明キー
 * 説明キー説明"p"
 * "q"
 * "g"
 * "priv_key"
 * "pub_key""p""p""p""q""q""q""g""g""g""priv_key""priv_key""priv_key""pub_key""pub_key""pub_key"OPENSSL_KEYTYPE_DH の場合は "dh"
 * というキーがあり、キーのデータが返されます。
 * キー
 * 説明
 * "p"
 * "g"
 * "priv_key"
 * "pub_key"OPENSSL_KEYTYPE_DH の場合は "dh"
 * というキーがあり、キーのデータが返されます。OPENSSL_KEYTYPE_DH"dh"キー
 * 説明
 * "p"
 * "g"
 * "priv_key"
 * "pub_key"キー
 * 説明
 * "p"
 * "g"
 * "priv_key"
 * "pub_key"キー
 * 説明キー
 * 説明キー説明"p"
 * "g"
 * "priv_key"
 * "pub_key""p""p""p""g""g""g""priv_key""priv_key""priv_key""pub_key""pub_key""pub_key"
 */
function openssl_pkey_get_details($key) {}