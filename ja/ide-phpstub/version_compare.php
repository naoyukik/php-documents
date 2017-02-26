/**
 * (PHP 4 >= 4.1.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.version-compare.php
 * @param string $version1 [optional] <p> TODO DESCRIPTION </p>
 * @param string $version2 [optional] <p> TODO DESCRIPTION </p>
 * @param string $operator [optional] <p> TODO DESCRIPTION </p>
 * @return mixed デフォルトでは、version_compare の返り値は
 * 最初のバージョンが 2 番目のバージョンより小さい場合に -1、
 * 同じ場合に 0、そして 2 番目のバージョンのほうが小さい場合に
 * 1 となります。version_compare-101オプションの引数 operator を使用すると、
 * 指定した演算子による関係を満たす場合に TRUE、それ以外の場合に
 * FALSE を返すようになります。operatorTRUEFALSE
 */
function version_compare($version1, $version2, $operator) {}