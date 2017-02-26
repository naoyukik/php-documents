/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.get-meta-tags.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @param bool $use_include_path [optional] <p> TODO DESCRIPTION </p>
 * @return array パースされたメタタグを含む配列を返します。name 属性の値が配列のキーとなります。content 属性の値が配列の要素となります。
 * 標準の配列関数を利用することでこれらの値に簡単にアクセスすることができます。
 * name 属性で特別な文字が使われている場合は '_' で代用されます。
 * それ以外は小文字に変換されます。もしも同じ名前のメタタグがある場合には
 * 最後のもののみが返されます。
 */
function get_meta_tags($filename, $use_include_path = false) {}