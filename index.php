<?php

require __DIR__ . '/vendor/autoload.php';

use Algo\Search\Binary;

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

var_dump(Binary\search($array, 0));
echo PHP_EOL;
var_dump(Binary\search($array, 7));
echo PHP_EOL;
