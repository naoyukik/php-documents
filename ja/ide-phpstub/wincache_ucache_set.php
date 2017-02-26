/**
 * (PECL wincache >= 1.1.0)<br/>
 * @link http://php.net/manual/en/function.wincache-ucache-set.php
 * @param mixed $key [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $value [optional] <p> TODO DESCRIPTION </p>
 * @param int $ttl [optional] <p> TODO DESCRIPTION </p>
 * @param array $values [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $unused [optional] <p> TODO DESCRIPTION </p>
 * @return bool key が文字列のときは、成功した場合に TRUE、失敗した場合に FALSE を返します。keyTRUEFALSEkey が配列のときの返り値は、次のようになります。
 * 配列内のすべての name => value ペアが設定できた場合は、空の配列を返します。
 * 配列内の name => value ペアがひとつも設定できなかった場合は、FALSE を返します。
 * 成功したペアと失敗したペアがある場合は、ユーザーキャッシュへの追加に失敗した name=>value ペアを含む配列を返します。key配列内のすべての name => value ペアが設定できた場合は、空の配列を返します。
 * 配列内の name => value ペアがひとつも設定できなかった場合は、FALSE を返します。
 * 成功したペアと失敗したペアがある場合は、ユーザーキャッシュへの追加に失敗した name=>value ペアを含む配列を返します。配列内のすべての name => value ペアが設定できた場合は、空の配列を返します。配列内のすべての name => value ペアが設定できた場合は、空の配列を返します。配列内の name => value ペアがひとつも設定できなかった場合は、FALSE を返します。配列内の name => value ペアがひとつも設定できなかった場合は、FALSE を返します。FALSE成功したペアと失敗したペアがある場合は、ユーザーキャッシュへの追加に失敗した name=>value ペアを含む配列を返します。成功したペアと失敗したペアがある場合は、ユーザーキャッシュへの追加に失敗した name=>value ペアを含む配列を返します。
 */
function wincache_ucache_set($key, $value, $ttl, $values, $unused = NULL) {}