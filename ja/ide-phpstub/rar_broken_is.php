/**
 * (PECL rar >= 3.0.0)<br/>
 * @link http://php.net/manual/en/rararchive.isbroken.php
 * @param RarArchive $rarfile [optional] <p> TODO DESCRIPTION </p>
 * @return bool アーカイブが壊れている場合に TRUE、壊れていない場合に FALSE を返します。
 * この関数は、渡されたファイルがすでに閉じている場合にも
 * FALSE を返します。どちらの原因かを特定するには
 * exceptions with RarException::setUsingExceptions
 * で例外を有効にするしかありませんが、普通は閉じたファイルを操作することはないので
 * これは不要なはずです。TRUEFALSEFALSERarException::setUsingExceptions
 */
function rar_broken_is($rarfile) {}