<?php
//problem:Write a PHP function to find the second largest number in an array of numbers.
$numbers = [53,4,23,73,15, 32, 28];
function findSecondLargestNumber($numbers){
    if (count($numbers) < 2) {
        return null;
    }
    $largest = $numbers[0];
    $secondLargest = " ";
    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $numbers[$i];
        } else if ($numbers[$i] != $largest && ($secondLargest === null || $numbers[$i] > $secondLargest)) {
            $secondLargest = $numbers[$i];
        }
    }
    return $secondLargest;
}
echo findSecondLargestNumber($numbers);