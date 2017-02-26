/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.popen.php
 * @param string $command [optional] <p> TODO DESCRIPTION </p>
 * @param string $mode [optional] <p> TODO DESCRIPTION </p>
 * @return resource fopen
 * により返されたファイルポインタと同様のものを返しますが、
 * それは(読み書きのいずれか一方でのみ使われる)片方向ストリームであり、
 * pclose
 * によりクローズされなければならないところが異なります。
 * このポインタは、fgets、fgetss
 * および fwrite のいずれかで使うことができます。
 * モードが 'r' のときは、返されるファイルポインタは
 * そのコマンドの STDOUT と等しくなります。また、モードが
 * 'w' のときは、返されるファイルポインタは
 * そのコマンドの STDIN と等しくなります。fopenpclosefgetsfgetssfwriteエラーが発生した場合は FALSE を返します。FALSE
 */
function popen($command, $mode) {}