/**
 * (PECL paradox >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.px-get-schema.php
 * @param resource $pxdoc [optional] <p> TODO DESCRIPTION </p>
 * @param int $mode [optional] <p> TODO DESCRIPTION </p>
 * @return array データベースファイルのスキーマを連想配列で返します。
 * キーの名前はフィールド名と等しくなります。
 * 配列の各要素もまた連想配列となっており、2 つのフィールド
 * type および size
 * が含まれます。type は、
 * フィールド型の定数
 * の中のいずれかです。
 * size は、レコード内でこのフィールドが使用するバイト数です。
 * すべてのフィールドのサイズを合計したものが、
 * px-get-info で得られるレコードサイズと等しくなります。typesizetypeフィールド型の定数sizepx-get-info
 */
function px_get_schema($pxdoc, $mode) {}