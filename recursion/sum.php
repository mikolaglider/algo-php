<?php

namespace Algo\Recursion;

function sum(array $array)
{
	if (count($array) < 1) {
		return 0;
	}
	return array_shift($array) + sum($array);
}