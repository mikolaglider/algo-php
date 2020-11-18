<?php

require __DIR__ . '/vendor/autoload.php';

use Algo\Search\Binary;
use Algo\Sort\Selection;

$array = [5, 2, 8, 1, 6, 9, 3, 7, 4];
print_r($array);

$sorted = Selection\sort($array);
print_r($sorted);
var_dump(Binary\search($sorted, 0));
echo PHP_EOL;
var_dump(Binary\search($sorted, 7));
echo PHP_EOL;
