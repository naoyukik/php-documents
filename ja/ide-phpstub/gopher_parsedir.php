/**
 * (PECL net_gopher >= 0.1)<br/>
 * @link http://php.net/manual/en/function.gopher-parsedir.php
 * @param string $dirent [optional] <p> TODO DESCRIPTION </p>
 * @return array 以下の要素からなる連想配列を返します。
 * type -
 * GOPHER_XXX 定数のいずれか。
 * title - リソースの名前。
 * path - リソースのパス。
 * host -
 * このドキュメント (あるいはディレクトリ) を保持するホストのドメイン名。
 * port -
 * host に接続するポート。type -
 * GOPHER_XXX 定数のいずれか。
 * title - リソースの名前。
 * path - リソースのパス。
 * host -
 * このドキュメント (あるいはディレクトリ) を保持するホストのドメイン名。
 * port -
 * host に接続するポート。type -
 * GOPHER_XXX 定数のいずれか。type -
 * GOPHER_XXX 定数のいずれか。typeGOPHER_XXXtitle - リソースの名前。title - リソースの名前。titlepath - リソースのパス。path - リソースのパス。pathhost -
 * このドキュメント (あるいはディレクトリ) を保持するホストのドメイン名。host -
 * このドキュメント (あるいはディレクトリ) を保持するホストのドメイン名。hostport -
 * host に接続するポート。port -
 * host に接続するポート。porthost失敗した場合には、さらに data
 * というエントリがこの配列に追加され、そこにパースした行が含まれます。data
 */
function gopher_parsedir($dirent) {}