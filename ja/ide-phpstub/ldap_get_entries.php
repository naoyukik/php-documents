/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.ldap-get-entries.php
 * @param resource $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @param resource $result_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return array 成功時に完全な結果情報を多次元配列で返します。エラーの場合に FALSE
 * を返します。FALSE配列の構造は次のようになります。
 * 属性インデックスは、小文字に変換されます
 * (属性は大文字小文字を区別しませんが、配列インデックスとして使用する時は別です)。
 * return_value["count"] = 結果におけるエントリの数
return_value[0] : 最初のエントリの詳細情報を参照します
 * return_value[i]["dn"] =  結果における i 番目のエントリ DN 
 * return_value[i]["count"] = i 番目のエントリにおける属性の数
return_value[i][j] = 結果における i 番目のエントリにおける j 番目の属性名
 * return_value[i]["attribute"]["count"] = i 番目のエントリにおける属性に関する値の数
return_value[i]["attribute"][j] = i 番目のエントリにおける j 番目の値return_value["count"] = 結果におけるエントリの数
return_value[0] : 最初のエントリの詳細情報を参照します
 * return_value[i]["dn"] =  結果における i 番目のエントリ DN 
 * return_value[i]["count"] = i 番目のエントリにおける属性の数
return_value[i][j] = 結果における i 番目のエントリにおける j 番目の属性名
 * return_value[i]["attribute"]["count"] = i 番目のエントリにおける属性に関する値の数
return_value[i]["attribute"][j] = i 番目のエントリにおける j 番目の値return_value["count"] = 結果におけるエントリの数
return_value[0] : 最初のエントリの詳細情報を参照します
 * return_value[i]["dn"] =  結果における i 番目のエントリ DN 
 * return_value[i]["count"] = i 番目のエントリにおける属性の数
return_value[i][j] = 結果における i 番目のエントリにおける j 番目の属性名
 * return_value[i]["attribute"]["count"] = i 番目のエントリにおける属性に関する値の数
return_value[i]["attribute"][j] = i 番目のエントリにおける j 番目の値
 */
function ldap_get_entries($link_identifier, $result_identifier) {}