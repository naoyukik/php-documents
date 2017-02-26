/**
 * (PHP 4 >= 4.0.5, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imap-get-quota.php
 * @param resource $imap_stream [optional] <p> TODO DESCRIPTION </p>
 * @param string $quota_root [optional] <p> TODO DESCRIPTION </p>
 * @return array 指定したメールボックスの limit と usage をキーとした整数値を配列として返します。
 * limit の値は、このメールボックスで最大使用可能な大きさを表します。
 * usage の値は、このメールボックスの現在の使用状況を示します。
 * 失敗した場合に FALSE を返します。FALSEPHP 4.3 では、この関数は RFC2087
 * で述べられている機能をより適切に反映するようになっています。
 * 返り値の配列からは、サポートするリソース
 * （例:メッセージ、あるいはサブフォルダ）数の制限をなくし、
 * 名前つきリソースを独立した配列のキーとして受信するようにしました。
 * 各キーの値は配列となっており、その中に usage と values
 * の値が格納されています。RFC2087過去との互換性を保つため、旧来のアクセス方法も使用可能です。
 * しかし新しい方法に変更することを推奨します。
 */
function imap_get_quota($imap_stream, $quota_root) {}