/**
 * (PECL id3 >= 0.1)<br/>
 * @link http://php.net/manual/en/function.id3-get-version.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @return int MP3 ファイル内の ID3 タグのバージョンを返します。
 * ID3 v1.x のタグおよび v2.x のタグを同時に保持することも可能なので、
 * この関数の返す値を利用する際には
 * 定義済みの定数 ID3_V1_0、
 * ID3_V1_1 および ID3_V2
 * とのビット比較を行わなければなりません。ID3_V1_0ID3_V1_1ID3_V2
 */
function id3_get_version($filename) {}