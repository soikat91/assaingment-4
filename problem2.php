<?php
//Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concatenateFromEnd(string $str1, string $str2){
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $result = $str1;
    for ($i = $len2 - 1; $i >= 0; $i--) {
        $result .= $str2[$i];
    }
    return $result;
}

echo concatenateFromEnd("Mehfuz"," Ahmed");

