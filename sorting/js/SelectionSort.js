function selectionSort(arr){
    // Traverse through all array elements
    let n = arr.length;
    for (let i = 0; i < n; i++) {
        var minIndex = i;
        for (let j = i + 1; j < n; j++) {
            if (arr[j] < arr[minIndex]) {
                minIndex = j;
            }
        }  
         // Swap the found minimum element with
        // the first element
        if (arr[i] > arr[minIndex]) {
            let swap = arr[i];
            arr[i] = arr[minIndex];
            arr[minIndex] = swap;
        }    
    }
}

// Driver code
let arr = [64, 25, 12, 22, 11];

console.log(`Before: ${arr}`);
selectionSort(arr);
console.log(`After: ${arr}`);


// Time Complexity: The time complexity of Selection Sort is O(N2) as there are two nested loops:

// One loop to select an element of Array one by one = O(N)
// Another loop to compare that element with every other Array element = O(N)
// Therefore overall complexity = O(N)*O(N) = O(N*N) = O(N2)

// Auxiliary Space: O(1) as the only extra memory used is for temporary variable while swapping two values in Array. The good thing about selection sort is it never makes more than O(n) swaps and can be useful when memory write is a costly operation. 