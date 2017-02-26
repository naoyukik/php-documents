/**
 * (PHP 5 >= 5.6.5, PHP 7)<br/>
 * @link http://php.net/manual/en/dateperiod.getenddate.php
 * @return DateTimeInterface Returns NULL if the DatePeriod does
 * not have an end date. For example, when initialized with the
 * recurrences parameter, or the
 * isostr parameter without an
 * end date.NULLDatePeriodrecurrencesisostrReturns a DateTimeImmutable object
 * when the DatePeriod is initialized with a
 * DateTimeImmutable object
 * as the end parameter.DateTimeImmutableobjectDatePeriodDateTimeImmutableobjectendReturns a DateTime object
 * otherwise.DateTimeobject
 */
function DatePeriod.getEndDate() {}