/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.rawurlencode.php
 * @param string $str [optional] <p> TODO DESCRIPTION </p>
 * @return string -_.~ を除くすべての非アルファベット文字をパーセント
 * 記号 (%)に続いて 2 つの 16 進数がある表現形式に
 * 置き換えた文字列を返します。これは、文字定数が特殊な URL デリミタと
 * して解釈されたり、URL デリミタが(いくつかの電子メールシステムのような)
 * 転送メディアにより文字変換されて失われてしまったりすることが
 * ないように、RFC 3986
 * で定められたエンコーディング方法です。
 * PHP 5.3.0 より前のバージョンでは、rawurlencode はチルダ (~)
 * もエンコードしていました。これは
 * RFC 1738 で定められた方法です。-_.~%RFC 3986PHP 5.3.0 より前のバージョンでは、rawurlencode はチルダ (~)
 * もエンコードしていました。これは
 * RFC 1738 で定められた方法です。PHP 5.3.0 より前のバージョンでは、rawurlencode はチルダ (~)
 * もエンコードしていました。これは
 * RFC 1738 で定められた方法です。~RFC 1738
 */
function rawurlencode($str) {}