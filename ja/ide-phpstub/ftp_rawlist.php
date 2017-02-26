/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.ftp-rawlist.php
 * @param resource $ftp_stream [optional] <p> TODO DESCRIPTION </p>
 * @param string $directory [optional] <p> TODO DESCRIPTION </p>
 * @param bool $recursive [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 各要素が 1 行分のテキストに対応する配列を返します。
 * 渡された directory が無効な場合は FALSE を返します。directoryFALSE出力に関する処理は全く行われません。結果の解釈の仕方を定義するために
 * ftp_systype から返されるシステム型 ID 
 * を使用することができます。ftp_systype
 */
function ftp_rawlist($ftp_stream, $directory, $recursive = false) {}