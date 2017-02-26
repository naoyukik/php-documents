/**
 * (PECL maxdb >= 1.0)<br/>
 * @link http://php.net/manual/en/function.maxdb-get-client-version.php
 * @return int MaxDB クライアントライブラリのバージョンを表す数値を、
 * 以下のフォーマットで返します。
 * main_version*10000 + minor_version *100 + sub_version
 * 例えば、7.5.0 の場合は 70500 となります。main_version*10000 + minor_version *100 + sub_versionこれは、何らかの機能が存在するかどうかを知るために
 * クライアントライブラリのバージョンを手早く取得するなどの際に有用です。
 */
function maxdb_get_client_version() {}