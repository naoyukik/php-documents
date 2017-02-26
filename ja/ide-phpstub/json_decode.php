/**
 * (PHP 5 >= 5.2.0, PECL json >= 1.2.0, PHP 7)<br/>
 * @link http://php.net/manual/en/function.json-decode.php
 * @param string $json [optional] <p> TODO DESCRIPTION </p>
 * @param bool $assoc [optional] <p> TODO DESCRIPTION </p>
 * @param int $depth [optional] <p> TODO DESCRIPTION </p>
 * @param int $options [optional] <p> TODO DESCRIPTION </p>
 * @return mixed json でエンコードされたデータを、適切な PHP の型として返します。
 * true、false および
 * null はそれぞれ TRUE、FALSE
 * そして NULL として返されます。
 * json のデコードに失敗したり
 * エンコードされたデータが再帰制限を超えているなどの場合、NULL を返します。jsontruefalsenullTRUEFALSENULLjsonNULL
 */
function json_decode($json, $assoc = false, $depth = 512, $options) {}