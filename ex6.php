#!/usr/bin/env php
<?php


$animal = "cat";
$age = 4;

if ($animal == "dog") {
    if ($age < 3){    
        echo "Baby Puppy";
    }
    elseif ($age <= 8) {
        echo "Adult Dog";
    }
    else {
        echo "Senior Dog";
    }
}
elseif ($animal == "cat") {
    if ($age < 3){    
        echo "Baby Kitten";
    }
    elseif ($age <= 8) {
        echo "Adult Cat";
    }
    else {
        echo "Senior Cat";
    }
}