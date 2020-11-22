<?php

require __DIR__ . '/vendor/autoload.php';

use Algo\Search\Binary;
use Algo\Sort\Selection;
use Algo\Recursion;

$array = [5, 2, 8, 1, 6, 9, 3, 7, 4];
print_r($array);

print_r(Recursion\sum($array));
print PHP_EOL;

print_r(Recursion\recount($array));
print PHP_EOL;

$sorted = Selection\sort($array);
print_r($sorted);

print_r(Recursion\sum($sorted));
echo PHP_EOL;
var_dump(Binary\search($sorted, 0));
echo PHP_EOL;
var_dump(Binary\search($sorted, 7));
echo PHP_EOL;
