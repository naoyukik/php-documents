/**
 * (PECL mongo >= 1.0.1)<br/>
 * @link http://php.net/manual/en/mongoid.gettimestamp.php
 * @return int この id が作られたときのエポックからの経過秒数を返します。
 * タイムスタンプの格納領域は 4 バイトしかないので、実際の時刻や幅広い時間を格納するには
 * MongoDate のほうが適しています。MongoDate
 */
function MongoId.getTimestamp() {}