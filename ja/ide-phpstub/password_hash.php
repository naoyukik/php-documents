/**
 * (PHP 5 >= 5.5.0, PHP 7)<br/>
 * @link http://php.net/manual/en/function.password-hash.php
 * @param string $password [optional] <p> TODO DESCRIPTION </p>
 * @param integer $algo [optional] <p> TODO DESCRIPTION </p>
 * @param array $options [optional] <p> TODO DESCRIPTION </p>
 * @return string ハッシュしたパスワードを返します。失敗した場合に FALSE を返します。FALSE使ったアルゴリズムやコスト、そしてソフトもハッシュの一部として返されます。
 * つまり、ハッシュを検証するために必要な情報は、すべてそこに含まれているということです。
 * そのため、password_verify でハッシュを検証するときに、
 * ソルトやアルゴリズムの情報を別に保存する必要はありません。password_verify
 */
function password_hash($password, $algo, $options) {}