/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/mysqli.get-client-version.php
 * @param mysqli $link [optional] <p> TODO DESCRIPTION </p>
 * @return int MySQL クライアントライブラリのバージョンを、以下の書式で返します。
 * main_version*10000 + minor_version *100 + sub_version
 * 例えば、4.1.0 は 40100 となります。main_version*10000 + minor_version *100 + sub_versionこれは、ある機能が使用可能かどうかを知るため、クライアントライブラリの
 * バージョンを手っ取り早く調べたい場合に有用です。
 */
function mysqli_get_client_version($link) {}