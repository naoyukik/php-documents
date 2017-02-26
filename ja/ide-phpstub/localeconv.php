/**
 * (PHP 4 >= 4.0.5, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.localeconv.php
 * @return array localeconv は、
 * setlocale で設定された現在のロケールに基づきデータを返します。
 * 返される連想配列は、次のフィールドを有します。
 * 配列要素
 * 説明
 * decimal_point
 * 小数点文字
 * thousands_sep
 * 千毎の区切り文字
 * grouping
 * 数値集合を有する配列
 * int_curr_symbol
 * 国際通貨記号 (すなわち、USD)
 * currency_symbol
 * ローカルな通貨記号 (すなわち、$)
 * mon_decimal_point
 * 通貨用の小数点文字
 * mon_thousands_sep
 * 通貨用の千毎の区切り文字
 * mon_grouping
 * 通貨集合を有する配列
 * positive_sign
 * 正の値を表す記号
 * negative_sign
 * 負の値を表す記号
 * int_frac_digits
 * 国際分割桁
 * frac_digits
 * ローカルな分割桁
 * p_cs_precedes
 * currency_symbol が正の値を前に置く場合にTRUE、後に置く場合に
 * FALSE
 * p_sep_by_space
 * 正の値から currency_symbol を1文字の空白で区切る場合にTRUE、
 * そうでない場合にFALSE
 * n_cs_precedes
 * currency_symbol が負の値を前に置く場合にTRUE、後に置く場合に
 * FALSE
 * n_sep_by_space
 * 負の値から currency_symbol を1文字の空白で区切る場合にTRUE、
 * そうでない場合にFALSE
 * p_sign_posn
 * 0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列
 * n_sign_posn
 * 0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列localeconvsetlocale配列要素
 * 説明
 * decimal_point
 * 小数点文字
 * thousands_sep
 * 千毎の区切り文字
 * grouping
 * 数値集合を有する配列
 * int_curr_symbol
 * 国際通貨記号 (すなわち、USD)
 * currency_symbol
 * ローカルな通貨記号 (すなわち、$)
 * mon_decimal_point
 * 通貨用の小数点文字
 * mon_thousands_sep
 * 通貨用の千毎の区切り文字
 * mon_grouping
 * 通貨集合を有する配列
 * positive_sign
 * 正の値を表す記号
 * negative_sign
 * 負の値を表す記号
 * int_frac_digits
 * 国際分割桁
 * frac_digits
 * ローカルな分割桁
 * p_cs_precedes
 * currency_symbol が正の値を前に置く場合にTRUE、後に置く場合に
 * FALSE
 * p_sep_by_space
 * 正の値から currency_symbol を1文字の空白で区切る場合にTRUE、
 * そうでない場合にFALSE
 * n_cs_precedes
 * currency_symbol が負の値を前に置く場合にTRUE、後に置く場合に
 * FALSE
 * n_sep_by_space
 * 負の値から currency_symbol を1文字の空白で区切る場合にTRUE、
 * そうでない場合にFALSE
 * p_sign_posn
 * 0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列
 * n_sign_posn
 * 0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列配列要素
 * 説明
 * decimal_point
 * 小数点文字
 * thousands_sep
 * 千毎の区切り文字
 * grouping
 * 数値集合を有する配列
 * int_curr_symbol
 * 国際通貨記号 (すなわち、USD)
 * currency_symbol
 * ローカルな通貨記号 (すなわち、$)
 * mon_decimal_point
 * 通貨用の小数点文字
 * mon_thousands_sep
 * 通貨用の千毎の区切り文字
 * mon_grouping
 * 通貨集合を有する配列
 * positive_sign
 * 正の値を表す記号
 * negative_sign
 * 負の値を表す記号
 * int_frac_digits
 * 国際分割桁
 * frac_digits
 * ローカルな分割桁
 * p_cs_precedes
 * currency_symbol が正の値を前に置く場合にTRUE、後に置く場合に
 * FALSE
 * p_sep_by_space
 * 正の値から currency_symbol を1文字の空白で区切る場合にTRUE、
 * そうでない場合にFALSE
 * n_cs_precedes
 * currency_symbol が負の値を前に置く場合にTRUE、後に置く場合に
 * FALSE
 * n_sep_by_space
 * 負の値から currency_symbol を1文字の空白で区切る場合にTRUE、
 * そうでない場合にFALSE
 * p_sign_posn
 * 0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列
 * n_sign_posn
 * 0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列配列要素
 * 説明配列要素
 * 説明配列要素説明decimal_point
 * 小数点文字
 * thousands_sep
 * 千毎の区切り文字
 * grouping
 * 数値集合を有する配列
 * int_curr_symbol
 * 国際通貨記号 (すなわち、USD)
 * currency_symbol
 * ローカルな通貨記号 (すなわち、$)
 * mon_decimal_point
 * 通貨用の小数点文字
 * mon_thousands_sep
 * 通貨用の千毎の区切り文字
 * mon_grouping
 * 通貨集合を有する配列
 * positive_sign
 * 正の値を表す記号
 * negative_sign
 * 負の値を表す記号
 * int_frac_digits
 * 国際分割桁
 * frac_digits
 * ローカルな分割桁
 * p_cs_precedes
 * currency_symbol が正の値を前に置く場合にTRUE、後に置く場合に
 * FALSE
 * p_sep_by_space
 * 正の値から currency_symbol を1文字の空白で区切る場合にTRUE、
 * そうでない場合にFALSE
 * n_cs_precedes
 * currency_symbol が負の値を前に置く場合にTRUE、後に置く場合に
 * FALSE
 * n_sep_by_space
 * 負の値から currency_symbol を1文字の空白で区切る場合にTRUE、
 * そうでない場合にFALSE
 * p_sign_posn
 * 0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列
 * n_sign_posn
 * 0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列decimal_point
 * 小数点文字decimal_point小数点文字thousands_sep
 * 千毎の区切り文字thousands_sep千毎の区切り文字grouping
 * 数値集合を有する配列grouping数値集合を有する配列int_curr_symbol
 * 国際通貨記号 (すなわち、USD)int_curr_symbol国際通貨記号 (すなわち、USD)currency_symbol
 * ローカルな通貨記号 (すなわち、$)currency_symbolローカルな通貨記号 (すなわち、$)mon_decimal_point
 * 通貨用の小数点文字mon_decimal_point通貨用の小数点文字mon_thousands_sep
 * 通貨用の千毎の区切り文字mon_thousands_sep通貨用の千毎の区切り文字mon_grouping
 * 通貨集合を有する配列mon_grouping通貨集合を有する配列positive_sign
 * 正の値を表す記号positive_sign正の値を表す記号negative_sign
 * 負の値を表す記号negative_sign負の値を表す記号int_frac_digits
 * 国際分割桁int_frac_digits国際分割桁frac_digits
 * ローカルな分割桁frac_digitsローカルな分割桁p_cs_precedes
 * currency_symbol が正の値を前に置く場合にTRUE、後に置く場合に
 * FALSEp_cs_precedescurrency_symbol が正の値を前に置く場合にTRUE、後に置く場合に
 * FALSETRUEFALSEp_sep_by_space
 * 正の値から currency_symbol を1文字の空白で区切る場合にTRUE、
 * そうでない場合にFALSEp_sep_by_space正の値から currency_symbol を1文字の空白で区切る場合にTRUE、
 * そうでない場合にFALSETRUEFALSEn_cs_precedes
 * currency_symbol が負の値を前に置く場合にTRUE、後に置く場合に
 * FALSEn_cs_precedescurrency_symbol が負の値を前に置く場合にTRUE、後に置く場合に
 * FALSETRUEFALSEn_sep_by_space
 * 負の値から currency_symbol を1文字の空白で区切る場合にTRUE、
 * そうでない場合にFALSEn_sep_by_space負の値から currency_symbol を1文字の空白で区切る場合にTRUE、
 * そうでない場合にFALSETRUEFALSEp_sign_posn
 * 0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列p_sign_posn0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列0 - 量および通貨記号を括る括弧1 - 量および通貨記号の前に置く符号文字列2 - 量および通貨記号の後に置く符号文字列3 - 通貨記号の直前に置く符号文字列4 - 通貨記号の直後に置く符号文字列n_sign_posn
 * 0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列n_sign_posn0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列0 - 量および通貨記号を括る括弧1 - 量および通貨記号の前に置く符号文字列2 - 量および通貨記号の後に置く符号文字列3 - 通貨記号の直前に置く符号文字列4 - 通貨記号の直後に置く符号文字列n_sign_posn や n_sign_posn
 * は、フォーマッタオプションの文字列を含みます。それぞれの数字は
 * 上に一覧されている条件の 1 つを表します。n_sign_posnn_sign_posngroupingフィールドには、グループ化する方法を表す数字を定義する配
 * 列が含まれます。例えば、nl_NL ロケール用の通貨 groupingフィールド
 * (UTF-8 モードでのユーロ記号) には、
 * 3、3を値とする要素数2の配列が含まれます。この配列のより高い添字に
 * は、より左側のグループに関するものが含まれます。
 * ある配列要素が、CHAR_MAX に等しい場合、
 * さらにグループは行われません。配列要素が0に等しい場合、
 * 前の要素が使用されています。CHAR_MAX
 */
function localeconv() {}