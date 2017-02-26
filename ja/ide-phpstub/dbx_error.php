/**
 * (PHP 4 >= 4.0.6, PHP 5 <= 5.0.5, PECL dbx >= 1.1.0)<br/>
 * @link http://php.net/manual/en/function.dbx-error.php
 * @param object $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @return string 抽象化されたモジュール（例えば mysql
 * モジュール）の直近の関数コールからエラーメッセージを有する文字列を返します。
 * 同じモジュールに複数の接続がある場合、
 * 最後のエラーのみが取得されます。別のモジュールに接続がある場合、
 * （link_identifier パラメータで）指定した
 * モジュールに関する直近のエラーのみが返されます。link_identifier
 */
function dbx_error($link_identifier) {}