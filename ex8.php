#!/usr/bin/env php
<?php

echo match($montNumber){
    0 => "Current month is january.",
    1 => "Current month is february.",
    2 => "Current month is march.",
    3 => "Current month is april.",
    4 => "Current month is may.",
    5 => "Current month is june.",
    6 => "Current month is july.",
    7 => "Current month is august.",
    8 => "Current month is september.",
    9 => "Current month is october.",
    10 => "Current month is november.",
    11 => "Current month is december.",
}