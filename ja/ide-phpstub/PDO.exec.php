/**
 * (PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0)<br/>
 * @link http://php.net/manual/en/pdo.exec.php
 * @param string $statement [optional] <p> TODO DESCRIPTION </p>
 * @return int PDO::exec は、発行した SQL
 * ステートメントによって更新もしくは
 * 削除された行数を返します。
 * 1 行も作用しなかった場合、PDO::exec は
 * 0 を返します。PDO::execPDO::exec0この関数は論理値
FALSE を返す可能性がありますが、FALSE として評価される値を返す可能性もあります。
詳細については 論理値の
セクションを参照してください。この関数の返り値を調べるには
===演算子 を
使用してください。この関数は論理値
FALSE を返す可能性がありますが、FALSE として評価される値を返す可能性もあります。
詳細については 論理値の
セクションを参照してください。この関数の返り値を調べるには
===演算子 を
使用してください。FALSEFALSE論理値===演算子以下の例は PDO::exec
 * の戻り値の使用法を間違っています。結果として一行も更新されなかった場合に
 * die がコールされてしまうからです。
 * <?php
$db->exec() or die(print_r($db->errorInfo(), true));
?>PDO::execdie<?php
$db->exec() or die(print_r($db->errorInfo(), true));
?>
 */
function PDO.exec($statement) {}