/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.debug-backtrace.php
 * @param int $options [optional] <p> TODO DESCRIPTION </p>
 * @param int $limit [optional] <p> TODO DESCRIPTION </p>
 * @return array 連想配列の配列を返します。連想配列の要素として返される可能性があるものは以下のとおりです。debug_backtrace から返される可能性がある要素
 * 名前
 * 型
 * 説明
 * function
 * string
 * カレントの関数名。
 * __FUNCTION__
 * も参照してください。
 * line
 * integer
 * カレントの行番号。
 * __LINE__
 * も参照してください。
 * file
 * string
 * カレントのファイル名。
 * __FILE__
 * も参照してください。
 * class
 * string
 * カレントのクラス名。
 * __CLASS__
 * も参照してください。
 * object
 * object
 * カレントのオブジェクト。
 * type
 * string
 * カレントのコール方式。メソッド呼び出しの場合は "->"、
 * 静的なメソッド呼び出しの場合は "::" が返されます。
 * 関数呼び出しの場合は何も返されません。
 * args
 * array
 * 関数の内部の場合、関数の引数のリストとなります。
 * インクルードされたファイル内では、
 * 読み込まれたファイルの名前となります。debug_backtrace から返される可能性がある要素
 * 名前
 * 型
 * 説明
 * function
 * string
 * カレントの関数名。
 * __FUNCTION__
 * も参照してください。
 * line
 * integer
 * カレントの行番号。
 * __LINE__
 * も参照してください。
 * file
 * string
 * カレントのファイル名。
 * __FILE__
 * も参照してください。
 * class
 * string
 * カレントのクラス名。
 * __CLASS__
 * も参照してください。
 * object
 * object
 * カレントのオブジェクト。
 * type
 * string
 * カレントのコール方式。メソッド呼び出しの場合は "->"、
 * 静的なメソッド呼び出しの場合は "::" が返されます。
 * 関数呼び出しの場合は何も返されません。
 * args
 * array
 * 関数の内部の場合、関数の引数のリストとなります。
 * インクルードされたファイル内では、
 * 読み込まれたファイルの名前となります。debug_backtrace名前
 * 型
 * 説明
 * function
 * string
 * カレントの関数名。
 * __FUNCTION__
 * も参照してください。
 * line
 * integer
 * カレントの行番号。
 * __LINE__
 * も参照してください。
 * file
 * string
 * カレントのファイル名。
 * __FILE__
 * も参照してください。
 * class
 * string
 * カレントのクラス名。
 * __CLASS__
 * も参照してください。
 * object
 * object
 * カレントのオブジェクト。
 * type
 * string
 * カレントのコール方式。メソッド呼び出しの場合は "->"、
 * 静的なメソッド呼び出しの場合は "::" が返されます。
 * 関数呼び出しの場合は何も返されません。
 * args
 * array
 * 関数の内部の場合、関数の引数のリストとなります。
 * インクルードされたファイル内では、
 * 読み込まれたファイルの名前となります。名前
 * 型
 * 説明名前
 * 型
 * 説明名前型説明function
 * string
 * カレントの関数名。
 * __FUNCTION__
 * も参照してください。
 * line
 * integer
 * カレントの行番号。
 * __LINE__
 * も参照してください。
 * file
 * string
 * カレントのファイル名。
 * __FILE__
 * も参照してください。
 * class
 * string
 * カレントのクラス名。
 * __CLASS__
 * も参照してください。
 * object
 * object
 * カレントのオブジェクト。
 * type
 * string
 * カレントのコール方式。メソッド呼び出しの場合は "->"、
 * 静的なメソッド呼び出しの場合は "::" が返されます。
 * 関数呼び出しの場合は何も返されません。
 * args
 * array
 * 関数の内部の場合、関数の引数のリストとなります。
 * インクルードされたファイル内では、
 * 読み込まれたファイルの名前となります。function
 * string
 * カレントの関数名。
 * __FUNCTION__
 * も参照してください。functionstringstringカレントの関数名。
 * __FUNCTION__
 * も参照してください。__FUNCTION__line
 * integer
 * カレントの行番号。
 * __LINE__
 * も参照してください。lineintegerintegerカレントの行番号。
 * __LINE__
 * も参照してください。__LINE__file
 * string
 * カレントのファイル名。
 * __FILE__
 * も参照してください。filestringstringカレントのファイル名。
 * __FILE__
 * も参照してください。__FILE__class
 * string
 * カレントのクラス名。
 * __CLASS__
 * も参照してください。classstringstringカレントのクラス名。
 * __CLASS__
 * も参照してください。クラス__CLASS__object
 * object
 * カレントのオブジェクト。objectobjectobjectカレントのオブジェクト。オブジェクトtype
 * string
 * カレントのコール方式。メソッド呼び出しの場合は "->"、
 * 静的なメソッド呼び出しの場合は "::" が返されます。
 * 関数呼び出しの場合は何も返されません。typestringstringカレントのコール方式。メソッド呼び出しの場合は "->"、
 * 静的なメソッド呼び出しの場合は "::" が返されます。
 * 関数呼び出しの場合は何も返されません。args
 * array
 * 関数の内部の場合、関数の引数のリストとなります。
 * インクルードされたファイル内では、
 * 読み込まれたファイルの名前となります。argsarrayarray関数の内部の場合、関数の引数のリストとなります。
 * インクルードされたファイル内では、
 * 読み込まれたファイルの名前となります。
 */
function debug_backtrace($options = DEBUG_BACKTRACE_PROVIDE_OBJECT, $limit) {}