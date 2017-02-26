/**
 * (PECL id3 >= 0.1)<br/>
 * @link http://php.net/manual/en/function.id3-get-tag.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @param int $version [optional] <p> TODO DESCRIPTION </p>
 * @return array title や artist
 * といったキーを含む連想配列を返します。titleartistgenre には 0 から 147 までの整数値が格納されています。
 * id3_get_genre_name を使用することで、
 * この数値をジャンル名に変換することが可能です。genreid3_get_genre_name
 */
function id3_get_tag($filename, $version = ID3_BEST) {}