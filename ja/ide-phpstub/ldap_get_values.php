/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.ldap-get-values.php
 * @param resource $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @param resource $result_entry_identifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $attribute [optional] <p> TODO DESCRIPTION </p>
 * @return array 成功した場合、指定した属性に関する値を配列を返します。エラーの場合は
 * FALSE を返します。値の数を調べるには、結果の配列の
 * "count" という要素を確認します。個々の値にアクセスするには、
 * 整数値のインデックスを指定して配列にアクセスします。
 * 最初のインデックスは 0 となります。FALSELDAP では、ある属性に関して複数のエントリを持つことが可能です。
 * このため、たとえば一人の人間のディレクトリエントリに多数の
 * 電子メールアドレスがあったとしても、それらをすべて
 * "mail" という属性で管理することができます。
 * return_value["count"] = 属性の値の数
 * return_value[0] = 属性の最初の値
 * return_value[i] = 属性の i 番目の値return_value["count"] = 属性の値の数
 * return_value[0] = 属性の最初の値
 * return_value[i] = 属性の i 番目の値return_value["count"] = 属性の値の数
 * return_value[0] = 属性の最初の値
 * return_value[i] = 属性の i 番目の値
 */
function ldap_get_values($link_identifier, $result_entry_identifier, $attribute) {}