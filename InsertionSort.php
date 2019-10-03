<?php
/**
 * Insertion sort is a simple sorting algorithm that works the way we sort playing cards in our hands.
 */
function insertionSort($arr)
{
    $size = count($arr);
    for ($i = 0; $i < $size; $i++) {
        $val = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $val) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $val;
    }
    return $arr;
}

print_r(insertionSort([10, 2, 3, 4, 5, 6, 7, 8, 9, 1]));
