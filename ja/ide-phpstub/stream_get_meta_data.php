/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.stream-get-meta-data.php
 * @param resource $stream [optional] <p> TODO DESCRIPTION </p>
 * @return array 結果の配列は次のような項目を含みます。timed_out (bool) - 最後に
 * fread または fgets
 * でデータを待っている時にタイムアウトした場合 TRUE を返します。
 * blocked (bool) -
 * ストリームがブロック I/O モードの場合に TRUE となります。
 * stream_set_blocking を参照ください。
 * eof (bool) - ストリームが EOF に
 * 達した時 TRUE となります。
 * ストリームがソケットベースの場合、このメンバーは、
 * たとえ unread_bytes が 0 でなくても
 * TRUE になる場合があることに注意してください。
 * まだデータがあるかどうかを調べるには、このパラメータではなく、
 * feof を使ってください。
 * unread_bytes (int) - PHP の
 * 内部バッファにあるデータのバイト数。
 * スクリプト中でこの値を使用してはいけません。
 * stream_type (string) -
 * ストリームの下層にある実装を表すラベル
 * wrapper_type (string) -
 * ストリームを覆うプロトコルラッパーを表すラベル。
 * ラッパーについては  を参照ください。
 * wrapper_data (mixed) -
 * ストリームに付随しているラッパーの固有のデータ。
 * ラッパーとその固有の情報については、
 * を参照ください。
 * mode (string) - このストリームに要求される
 * アクセスモード（fopen()
 * リファレンスの表 1 を参照ください）。
 * seekable (bool) - 現在のストリーム内で
 * 移動が可能かどうか。
 * uri (string) - このストリームに関連付けられた
 * URI / ファイル名。timed_out (bool) - 最後に
 * fread または fgets
 * でデータを待っている時にタイムアウトした場合 TRUE を返します。timed_out (bool) - 最後に
 * fread または fgets
 * でデータを待っている時にタイムアウトした場合 TRUE を返します。timed_outfreadfgetsTRUEblocked (bool) -
 * ストリームがブロック I/O モードの場合に TRUE となります。
 * stream_set_blocking を参照ください。blocked (bool) -
 * ストリームがブロック I/O モードの場合に TRUE となります。
 * stream_set_blocking を参照ください。blockedTRUEstream_set_blockingeof (bool) - ストリームが EOF に
 * 達した時 TRUE となります。
 * ストリームがソケットベースの場合、このメンバーは、
 * たとえ unread_bytes が 0 でなくても
 * TRUE になる場合があることに注意してください。
 * まだデータがあるかどうかを調べるには、このパラメータではなく、
 * feof を使ってください。eof (bool) - ストリームが EOF に
 * 達した時 TRUE となります。
 * ストリームがソケットベースの場合、このメンバーは、
 * たとえ unread_bytes が 0 でなくても
 * TRUE になる場合があることに注意してください。
 * まだデータがあるかどうかを調べるには、このパラメータではなく、
 * feof を使ってください。eofTRUEunread_bytesTRUEfeofunread_bytes (int) - PHP の
 * 内部バッファにあるデータのバイト数。
 * スクリプト中でこの値を使用してはいけません。unread_bytes (int) - PHP の
 * 内部バッファにあるデータのバイト数。unread_bytesスクリプト中でこの値を使用してはいけません。スクリプト中でこの値を使用してはいけません。stream_type (string) -
 * ストリームの下層にある実装を表すラベルstream_type (string) -
 * ストリームの下層にある実装を表すラベルstream_typewrapper_type (string) -
 * ストリームを覆うプロトコルラッパーを表すラベル。
 * ラッパーについては  を参照ください。wrapper_type (string) -
 * ストリームを覆うプロトコルラッパーを表すラベル。
 * ラッパーについては  を参照ください。wrapper_typewrapper_data (mixed) -
 * ストリームに付随しているラッパーの固有のデータ。
 * ラッパーとその固有の情報については、
 * を参照ください。wrapper_data (mixed) -
 * ストリームに付随しているラッパーの固有のデータ。
 * ラッパーとその固有の情報については、
 * を参照ください。wrapper_datamode (string) - このストリームに要求される
 * アクセスモード（fopen()
 * リファレンスの表 1 を参照ください）。mode (string) - このストリームに要求される
 * アクセスモード（fopen()
 * リファレンスの表 1 を参照ください）。modefopen()seekable (bool) - 現在のストリーム内で
 * 移動が可能かどうか。seekable (bool) - 現在のストリーム内で
 * 移動が可能かどうか。seekableuri (string) - このストリームに関連付けられた
 * URI / ファイル名。uri (string) - このストリームに関連付けられた
 * URI / ファイル名。uri
 */
function stream_get_meta_data($stream) {}