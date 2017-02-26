/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.get-browser.php
 * @param string $user_agent [optional] <p> TODO DESCRIPTION </p>
 * @param bool $return_array [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 情報は、オブジェクトあるいは配列形式で返されます。
 * たとえばブラウザのメジャーバージョン番号、マイナーバージョン番号や
 * ID 文字列といったさまざまなデータが含まれています。また、
 * フレームや JavaScript、クッキーといった機能についての
 * TRUE/FALSE 値も含んでいます。TRUEFALSEcookies の値は、単にそのブラウザがクッキーを扱う機能を
 * 有していることを示すだけであり、ユーザーがクッキーを受け入れる設定に
 * しているかどうかを表すものではありません。それをチェックする唯一の方法は、
 * いったん setcookie でクッキーを設定してからリロードし、
 * その値を調べることです。cookiessetcookie
 */
function get_browser($user_agent, $return_array = false) {}