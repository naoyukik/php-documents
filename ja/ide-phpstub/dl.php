/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.dl.php
 * @param string $library [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を、失敗した場合に FALSE を返します。 
 * 拡張モジュールのロード機能が無効だったり、あるいは
 * 無効化されている(enable_dl でオフにされているか
 * または php.ini で セーフモード が有効になっている)場合は、
 * E_ERROR を発行して実行は停止されます。
 * 指定されたライブラリをロードできず dl が
 * 失敗した場合、FALSE に加えて E_WARNING メッセージが
 * 発行されます。TRUEFALSEenable_dlphp.iniセーフモードE_ERRORdlFALSEE_WARNING
 */
function dl($library) {}