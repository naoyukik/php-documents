/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.file-exists.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @return bool filename で指定したファイルまたはディレクトリが存在すれば
 * TRUE を返し、そうでなければ FALSE を返します。filenameTRUEFALSEこの関数は、シンボリックリンクの指す先のファイルが存在しない場合は
 * FALSE を返します。この関数は、シンボリックリンクの指す先のファイルが存在しない場合は
 * FALSE を返します。FALSEこの関数は セーフモード
 * の制限のためファイルにアクセスできない場合 FALSE を返します。
 * しかし safe_mode_include_dir
 * で指定されたディレクトリに存在する場合は
 * include
 * することができます。この関数は セーフモード
 * の制限のためファイルにアクセスできない場合 FALSE を返します。
 * しかし safe_mode_include_dir
 * で指定されたディレクトリに存在する場合は
 * include
 * することができます。セーフモードFALSEsafe_mode_include_dirincludeチェックは、実効ユーザーではなく実ユーザーの UID/GID
 * で行います。チェックは、実効ユーザーではなく実ユーザーの UID/GID
 * で行います。PHP の数値型は符号付整数であり、
 * 多くのプラットフォームでは 32 ビットの整数を取るため、
 * ファイルシステム関数の中には
 * 2GB より大きなファイルについては期待とは違う値を返すものがあります。PHP の数値型は符号付整数であり、
 * 多くのプラットフォームでは 32 ビットの整数を取るため、
 * ファイルシステム関数の中には
 * 2GB より大きなファイルについては期待とは違う値を返すものがあります。
 */
function file_exists($filename) {}