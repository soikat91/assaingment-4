<?php
//Write a PHP function to sort an array of strings by their length, in ascending order.
$strings=["b","a" ,"g","f","e"];
function sortStringsByLength(array $strings) {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}
print_r( sortStringsByLength($strings));