#!/usr/bin/env php
<?php
define('TVA_RATE_NORMAL', '0.2');
define('TVA_RATE_INTERMEDIATE', '0.1');
define('TVA_RATE_REDUCED', '0.055');
$bookPriceET = 18;
$sandwichPriceET = 4.45;
$toyPriceET = 30;
$bookPriceTVA = $bookPriceET * (1 + TVA_RATE_REDUCED);
$sandwichPriceTVA = $sandwichPriceET * (1 + TVA_RATE_INTERMEDIATE);
$toyPriceTVA = $toyPriceET * (1 + TVA_RATE_NORMAL);