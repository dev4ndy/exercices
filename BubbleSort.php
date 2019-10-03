<?php

/**
 * Bubble Sort is the simplest sorting algorithm that works by repeatedly 
 * swapping the adjacent elements if they are in wrong order.
 * @param $arr list of numbers 
 */
function bubbleSort($arr)
{
    $size = count($arr);
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}

print_r(bubbleSort([10, 2, 3, 4, 5, 6, 7, 8, 9, 1]));
