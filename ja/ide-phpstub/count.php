/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.count.php
 * @param mixed $array_or_countable [optional] <p> TODO DESCRIPTION </p>
 * @param int $mode [optional] <p> TODO DESCRIPTION </p>
 * @return int array_or_countable に含まれる要素の数を返します。
 * もしパラメータが配列もしくは
 * Countable インターフェイスを実装したオブジェクトではない場合、
 * 1 が返されます。
 * ひとつ例外があり、array_or_countable が NULL の場合、
 * 0 が返されます。array_or_countableCountable1array_or_countableNULL0count は、セットされていない変数に関して 0
 * を返しますが、変数が空の配列として初期化されている場合にも 0 を返します。
 * ある変数がセットされているかどうかを調べるには、
 * isset を使用してください。count は、セットされていない変数に関して 0
 * を返しますが、変数が空の配列として初期化されている場合にも 0 を返します。
 * ある変数がセットされているかどうかを調べるには、
 * isset を使用してください。countisset
 */
function count($array_or_countable, $mode = COUNT_NORMAL) {}