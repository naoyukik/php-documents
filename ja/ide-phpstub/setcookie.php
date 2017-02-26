/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.setcookie.php
 * @param string $name [optional] <p> TODO DESCRIPTION </p>
 * @param string $value [optional] <p> TODO DESCRIPTION </p>
 * @param int $expire [optional] <p> TODO DESCRIPTION </p>
 * @param string $path [optional] <p> TODO DESCRIPTION </p>
 * @param string $domain [optional] <p> TODO DESCRIPTION </p>
 * @param bool $secure [optional] <p> TODO DESCRIPTION </p>
 * @param bool $httponly [optional] <p> TODO DESCRIPTION </p>
 * @return bool もしもこの関数をコールする前に何らかの出力がある場合には、
 * setcookie は失敗し FALSE を返します。
 * setcookie が正常に実行されると、TRUE を返します。
 * この関数では、ユーザーがクッキーを受け入れたかどうかを判断することはできません。setcookieFALSEsetcookieTRUE
 */
function setcookie($name, $value = "", $expire, $path = "", $domain = "", $secure = false, $httponly = false) {}