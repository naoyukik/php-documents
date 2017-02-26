/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.setlocale.php
 * @param int $category [optional] <p> TODO DESCRIPTION </p>
 * @param array $locale [optional] <p> TODO DESCRIPTION </p>
 * @param string $... [optional] <p> TODO DESCRIPTION </p>
 * @return string 現在の新しいロケールを返します。ロケール機能が未実装、
 * 指定されたロケールが存在しない、カテゴリ名が無効などの場合は
 * FALSE を返します。FALSEまた、カテゴリ名が無効の場合は警告メッセージが発生します。
 * カテゴリやロケール名は、
 * RFC 1766
 * や ISO 639 にあります。
 * ロケールの命名方式は、システムによって異なります。RFC 1766ISO 639setlocale の戻り値は、
 * PHP が実行されているシステムに依存します。
 * システムの setlocale 関数が返す値を返すためです。setlocale の戻り値は、
 * PHP が実行されているシステムに依存します。
 * システムの setlocale 関数が返す値を返すためです。setlocalesetlocale
 */
function setlocale($category, $locale, $...) {}