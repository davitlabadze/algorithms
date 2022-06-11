<?php

//  Selection Sort
function selectionSort(&$arr)
{
    $n = count($arr);
    // Traverse through all array elements

    for ($i = 0; $i < $n; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        // Swap the found minimum element with
        // the first element
        if ($arr[$i] > $arr[$minIndex]) {
            $swap = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $swap;
        }
    }
}

// Driver code
$arr = array(64, 25, 12, 22, 11);

echo "Before: ", print_r($arr);
selectionSort($arr);
echo "Aftert: ", print_r($arr);



// Time Complexity: The time complexity of Selection Sort is O(N2) as there are two nested loops:

// One loop to select an element of Array one by one = O(N)
// Another loop to compare that element with every other Array element = O(N)
// Therefore overall complexity = O(N)*O(N) = O(N*N) = O(N2)
// Auxiliary Space: O(1) as the only extra memory used is for temporary variable while swapping two values in Array. The good thing about selection sort is it never makes more than O(n) swaps and can be useful when memory write is a costly operation. 
