<?php

function reverse($str)
{
    for ($i = 0, $j = strlen($str) - 1; $i < floor(strlen($str) / 2); $i++, $j--) {
        list($str[$i], $str[$j]) = [$str[$j], $str[$i]];
    }
    return $str;
}

echo reverse("Hola, Mundo!");
