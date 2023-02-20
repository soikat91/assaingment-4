<?php
//Write a PHP function to check if a string contains only letters and whitespace.

$fruits=["Mango","Banana","Orange","apple"];
function removeFirstLastElement($fruits) {
    array_shift($fruits);
    array_pop($fruits);
    return $fruits;
}

$newFruits=removeFirstLastElement($fruits);
print_r($newFruits);