<?php
/**
 * This function creates a rhombus of numbers.
 * @param int $n: It is the size to the midpoint of the rhombus
 */
function numberRhombus($n)
{
    //upper half
    for ($i = 1; $i <= $n; $i++) { // Create each row, from least to greatest
        for ($j = 0; $j < $n - $i; $j++) { // Places the spaces, always is $n - $i spaces
            echo " ";
        }
        for ($j = 1; $j <= $i; $j++) { // Places the numbers until to the current $i ($i is the row)
            //echo $j; // works well until $n = 9, if $n > 9 the shape of the rhombus deforms
            echo substr($j, 0, 1); // leave a single digit
        }
        for ($j = $i - 1; $j >= 1; $j--) { // Places missing numbers
            //echo $j; // works well until $n = 9, if $n > 9 the shape of the rhombus deforms
            echo substr($j, 0, 1); // leave a single digit
        }
        echo "\n";
    }
    //lower half
    for ($i = $n; $i > 1; $i--) { // Create each row, from highest to lowest
        for ($j = $n - $i; $j >= 0; $j--) { // Places the spaces, invert first for
            echo " ";
        }
        for ($j = 1; $j < $i; $j++) { // Places the numbers, only $j < $i, avoid repeat the midpoint
            //echo $j; // works well until $n = 9, if $n > 9 the shape of the rhombus deforms
            echo substr($j, 0, 1); // leave a single digit
        }
        for ($j = $i - 2; $j >= 1; $j--) { // Places missing numbers
            //echo $j; // works well until $n = 9, if $n > 9 the shape of the rhombus deforms
            echo substr($j, 0, 1); // leave a single digit
        }
        echo "\n";
    }
}

$n = 5;
if (count($argv) > 1) {
    $n = intval($argv[1]);
} else {
    echo "\e[0;33mYou have not passed the midpoint of the rhombus, by default one of 5 will be created.\e[0m\n";
}
echo numberRhombus($n);
