/**
 * (PHP 4 >= 4.0.3, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.move-uploaded-file.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @param string $destination [optional] <p> TODO DESCRIPTION </p>
 * @return bool 成功した場合に TRUE を返します。TRUEfilename が有効なアップロードファイルでない場合、
 * 処理は行われず、move_uploaded_file は
 * FALSE を返します。filenamemove_uploaded_fileFALSEfilename が有効なアップロードファイルであるが、
 * 何らかの理由により、移動できない場合、処理は行われず、
 * move_uploaded_file は
 * FALSE を返します。加えて、警告が出力されます。filenamemove_uploaded_fileFALSE
 */
function move_uploaded_file($filename, $destination) {}