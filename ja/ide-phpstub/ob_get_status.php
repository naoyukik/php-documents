/**
 * (PHP 4 >= 4.2.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.ob-get-status.php
 * @param bool $full_status [optional] <p> TODO DESCRIPTION </p>
 * @return array パラメータ full_status を指定していなかったり
 * full_status = FALSE としていた場合は、
 * 以下の要素を保持する配列が返されます。
 * Array
(
 * [level] => 2
 * [type] => 0
 * [status] => 0
 * [name] => URL-Rewriter
 * [del] => 1
)
 * 単純な ob_get_status の出力結果
 * キー値
 * level出力階層レベル
 * typePHP_OUTPUT_HANDLER_INTERNAL (0) あるいは PHP_OUTPUT_HANDLER_USER (1)
 * statusPHP_OUTPUT_HANDLER_START (0)、PHP_OUTPUT_HANDLER_CONT (1) あるいは PHP_OUTPUT_HANDLER_END (2) のいずれか
 * nameアクティブな出力ハンドラの名前、あるいは設定されていない場合は ' default output handler'
 * delob_start が設定した削除フラグfull_statusfull_statusFALSEArray
(
 * [level] => 2
 * [type] => 0
 * [status] => 0
 * [name] => URL-Rewriter
 * [del] => 1
)Array
(
 * [level] => 2
 * [type] => 0
 * [status] => 0
 * [name] => URL-Rewriter
 * [del] => 1
)単純な ob_get_status の出力結果
 * キー値
 * level出力階層レベル
 * typePHP_OUTPUT_HANDLER_INTERNAL (0) あるいは PHP_OUTPUT_HANDLER_USER (1)
 * statusPHP_OUTPUT_HANDLER_START (0)、PHP_OUTPUT_HANDLER_CONT (1) あるいは PHP_OUTPUT_HANDLER_END (2) のいずれか
 * nameアクティブな出力ハンドラの名前、あるいは設定されていない場合は ' default output handler'
 * delob_start が設定した削除フラグob_get_statusキー値level出力階層レベルlevel出力階層レベルtypePHP_OUTPUT_HANDLER_INTERNAL (0) あるいは PHP_OUTPUT_HANDLER_USER (1)typePHP_OUTPUT_HANDLER_INTERNAL (0) あるいは PHP_OUTPUT_HANDLER_USER (1)PHP_OUTPUT_HANDLER_INTERNAL (0)PHP_OUTPUT_HANDLER_USER (1)statusPHP_OUTPUT_HANDLER_START (0)、PHP_OUTPUT_HANDLER_CONT (1) あるいは PHP_OUTPUT_HANDLER_END (2) のいずれかstatusPHP_OUTPUT_HANDLER_START (0)、PHP_OUTPUT_HANDLER_CONT (1) あるいは PHP_OUTPUT_HANDLER_END (2) のいずれかPHP_OUTPUT_HANDLER_STARTPHP_OUTPUT_HANDLER_CONTPHP_OUTPUT_HANDLER_ENDnameアクティブな出力ハンドラの名前、あるいは設定されていない場合は ' default output handler'nameアクティブな出力ハンドラの名前、あるいは設定されていない場合は ' default output handler'delob_start が設定した削除フラグdelob_start が設定した削除フラグob_startfull_status = TRUE を指定してコールした場合、
 * 出力バッファごとにひとつの要素を保持する配列が返されます。
 * 出力レベルが配列のキーとして使用され、対応する値として
 * 各出力レベルのステータス情報を配列として保持します。
 * Array
(
 * [0] => Array
 * (
 * [chunk_size] => 0
 * [size] => 40960
 * [block_size] => 10240
 * [type] => 1
 * [status] => 0
 * [name] => default output handler
 * [del] => 1
 * )
 * [1] => Array
 * (
 * [chunk_size] => 0
 * [size] => 40960
 * [block_size] => 10240
 * [type] => 0
 * [buffer_size] => 0
 * [status] => 0
 * [name] => URL-Rewriter
 * [del] => 1
 * )
 * )full_statusTRUEArray
(
 * [0] => Array
 * (
 * [chunk_size] => 0
 * [size] => 40960
 * [block_size] => 10240
 * [type] => 1
 * [status] => 0
 * [name] => default output handler
 * [del] => 1
 * )
 * [1] => Array
 * (
 * [chunk_size] => 0
 * [size] => 40960
 * [block_size] => 10240
 * [type] => 0
 * [buffer_size] => 0
 * [status] => 0
 * [name] => URL-Rewriter
 * [del] => 1
 * )
 * )Array
(
 * [0] => Array
 * (
 * [chunk_size] => 0
 * [size] => 40960
 * [block_size] => 10240
 * [type] => 1
 * [status] => 0
 * [name] => default output handler
 * [del] => 1
 * )
 * [1] => Array
 * (
 * [chunk_size] => 0
 * [size] => 40960
 * [block_size] => 10240
 * [type] => 0
 * [buffer_size] => 0
 * [status] => 0
 * [name] => URL-Rewriter
 * [del] => 1
 * )
 * )完全な出力には、追加項目として以下の要素が含まれます。
 * 完全な ob_get_status の出力結果
 * キー値
 * chunk_sizeob_start で設定したチャンクの大きさ
 * size...
 * blocksize...完全な ob_get_status の出力結果
 * キー値
 * chunk_sizeob_start で設定したチャンクの大きさ
 * size...
 * blocksize...ob_get_statusキー値chunk_sizeob_start で設定したチャンクの大きさchunk_sizeob_start で設定したチャンクの大きさob_startsize...size...blocksize...blocksize...
 */
function ob_get_status($full_status = FALSE) {}