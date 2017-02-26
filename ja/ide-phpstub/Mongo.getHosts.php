/**
 * @link http://php.net/manual/en/mongo.gethosts.php
 * @return array セット内のホストに関する情報の配列を返します。
 * 各ホストのホスト名、健康状態 (1 が最高)、状態 (1 はプライマリ、2 はセカンダリ、
 * 0 はそれ以外)、サーバーへの ping にかかる時間、
 * そして最後に ping したのはいつなのかが含まれます。
 * たとえば、ローカルで稼働しているメンバ 3 台のレプリカセットだとこのようになります。array(2) {
 * ["A:27017"]=>
 * array(4) {
 * ["host"]=>
 * "A"
 * ["port"]=>
 * 27017
 * ["health"]=>
 * int(1)
 * ["state"]=>
 * int(2)
 * ["ping"]=>
 * int(369)
 * ["lastPing"]=>
 * int(1309470644)
 * }
 * ["B:27017"]=>
 * array(4) {
 * ["host"]=>
 * "B"
 * ["port"]=>
 * 27017
 * ["health"]=>
 * int(1)
 * ["state"]=>
 * int(1)
 * ["ping"]=>
 * int(139)
 * ["lastPing"]=>
 * int(1309470644)
 * }
 * ["C:27017"]=>
 * array(4) {
 * ["host"]=>
 * "C"
 * ["port"]=>
 * 27017
 * ["health"]=>
 * int(1)
 * ["state"]=>
 * int(2)
 * ["ping"]=>
 * int(1012)
 * ["lastPing"]=>
 * int(1309470644)
 * }
}
 */
function Mongo.getHosts() {}