/**
 * (PHP 4 >= 4.0.2, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.mcrypt-generic-init.php
 * @param resource $td [optional] <p> TODO DESCRIPTION </p>
 * @param string $key [optional] <p> TODO DESCRIPTION </p>
 * @param string $iv [optional] <p> TODO DESCRIPTION </p>
 * @return int この関数は、エラー時に負の値を返します。キー長が不正な場合に
 * -3、メモリの確保に問題があった場合に -4、そしてそれ以外の返り値は
 * その他のエラーとなります。エラーが警告を発生させた場合、それが
 * 表示されます。間違ったパラメータが渡された場合には FALSE
 * が返されます。FALSE
 */
function mcrypt_generic_init($td, $key, $iv) {}