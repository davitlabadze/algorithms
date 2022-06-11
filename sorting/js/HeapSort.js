

// The main function to sort an array of given size
function heapSort(arr) {
    var n = arr.length;
 
    // Build heap (rearrange array)
    for (var i = Math.floor(n / 2) - 1; i >= 0; i--)
        heapify(arr, n, i);

    // One by one extract an element from heap
    for (var i = n - 1; i > 0; i--) {
        // Move current root to end
        var temp = arr[0];
        arr[0] = arr[i];
        arr[i] = temp;

        // call max heapify on the reduced heap
        heapify(arr,i,0);
    }
}

function heapify(arr,n,i) {
    var largest = i;
    var left = 2 * i + 1;
    var right = 2 * i + 2;


    // See if left child of root exists and is
    // greater than root
    if (left < n && arr[largest] < arr[left])
        largest = left;
    
    // See if right child of root exists and is
    // greater than root
    if (right < n && arr[largest] < arr[right]) 
        largest = right;

    // Change root, if needed
    // swap
    if (largest != i) {
        var swap = arr[i];
        arr[i] = arr[largest];
        arr[largest] = swap;

        // heapify the root.
        heapify(arr, n, largest);
    }
}

// Driver code 

var arr = [ 5, 12, 11, 13, 4, 6, 7 ];

console.log(`Before array is: ${arr}`);
heapSort(arr);
console.log(`After array is: ${arr}`);
