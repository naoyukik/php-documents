/**
 * (PHP 7)<br/>
 * @link http://php.net/manual/en/intlchar.charmirror.php
 * @param mixed $codepoint [optional] <p> TODO DESCRIPTION </p>
 * @return mixed Returns another Unicode code point that may serve as a mirror-image substitute, or codepoint
 * itself if there is no such mapping or codepoint does not have the
 * Bidi_Mirrored property.codepointcodepointBidi_Mirrored戻り値の型は integer になります。ただし、コードポイントを UTF-8 文字列で渡した場合は別で、その場合の返り値の型は文字列になります。integer
 */
function IntlChar.charMirror($codepoint) {}