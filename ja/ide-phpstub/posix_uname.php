/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.posix-uname.php
 * @return array システムに関する情報を文字列の連想配列として返します。
 * 連想配列のキーは、次のようになります。
 * sysname - オペレーティングシステムの名前 (例 Linux)
 * nodename - システムの名前 (例 valiant)
 * release - オペレーティングシステムのリリース (例 2.2.10)
 * version - オペレーティングシステムのバージョン (例 #4 Tue Jul 20
 * 17:01:36 MEST 1999)
 * machine - システムアーキテクチャ (例 i586)
 * domainname - DNS ドメイン名 (例 example.com)sysname - オペレーティングシステムの名前 (例 Linux)
 * nodename - システムの名前 (例 valiant)
 * release - オペレーティングシステムのリリース (例 2.2.10)
 * version - オペレーティングシステムのバージョン (例 #4 Tue Jul 20
 * 17:01:36 MEST 1999)
 * machine - システムアーキテクチャ (例 i586)
 * domainname - DNS ドメイン名 (例 example.com)sysname - オペレーティングシステムの名前 (例 Linux)sysname - オペレーティングシステムの名前 (例 Linux)nodename - システムの名前 (例 valiant)nodename - システムの名前 (例 valiant)release - オペレーティングシステムのリリース (例 2.2.10)release - オペレーティングシステムのリリース (例 2.2.10)version - オペレーティングシステムのバージョン (例 #4 Tue Jul 20
 * 17:01:36 MEST 1999)version - オペレーティングシステムのバージョン (例 #4 Tue Jul 20
 * 17:01:36 MEST 1999)machine - システムアーキテクチャ (例 i586)machine - システムアーキテクチャ (例 i586)domainname - DNS ドメイン名 (例 example.com)domainname - DNS ドメイン名 (例 example.com)domainname は、GNU の拡張機能で POSIX.1 には含まれていません。
 * このため、このフィールドは GNU システム上または GNU libc
 * を使用している場合にのみ使用可能です。
 */
function posix_uname() {}