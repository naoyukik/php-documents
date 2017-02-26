/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.eval.php
 * @param string $code [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 評価されるコードの中で return が
 * コールされない限り、eval は NULL を返します。
 * return がコールされた場合は、その値を返します。
 * PHP 7 以降、評価されるコードの中でパースエラーが発生した場合は、
 * eval は ParseError 例外をスローします。
 * PHP 7 より前のバージョンでは、この場合に
 * eval は FALSE を返していました。
 * それ以降のコードは通常通り実行されます。
 * eval の中でのパースエラーを
 * set_error_handler
 * で捕捉することはできません。returnevalNULLreturnevalevalFALSEevalset_error_handler
 */
function eval($code) {}