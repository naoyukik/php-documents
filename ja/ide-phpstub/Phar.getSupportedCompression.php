/**
 * (PHP >= 5.3.0, PECL phar >= 1.2.0)<br/>
 * @link http://php.net/manual/en/phar.getsupportedcompression.php
 * @return array Phar::GZ あるいは
 * Phar::BZ2 を含む配列を返します。
 * これは、zlib 拡張モジュールと
 * bz2 拡張モジュールが使用可能かどうかによって決まります。Phar::GZPhar::BZ2zlibbz2
 */
function Phar.getSupportedCompression() {}