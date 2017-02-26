/**
 * (PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.1)<br/>
 * @link http://php.net/manual/en/pdo.quote.php
 * @param string $string [optional] <p> TODO DESCRIPTION </p>
 * @param int $parameter_type [optional] <p> TODO DESCRIPTION </p>
 * @return string 理論上安全なクオートされた SQL ステートメントの文字列を返します。
 * ドライバがこの方法での引用符付けをサポートしていない場合は
 * FALSE を返します。FALSE
 */
function PDO.quote($string, $parameter_type = PDO::PARAM_STR) {}