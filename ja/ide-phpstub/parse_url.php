/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.parse-url.php
 * @param string $url [optional] <p> TODO DESCRIPTION </p>
 * @param int $component [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 完全におかしな形式の URL については、parse_url は
 * FALSE を返します。parse_urlFALSEcomponent を省略した場合は、連想配列を返します。
 * 連想配列の中には少なくともひとつの要素が含まれます。
 * この配列に含まれる可能性のある要素は次のとおりです。
 * scheme - 例: http
 * host 
 * port
 * user
 * pass
 * path
 * query - クエスチョンマーク ? 以降
 * fragment - ハッシュマーク # 以降componentscheme - 例: http
 * host 
 * port
 * user
 * pass
 * path
 * query - クエスチョンマーク ? 以降
 * fragment - ハッシュマーク # 以降scheme - 例: httpscheme - 例: httpschemehosthosthostportportportuseruseruserpasspasspasspathpathpathquery - クエスチョンマーク ? 以降query - クエスチョンマーク ? 以降query?fragment - ハッシュマーク # 以降fragment - ハッシュマーク # 以降fragment#component が指定されている場合、
 * parse_url は配列ではなく文字列
 * (PHP_URL_PORT の場合は整数値) を返します。
 * 要求したコンポーネントが指定した URL の中にない場合は
 * NULL を返します。componentparse_urlPHP_URL_PORTNULL
 */
function parse_url($url, $component = -1) {}