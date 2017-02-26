/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.curl-multi-info-read.php
 * @param resource $mh [optional] <p> TODO DESCRIPTION </p>
 * @param int $msgs_in_queue [optional] <p> TODO DESCRIPTION </p>
 * @return array 成功した場合にメッセージの連想配列、失敗した場合に FALSE を返します。FALSE配列の内容
 * キー
 * 値
 * msg
 * 定数 CURLMSG_DONE。その他の返り値は現在は存在しません。
 * result
 * 定数 CURLE_* のいずれか。すべて OK なら
 * CURLE_OK が返ります。
 * handle
 * curl が扱うハンドルの型を表すリソース。配列の内容
 * キー
 * 値
 * msg
 * 定数 CURLMSG_DONE。その他の返り値は現在は存在しません。
 * result
 * 定数 CURLE_* のいずれか。すべて OK なら
 * CURLE_OK が返ります。
 * handle
 * curl が扱うハンドルの型を表すリソース。キー
 * 値
 * msg
 * 定数 CURLMSG_DONE。その他の返り値は現在は存在しません。
 * result
 * 定数 CURLE_* のいずれか。すべて OK なら
 * CURLE_OK が返ります。
 * handle
 * curl が扱うハンドルの型を表すリソース。キー
 * 値キー
 * 値キー値msg
 * 定数 CURLMSG_DONE。その他の返り値は現在は存在しません。
 * result
 * 定数 CURLE_* のいずれか。すべて OK なら
 * CURLE_OK が返ります。
 * handle
 * curl が扱うハンドルの型を表すリソース。msg
 * 定数 CURLMSG_DONE。その他の返り値は現在は存在しません。msgmsg定数 CURLMSG_DONE。その他の返り値は現在は存在しません。CURLMSG_DONEresult
 * 定数 CURLE_* のいずれか。すべて OK なら
 * CURLE_OK が返ります。resultresult定数 CURLE_* のいずれか。すべて OK なら
 * CURLE_OK が返ります。CURLE_*CURLE_OKhandle
 * curl が扱うハンドルの型を表すリソース。handlehandlecurl が扱うハンドルの型を表すリソース。
 */
function curl_multi_info_read($mh, $msgs_in_queue) {}