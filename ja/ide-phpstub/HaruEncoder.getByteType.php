/**
 * (PECL haru >= 0.0.1)<br/>
 * @link http://php.net/manual/en/haruencoder.getbytetype.php
 * @param string $text [optional] <p> TODO DESCRIPTION </p>
 * @param int $index [optional] <p> TODO DESCRIPTION </p>
 * @return int テキスト内の指定した位置のバイトの型を返します。
 * 結果は以下のいずれかの値となります。
 * HaruEncoder::BYTE_TYPE_SINGLE - シングルバイト文字。
 * HaruEncoder::BYTE_TYPE_LEAD -
 * ダブルバイト文字の先頭バイト。
 * HaruEncoder::BYTE_TYPE_TRAIL -
 * ダブルバイト文字の後続バイト。
 * HaruEncoder::BYTE_TYPE_UNKNOWN -
 * エンコーダが無効、あるいはバイトの型の取得に失敗。HaruEncoder::BYTE_TYPE_SINGLE - シングルバイト文字。
 * HaruEncoder::BYTE_TYPE_LEAD -
 * ダブルバイト文字の先頭バイト。
 * HaruEncoder::BYTE_TYPE_TRAIL -
 * ダブルバイト文字の後続バイト。
 * HaruEncoder::BYTE_TYPE_UNKNOWN -
 * エンコーダが無効、あるいはバイトの型の取得に失敗。HaruEncoder::BYTE_TYPE_SINGLE - シングルバイト文字。HaruEncoder::BYTE_TYPE_SINGLEHaruEncoder::BYTE_TYPE_LEAD -
 * ダブルバイト文字の先頭バイト。HaruEncoder::BYTE_TYPE_LEADHaruEncoder::BYTE_TYPE_TRAIL -
 * ダブルバイト文字の後続バイト。HaruEncoder::BYTE_TYPE_TRAILHaruEncoder::BYTE_TYPE_UNKNOWN -
 * エンコーダが無効、あるいはバイトの型の取得に失敗。HaruEncoder::BYTE_TYPE_UNKNOWN
 */
function HaruEncoder.getByteType($text, $index) {}