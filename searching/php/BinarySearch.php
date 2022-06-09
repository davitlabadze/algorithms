<?php

//  Problem: Given a sorted array arr[] of n elements,
//  write a function to search a given element x
//  in arr[] and return the index of x in array.

// recursive implementation of Binary Search
function binarySearch($arr, $left, $right, $x)
{
    if ($right >= $left) {
        $mid = ceil($left + ($right - $left) / 2);

        // If element is present at the middle itself
        if ($arr[$mid] == $x) {
            return floor($mid);
        }

        //  If element is smaller than mid, then it
        //  can only be present in left subarray
        elseif ($arr[$mid] > $x) {
            return binarySearch($arr, $left, $mid - 1, $x);
        }

        // Else the element can only be present
        // in right subarray
        else {
            return binarySearch($arr, $mid + 1, $right, $x);
        }
    } else {
        // Element is not present in the array
        return -1;
    }
}

// Driver Code
$arr = [2, 3, 4, 10, 40, 50, 120, 512];
$x = 50;

$countArray = count($arr);
$left = 0;
$right = $countArray - 1;
// Function call

$result = binarySearch($arr, $left, $right, $x);

if ($result != -1) {
    echo "Element is present at index " . $result;
} else {
    echo "Element is not present in array";
}

# Iterative implementation of Binary Search:
function iterativeBinarySearch($arr, $left, $right, $x)
{
    while ($left <= $right) {
        $m = $left + ($right - $left) / 2;

        // Check if x is present at mid
        if ($arr[$m] == $x)
            return floor($m);

        // If x greater, ignore
        // left half
        if ($arr[$m] < $x)
            $left = $m + 1;

        // If x is smaller,
        // ignore right half
        else
            $right = $m - 1;
    }

    // if we reach here, then
    // element was not present
    return -1;
}

// Driver Code
$arr2 = array(2, 3, 4, 10, 40);
$searchElementX = 10;
$n = count($arr);
$secondRight = $n - 1;
$result = iterativeBinarySearch($arr2, $left, $secondRight, $searchElementX);
if (($result == -1))
    echo "iterative Binary Search: Element is not present in array";
else
    echo "iterative Binary Search: Element is present at index ", $result;
