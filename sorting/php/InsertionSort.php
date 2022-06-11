<?php

function insertionSort(&$arr)
{

    $arrLength = sizeof($arr);

    for ($i = 1; $i < $arrLength; $i++) {

        $key = $arr[$i];

        // Move elements of arr[0..i-1], that are
        // greater than key, to one position ahead
        // of their current position
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j -= 1;
        }
        $arr[$j + 1] = $key;
    }
}


// Driver code

$arr = [5, 3, 4, 2, 1];
echo "Before: ";
print_r($arr);
insertionSort($arr);
echo "After: ";
print_r($arr);


// Time Complexity: O(N^2) 
// Auxiliary Space: O(1)