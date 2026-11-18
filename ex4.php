#!/usr/bin/env php
<?php
define('TVA_RATE_NORMAL', '0.2');
define('TVA_RATE_INTERMEDIATE', '0.1');
define('TVA_RATE_REDEUCED', '0.055');
$bookPriceET = 18;
$sandwichPriceET = 4.45;
$toyPriceET = 30;
$bookPriceTVA = $bookPriceET * (1 - (5.5 / 100));
$sandwichPriceTVA = $sandwichPriceET * (1 - (10 / 100));
$toyPriceTVA = $toyPriceET * (1 - (20 / 100));
?>