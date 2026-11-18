#!/usr/bin/env php
<?php
$value = 43;
if (($value > 10 && $value < 20 && $value % 2 == 1) || ($value == 42)) {
    echo "Correct value";
}
else {
    echo "Incorrect value";
}