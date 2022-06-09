// Problem: Given an array arr[] of n elements, 
// write a function to search a given element x in arr[].

// simple approach a linear search
function search(arr, n, x)
{
    let i;
    for (i = 0; i < n; i++)
        if (arr[i] == x)
            return i;
    return -1;
}

// Driver code
let arr = [ 2, 3, 4, 10, 40 ];
let n = arr.length;
let x = 10;

// Function call
let result = search(arr, n, x);
    (result == -1)
        ? console.log("Element is not present in array")
        : console.log("Element is present at index " + result);

// The time complexity of the above algorithm is O(n). 
// O(N) describes an algorithm whose performance will grow linearly and
// in direct proportion to the size of the input data set.