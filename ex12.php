#!/usr/bin/env php
<?php
$x = 10;
$y = "10";
if (gettype($x) == gettype($y) && $x == $y){
    echo "Strict equality\n";
}
elseif(gettype($x) == gettype($y)){
    echo "Simple equality";
}
else{
    echo "Different";
}