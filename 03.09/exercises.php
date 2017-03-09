<?php

/*$formatter = new IntlDateFormatter(
    "cs_CZ",
    IntlDateFormatter::FULL, // for the date
    IntlDateFormatter::MEDIUM //for the hour
);

echo $formatter->format(time("tomorrow"));
*/

$formatter = new NumberFormatter(
    "cs_CZ",
    NumberFormatter::CURRENCY
);

echo $formatter->format(1234567.8953);