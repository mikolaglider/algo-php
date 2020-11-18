<?php

namespace Algo\Sort\Selection;

function smallest($arr)
{
    $min = $arr[0];
    $index = 0;
    foreach ($arr as $key => $value) {
        if ($value < $min) {
            $min = $value;
            $index = $key;
        }
    }
    return $index;
}

function sort($arr)
{
    $new = [];
    foreach ($arr as $value) {
        $index = smallest($arr);
        $new[] = $arr[$index];
        unset($arr[$index]);
        $arr = array_values($arr);
    }
    return $new;
}
