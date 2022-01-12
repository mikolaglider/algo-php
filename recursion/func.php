<?php

namespace Algo\Recursion;

function sum(array $array)
{
	if (count($array) < 1) {
		return 0;
	}
	return array_shift($array) + sum($array);
}

function recount(array $array)
{
	return is_null(array_shift($array))
		? 0
		: 1 + recount($array);
}

function remax(array $array)
{
	if (count($array) == 1) {
		return array_shift($array);
	}
	return max(array_shift($array), remax($array));
}

function research(array $array, $needle)
{
	if (count($array) < 1) {
		return null;
	}

	$first = array_key_first($array);
	$last= array_key_last($array);

	$mid = (int) (($first + $last) / 2);

	if ($array[$mid] == $needle) {
		return $mid;
	} elseif ($array[$mid] < $needle) {
		return research(array_slice($array, $mid - $first + 1, null, true), $needle);
	} else {
		return research(array_slice($array, 0, $mid - $first, true), $needle);
	}
}