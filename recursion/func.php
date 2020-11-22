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