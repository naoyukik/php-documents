/**
 * (PHP 4 >= 4.0.1, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.set-error-handler.php
 * @param callable $error_handler [optional] <p> TODO DESCRIPTION </p>
 * @param int $error_types [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 前に定義されたエラーハンドラ(ある場合)を含む文字列を返します。
 * 組み込みのエラーハンドラを使用している場合は NULL を返します。
 * また、無効なコールバックなどでエラーとなった場合も NULL を返します。
 * 前に定義されたハンドラがクラスメソッドの場合、この関数は、
 * クラスとメソッド名からなる添字配列を返します。NULLNULL
 */
function set_error_handler($error_handler, $error_types = E_ALL | E_STRICT) {}