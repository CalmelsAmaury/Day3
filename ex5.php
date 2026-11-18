#!/usr/bin/env php
<?php
$note = 9;
if ($note >= 14)
    echo "Good", PHP_EOL;
elseif ($note >= 10 && $note <= 13) {
    echo "Average", PHP_EOL;
}
else {
    echo "Failure", PHP_EOL;
}