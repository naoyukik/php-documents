/**
 * (PHP >= 5.3.0, PECL phar >= 1.0.0)<br/>
 * @link http://php.net/manual/en/phar.getsignature.php
 * @return array 開いているアーカイブのシグネチャを配列で返します。
 * キー hash にはシグネチャ自体を、そしてキー hash_type
 * には MD5、SHA-1、
 * SHA-256、SHA-512 あるいは OpenSSL
 * を格納します。
 * このシグネチャは phar の中身全体から計算したハッシュで、
 * アーカイブの整合性を検証する際に使用します。
 * INI 設定 phar.require_hash
 * が true の場合は、すべての実行可能な phar が有効なシグネチャを持っている必要があります。hashhash_typeMD5SHA-1SHA-256SHA-512OpenSSLphar.require_hash
 */
function Phar.getSignature() {}