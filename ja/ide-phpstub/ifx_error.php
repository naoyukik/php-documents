/**
 * (PHP 4, PHP <=5.2.0)<br/>
 * @link http://php.net/manual/en/function.ifx-error.php
 * @param resource $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return string Informix エラーコード (SQLSTATE & SQLCODE) は、
 * x [SQLSTATE = aa bbb SQLCODE=cccc]
 * のような形式になります。x [SQLSTATE = aa bbb SQLCODE=cccc]x = 空白 : エラーなしE : エラーN : データがもうないW : 警告? : 未定義文字 "x" が空白以外の文字だった場合、SQLSTATE および SQLCODE
 * でエラーの詳細情報を取得します。SQLSTATE および SQLCODE の詳細については、Informix マニュアルを参照ください。
 */
function ifx_error($link_identifier) {}