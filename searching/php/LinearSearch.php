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


// Improve Linear Search Worst-Case Complexity
function worstWaseSearch($worsWaseArr, $searchElement)
{
    $left = 0;
    $length = sizeof($worsWaseArr);
    $right = $length - 1;
    $position = -1;

    // Run loop from 0 to right
    for ($left; $left <= $right;) {

        // If search_element is found with
        // left variable
        if ($worsWaseArr[$left] == $searchElement) {
            $position = $left;
            echo "Element found in Array at " . ($position + 1) . " Position with "($left + 1) . " Attempt";
            break;
        }

        // If search_element is found with
        // right variable
        if ($worsWaseArr[$right] == $searchElement) {
            $position = $right;
            echo "Element found in Array at ", $position + 1, " Position with ", $length - $right, " Attempt";
            break;
        }
        $left++;
        $right++;
    }
}

// Driver code
$worsWaseArr = [1, 2, 3, 4, 5];
$searchElement = 5;

// Function call
worstWaseSearch($worsWaseArr, $searchElement);

# Time Complexity : O(n)

# Auxiliary Space: O(1)
# O(1) describes an algorithm that will always execute in the same time
# (or space) regardless of the size of the input data set.
