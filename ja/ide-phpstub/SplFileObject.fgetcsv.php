/**
 * (PHP 5 >= 5.1.0, PHP 7)<br/>
 * @link http://php.net/manual/en/splfileobject.fgetcsv.php
 * @param string $delimiter [optional] <p> TODO DESCRIPTION </p>
 * @param string $enclosure [optional] <p> TODO DESCRIPTION </p>
 * @param string $escape [optional] <p> TODO DESCRIPTION </p>
 * @return array 読み込まれたフィールドを含む数値添字配列もしくはエラーのときは FALSE を返します。FALSECSV ファイルの空白行は SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE を使わない限り単独の NULL フィールドで構成される配列として返され、この場合空白行は読み飛ばされます。CSV ファイルの空白行は SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE を使わない限り単独の NULL フィールドで構成される配列として返され、この場合空白行は読み飛ばされます。SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINENULL
 */
function SplFileObject.fgetcsv($delimiter = ",", $enclosure = "\"", $escape = "\\") {}