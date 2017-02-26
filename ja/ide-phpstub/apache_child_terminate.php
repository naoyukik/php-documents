/**
 * (PHP 4 >= 4.0.5, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.apache-child-terminate.php
 * @return bool もし PHP が Apache 1 モジュールとして実行している場合、TRUE を返します。
 * この Apache バージョンはマルチスレッドバージョンではなく、
 * child_terminate PHP
 * ディレクティブは有効です (デフォルトは無効) 。
 * もしこれらの条件に適合しない場合 FALSE が返され、エラーレベル
 * E_WARNING が発生します。TRUEchild_terminateFALSEE_WARNING
 */
function apache_child_terminate() {}