/**
 * (PHP 4 >= 4.0.6, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.mb-strlen.php
 * @param string $str [optional] <p> TODO DESCRIPTION </p>
 * @param string $encoding [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 文字エンコーディング
 * encoding の文字列
 * str の文字数を返します。
 * マルチバイト文字の一文字は1個として数えられます。encodingstr無効な encoding を指定した場合は FALSE を返します。encodingFALSEこの関数は論理値
FALSE を返す可能性がありますが、FALSE として評価される値を返す可能性もあります。
詳細については 論理値の
セクションを参照してください。この関数の返り値を調べるには
===演算子 を
使用してください。この関数は論理値
FALSE を返す可能性がありますが、FALSE として評価される値を返す可能性もあります。
詳細については 論理値の
セクションを参照してください。この関数の返り値を調べるには
===演算子 を
使用してください。FALSEFALSE論理値===演算子
 */
function mb_strlen($str, $encoding = mb_internal_encoding()) {}