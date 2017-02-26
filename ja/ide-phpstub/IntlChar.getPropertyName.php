/**
 * (PHP 7)<br/>
 * @link http://php.net/manual/en/intlchar.getpropertyname.php
 * @param int $property [optional] <p> TODO DESCRIPTION </p>
 * @param int $nameChoice [optional] <p> TODO DESCRIPTION </p>
 * @return string Returns the name, or FALSE if either the property or the nameChoice
 * is out of range.FALSEpropertynameChoiceIf a given nameChoice returns FALSE, then all larger values of
 * nameChoice will return FALSE, with one exception: if FALSE is returned for
 * IntlChar::SHORT_PROPERTY_NAME, then IntlChar::LONG_PROPERTY_NAME
 * (and higher) may still return a non-FALSE value.nameChoiceFALSEnameChoiceFALSEFALSEIntlChar::SHORT_PROPERTY_NAMEIntlChar::LONG_PROPERTY_NAMEFALSE
 */
function IntlChar.getPropertyName($property, $nameChoice) {}