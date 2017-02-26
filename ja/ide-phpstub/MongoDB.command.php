/**
 * (PECL mongo >=0.9.2)<br/>
 * @link http://php.net/manual/en/mongodb.command.php
 * @param array $command [optional] <p> TODO DESCRIPTION </p>
 * @param array $options [optional] <p> TODO DESCRIPTION </p>
 * @param string $hash [optional] <p> TODO DESCRIPTION </p>
 * @return array データベースの応答を返します。データベースの応答はすべて、
 * 最大で 1 件のドキュメントになります。つまり、データベースへのコマンドの結果は決して
 * 16MB を超えないということです。結果のドキュメントの構造はコマンドによって異なりますが、
 * 大半の結果には ok フィールドがあって、これが成功したか失敗したかを表します。
 * また、同じく大半の結果には results フィールドもあって、
 * ここにドキュメントの配列が含まれます。okresults
 */
function MongoDB.command($command, $options = array(), $hash) {}