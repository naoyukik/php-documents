/**
 * (PHP 7)<br/>
 * @link http://php.net/manual/en/intlchar.getintpropertyvalue.php
 * @param mixed $codepoint [optional] <p> TODO DESCRIPTION </p>
 * @param int $property [optional] <p> TODO DESCRIPTION </p>
 * @return int Returns the numeric value that is directly the property value or, for enumerated properties, corresponds to the
 * numeric value of the enumerated constant of the respective property value enumeration type.Returns 0 or 1 (for FALSE/TRUE) for binary Unicode properties.01FALSETRUEReturns a bit-mask for mask properties.Returns 0 if property is out of bounds or if the Unicode version does not
 * have data for the property at all, or not for this code point.0property
 */
function IntlChar.getIntPropertyValue($codepoint, $property) {}