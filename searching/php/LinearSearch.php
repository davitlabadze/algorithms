<?php
//  Problem: Given an array arr[] of n elements,
//  write a function to search a given element x in arr[].

// simple approach a linear search
function search($arr, $x)
{
    $n = sizeof($arr);
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] == $x) return $i;
    }
    return -1;
}

//  Driver code
$arr = array(2, 3, 4, 10, 40);
$x = 40;

// Function call
$result = search($arr, $x);
if ($result == -1)
    echo "Element is not present in array";
else
    echo "Element is present at index ", $result;

// The time complexity of the above algorithm is O(n). 
// O(N) describes an algorithm whose performance will grow linearly and 
// in direct proportion to the size of the input data set.