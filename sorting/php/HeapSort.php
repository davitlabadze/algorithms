<?php

// Php program for implementation of Heap Sort

// To heapify a subtree rooted with node i which is
// an index in arr[]. n is size of heap
function heapify(&$arr, $n, $i)
{
    $largest = $i; // Initialize largest as root
    $l = 2 * $i + 1; // left = 2*i + 1
    $r = 2 * $i + 2; // right = 2*i + 2

    // If left child is larger than root
    if ($l < $n && $arr[$l] > $arr[$largest])
        $largest = $l;

    // If right child is larger than largest so far
    if ($r < $n && $arr[$r] > $arr[$largest])
        $largest = $r;

    // If largest is not root
    if ($largest != $i) {
        $swap = $arr[$i];
        $arr[$i] = $arr[$largest];
        $arr[$largest] = $swap;

        // Recursively heapify the affected sub-tree
        heapify($arr, $n, $largest);
    }
}

// main function to do heap sort
function heapSort(&$arr)
{
    $n = sizeof($arr) / sizeof(array($arr[0]));

    // Build heap (rearrange array)
    for ($i = $n / 2 - 1; $i >= 0; $i--)
        heapify($arr, $n, $i);

    // One by one extract an element from heap
    for ($i = $n - 1; $i > 0; $i--) {
        // Move current root to end
        $temp = $arr[0];
        $arr[0] = $arr[$i];
        $arr[$i] = $temp;

        // call max heapify on the reduced heap
        heapify($arr, $i, 0);
    }
}

// Driver code

$arr = array(12, 11, 13, 5, 6, 7);

echo 'Before array is: ', print_r($arr);
heapSort($arr);
echo "\n";
echo 'After array is: ', print_r($arr);
