/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.php-ini-scanned-files.php
 * @return string 成功すると、.iniファイルをカンマ区切りにした文字列が返されます。
 * --with-config-file-scan-dir
 * がセットされておらず、かつ環境変数 PHP_INI_SCAN_DIR
 * も設定されていない場合は
 * FALSEを返します。指定されたディレクトリが空であれば、
 * 空文字列が返されます。ファイルが認識できないものであれば、
 * そのファイルは文字列には含まれますが同時にPHPがエラーを起こします。
 * このエラーはコンパイルの時と、php_ini_scanned_files
 * 関数を使用したときの両方で発生します。--with-config-file-scan-dirPHP_INI_SCAN_DIRFALSEphp_ini_scanned_files
 */
function php_ini_scanned_files() {}