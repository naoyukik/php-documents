/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.file.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param resource $context [optional] <p> TODO DESCRIPTION </p>
 * @return array ファイルを配列に入れて返します。
 * 配列の各要素はファイルの各行に対応します。改行記号はついたままとなります。
 * 失敗すると file は FALSE を返します。fileFALSEFILE_IGNORE_NEW_LINES を指定しない限り、
 * 配列に取り込まれた各行は行末文字も含みます。
 * 行末文字を取り除きたい場合には rtrim を使用する必要があります。FILE_IGNORE_NEW_LINES を指定しない限り、
 * 配列に取り込まれた各行は行末文字も含みます。
 * 行末文字を取り除きたい場合には rtrim を使用する必要があります。FILE_IGNORE_NEW_LINESrtrimマッキントッシュコンピュータ上で作成されたファイルを読み込む際に、
PHP が行末を認識できないという問題が発生した場合、
実行時の設定オプションauto_detect_line_endings を有効にする必要が生じるかもしれません。マッキントッシュコンピュータ上で作成されたファイルを読み込む際に、
PHP が行末を認識できないという問題が発生した場合、
実行時の設定オプションauto_detect_line_endings を有効にする必要が生じるかもしれません。PHPauto_detect_line_endings
 */
function file($filename, $flags, $context) {}