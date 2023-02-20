<?php
//problem :Write a PHP function to check if a string contains only letters and whitespace.

function containsOnlyLettersAndWhitespace( $str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str)===1;
}

$stringOne = "Hi soikat how are you";
$strringTwo = "Age is 25";
if (containsOnlyLettersAndWhitespace($stringOne)) {
    echo "$stringOne contains only letters and whitespace\n";
}
if (!containsOnlyLettersAndWhitespace($strringTwo)) {
    echo "$strringTwo contains non-letter or non-whitespace characters\n";
}

