/**
 * (PHP 4 >= 4.0.4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.curl-getinfo.php
 * @param resource $ch [optional] <p> TODO DESCRIPTION </p>
 * @param int $opt [optional] <p> TODO DESCRIPTION </p>
 * @return mixed opt を指定した場合は、その値を返します。
 * それ以外の場合は、以下の要素をもつ連想配列を返します
 * (それぞれの要素が opt に対応します)。
 * 失敗した場合は FALSE を返します。
 * "url"
 * "content_type"
 * "http_code"
 * "header_size"
 * "request_size"
 * "filetime"
 * "ssl_verify_result"
 * "redirect_count"
 * "total_time"
 * "namelookup_time"
 * "connect_time"
 * "pretransfer_time"
 * "size_upload"
 * "size_download"
 * "speed_download"
 * "speed_upload"
 * "download_content_length"
 * "upload_content_length"
 * "starttransfer_time"
 * "redirect_time"
 * "certinfo"
 * "primary_ip"
 * "primary_port"
 * "local_ip"
 * "local_port"
 * "redirect_url"
 * "request_header" (これが設定されるのは、事前に curl_setopt
 * をコールしたときに CURLINFO_HEADER_OUT を設定した場合のみです)
 * プライベートデータはこの連想配列には含まれず、CURLINFO_PRIVATE オプションで個別に取得しなければいけないことに注意しましょう。optoptFALSE"url"
 * "content_type"
 * "http_code"
 * "header_size"
 * "request_size"
 * "filetime"
 * "ssl_verify_result"
 * "redirect_count"
 * "total_time"
 * "namelookup_time"
 * "connect_time"
 * "pretransfer_time"
 * "size_upload"
 * "size_download"
 * "speed_download"
 * "speed_upload"
 * "download_content_length"
 * "upload_content_length"
 * "starttransfer_time"
 * "redirect_time"
 * "certinfo"
 * "primary_ip"
 * "primary_port"
 * "local_ip"
 * "local_port"
 * "redirect_url"
 * "request_header" (これが設定されるのは、事前に curl_setopt
 * をコールしたときに CURLINFO_HEADER_OUT を設定した場合のみです)"url""url""content_type""content_type""http_code""http_code""header_size""header_size""request_size""request_size""filetime""filetime""ssl_verify_result""ssl_verify_result""redirect_count""redirect_count""total_time""total_time""namelookup_time""namelookup_time""connect_time""connect_time""pretransfer_time""pretransfer_time""size_upload""size_upload""size_download""size_download""speed_download""speed_download""speed_upload""speed_upload""download_content_length""download_content_length""upload_content_length""upload_content_length""starttransfer_time""starttransfer_time""redirect_time""redirect_time""certinfo""certinfo""primary_ip""primary_ip""primary_port""primary_port""local_ip""local_ip""local_port""local_port""redirect_url""redirect_url""request_header" (これが設定されるのは、事前に curl_setopt
 * をコールしたときに CURLINFO_HEADER_OUT を設定した場合のみです)"request_header" (これが設定されるのは、事前に curl_setopt
 * をコールしたときに CURLINFO_HEADER_OUT を設定した場合のみです)curl_setoptCURLINFO_HEADER_OUTCURLINFO_PRIVATE
 */
function curl_getinfo($ch, $opt) {}