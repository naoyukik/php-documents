/**
 * (PECL mongo >=1.0.1)<br/>
 * @link http://php.net/manual/en/mongodb.authenticate.php
 * @param string $username [optional] <p> TODO DESCRIPTION </p>
 * @param string $password [optional] <p> TODO DESCRIPTION </p>
 * @return array データベースからの応答を返します。ログインに成功すると、次のようになります。
 * <?php
array("ok" => 1);
?>
 * 何かが失敗した場合は、次のようになります。
 * <?php
array("ok" => 0, "errmsg" => "auth fails");
?>
 * ("auth fails" は別のメッセージかもしれません。
 * データベースのバージョンや問題の原因によって変わります)。<?php
array("ok" => 1);
?><?php
array("ok" => 0, "errmsg" => "auth fails");
?>
 */
function MongoDB.authenticate($username, $password) {}