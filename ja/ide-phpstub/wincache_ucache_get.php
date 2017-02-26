/**
 * (PECL wincache >= 1.1.0)<br/>
 * @link http://php.net/manual/en/function.wincache-ucache-get.php
 * @param mixed $key [optional] <p> TODO DESCRIPTION </p>
 * @param bool $success [optional] <p> TODO DESCRIPTION </p>
 * @return mixed key が文字列のときは、そのキーに格納された変数の値を返します。
 * success には、成功した場合に TRUE、
 * 失敗した場合に FALSE が設定されます。keysuccessTRUEFALSEkey が配列のときは、success には常に
 * TRUE が設定されます。返される配列 (name => value のペア)
 * には、取得に成功したペアだけが含まれます。指定したキーがひとつもユーザーキャッシュから見つからなかった場合は
 * 空の配列を返します。keysuccessTRUE
 */
function wincache_ucache_get($key, $success) {}