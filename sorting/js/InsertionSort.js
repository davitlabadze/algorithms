
function insertionSort(arr) {
    for (let i = 1; i < arr.length; i++) {
        let key = arr[i];

        /* Move elements of arr[0..i-1], that are 
        greater than key, to one position ahead 
        of their current position */
        let j = i - 1;
        while (j >= 0 && arr[j] > key) {
            arr[j+1] = arr[j];
            j -= 1;
        }
        arr[j + 1] = key;
    }
}


//Driver code

let arr = [12,21,23,14,16];
console.log(`Before: ${arr}`);
insertionSort(arr);
console.log(`After: ${arr}`);


// Time Complexity: O(N^2) 
// Auxiliary Space: O(1)