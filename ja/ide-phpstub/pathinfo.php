/**
 * (PHP 4 >= 4.0.3, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.pathinfo.php
 * @param string $path [optional] <p> TODO DESCRIPTION </p>
 * @param int $options [optional] <p> TODO DESCRIPTION </p>
 * @return mixed options パラメータを渡さなかった場合は、次の要素を含む連想配列を返します。
 * dirname、basename、
 * extension (存在すれば)、そして filename。optionsdirnamebasenameextensionfilenamepath に複数の拡張子が含まれる場合は、
 * PATHINFO_EXTENSION は最後の拡張子だけを返します。また、
 * PATHINFO_FILENAME は最後の拡張子だけを取り除きます
 * (最初のサンプルを参照ください)。path に複数の拡張子が含まれる場合は、
 * PATHINFO_EXTENSION は最後の拡張子だけを返します。また、
 * PATHINFO_FILENAME は最後の拡張子だけを取り除きます
 * (最初のサンプルを参照ください)。pathPATHINFO_EXTENSIONPATHINFO_FILENAMEpath に拡張子がない場合は、
 * extension 要素は返されません
 * (以下の二番目の例を参照ください)。path に拡張子がない場合は、
 * extension 要素は返されません
 * (以下の二番目の例を参照ください)。pathextensionpath の basename
 * がドットで始まる場合は、それに続く文字は
 * extension とみなされます。そして filename
 * は空文字列となります (以下の三番目の例を参照ください)。path の basename
 * がドットで始まる場合は、それに続く文字は
 * extension とみなされます。そして filename
 * は空文字列となります (以下の三番目の例を参照ください)。pathbasenameextensionfilenameoptions を指定すると、
 * 要求した要素を文字列で返します。options
 */
function pathinfo($path, $options = PATHINFO_DIRNAME | PATHINFO_BASENAME | PATHINFO_EXTENSION | PATHINFO_FILENAME) {}