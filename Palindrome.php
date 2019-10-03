<?php
/**
 * a word, phrase, or sequence that reads the same backwards as forwards
 */
function isPalindrome($str)
{
    for ($i = 0, $j = strlen($str) - 1; $i < floor(strlen($str) / 2); $i++, $j--) {
        if(strtoupper($str[$i]) != strtoupper($str[$j])){
            return false;
        }
    }
    return true;
}


echo isPalindrome("Madam");