/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.shell-exec.php
 * @param string $cmd [optional] <p> TODO DESCRIPTION </p>
 * @return string 実行されたコマンドからの出力を返します。
 * エラーが発生した場合やコマンドが何も出力しなかった場合は NULL を返します。NULLこの関数は、エラーが発生した場合だけでなくプログラムが何も出力しなかった場合にも NULL を返します。
 * そのため、実行に失敗したノかどうかをこの関数では判断できません。
 * プログラムの終了コードを調べる必要があるときには exec を使いましょう。この関数は、エラーが発生した場合だけでなくプログラムが何も出力しなかった場合にも NULL を返します。
 * そのため、実行に失敗したノかどうかをこの関数では判断できません。
 * プログラムの終了コードを調べる必要があるときには exec を使いましょう。NULLexec
 */
function shell_exec($cmd) {}