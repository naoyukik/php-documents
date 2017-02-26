/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imap-get-quotaroot.php
 * @param resource $imap_stream [optional] <p> TODO DESCRIPTION </p>
 * @param string $quota_root [optional] <p> TODO DESCRIPTION </p>
 * @return array 指定したユーザーのメールボックスに関連する整数値を配列で返します。
 * すべての値にはリソース名に基づいたキーがつけられており、
 * usage および limit 値を保持する配列が関連付けられています。コールが失敗した場合、およびサーバーからの応答内容をパースできなかった場合には
 * この関数は FALSE を返します。FALSE
 */
function imap_get_quotaroot($imap_stream, $quota_root) {}