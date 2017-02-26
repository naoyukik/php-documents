/**
 * (PHP 4 >= 4.0.2, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.curl-version.php
 * @param int $age [optional] <p> TODO DESCRIPTION </p>
 * @return array 以下の要素からなる連想配列を返します。
 * インデックス
 * 値の説明
 * version_number
 * cURL の 24 ビットのバージョン番号
 * version
 * cURL バージョン番号を表す文字列
 * ssl_version_number
 * OpenSSL の 24 ビットのバージョン番号
 * ssl_version
 * OpenSSL バージョン番号を表す文字列
 * libz_version
 * zlib バージョンを表す文字列
 * host
 * cURL をビルドしたホストについての情報
 * age
 * features
 * 定数 CURL_VERSION_XXX のビットマスク
 * protocols
 * cURL がサポートするプロトコル名の配列インデックス
 * 値の説明
 * version_number
 * cURL の 24 ビットのバージョン番号
 * version
 * cURL バージョン番号を表す文字列
 * ssl_version_number
 * OpenSSL の 24 ビットのバージョン番号
 * ssl_version
 * OpenSSL バージョン番号を表す文字列
 * libz_version
 * zlib バージョンを表す文字列
 * host
 * cURL をビルドしたホストについての情報
 * age
 * features
 * 定数 CURL_VERSION_XXX のビットマスク
 * protocols
 * cURL がサポートするプロトコル名の配列インデックス
 * 値の説明
 * version_number
 * cURL の 24 ビットのバージョン番号
 * version
 * cURL バージョン番号を表す文字列
 * ssl_version_number
 * OpenSSL の 24 ビットのバージョン番号
 * ssl_version
 * OpenSSL バージョン番号を表す文字列
 * libz_version
 * zlib バージョンを表す文字列
 * host
 * cURL をビルドしたホストについての情報
 * age
 * features
 * 定数 CURL_VERSION_XXX のビットマスク
 * protocols
 * cURL がサポートするプロトコル名の配列インデックス
 * 値の説明インデックス
 * 値の説明インデックス値の説明version_number
 * cURL の 24 ビットのバージョン番号
 * version
 * cURL バージョン番号を表す文字列
 * ssl_version_number
 * OpenSSL の 24 ビットのバージョン番号
 * ssl_version
 * OpenSSL バージョン番号を表す文字列
 * libz_version
 * zlib バージョンを表す文字列
 * host
 * cURL をビルドしたホストについての情報
 * age
 * features
 * 定数 CURL_VERSION_XXX のビットマスク
 * protocols
 * cURL がサポートするプロトコル名の配列version_number
 * cURL の 24 ビットのバージョン番号version_numbercURL の 24 ビットのバージョン番号version
 * cURL バージョン番号を表す文字列versioncURL バージョン番号を表す文字列ssl_version_number
 * OpenSSL の 24 ビットのバージョン番号ssl_version_numberOpenSSL の 24 ビットのバージョン番号ssl_version
 * OpenSSL バージョン番号を表す文字列ssl_versionOpenSSL バージョン番号を表す文字列libz_version
 * zlib バージョンを表す文字列libz_versionzlib バージョンを表す文字列host
 * cURL をビルドしたホストについての情報hostcURL をビルドしたホストについての情報ageagefeatures
 * 定数 CURL_VERSION_XXX のビットマスクfeatures定数 CURL_VERSION_XXX のビットマスクCURL_VERSION_XXXprotocols
 * cURL がサポートするプロトコル名の配列protocolscURL がサポートするプロトコル名の配列
 */
function curl_version($age = CURLVERSION_NOW) {}