//  Problem: Given a sorted array arr[] of n elements,
//  write a function to search a given element x
//  in arr[] and return the index of x in array.

// Recursive implementation of Binary Search:
function binarySearch(arr,left,right,x){
    if(right>=left){

        let mid = left + Math.floor((right - left) / 2);

        // If element is present at the middle itself
        if(arr[mid] == x ){
            return mid;
        }

        //  If element is smaller than mid, then it
        //  can only be present in left subarray
        if(arr[mid] > x ){
            return binarySearch(arr,left,mid-1,x);
        }

        return binarySearch(arr,mid+1,right,x);
        
    }
}

// Driver Code
let arr = [2, 3, 4, 10, 40, 50, 120, 512];
let x = 120;

let length = arr.length;
let left = 0;
let right = length -1;


//Fucntion call
result = binarySearch(arr,left,right,x);

result == -1
? console.log("Element is not present in array")
: console.log(`Element is present at index ${result}`);




//  Iterative implementation of Binary Search
function iterativeBinarySearch(arr,searchElementX){
    let left = 0;
    let right = arr.length - 1;
    let secondMid;
    while( left <= right){
        secondMid = left + Math.floor((right - left) / 2);

        // If the element is present at the middle
        // itself
        if(arr[secondMid] == searchElementX) return secondMid;

        // If element is smaller than mid, then
        // it can only be present in left subarray
        (arr[secondMid] > searchElementX)
        ? right = secondMid - 1
        // Else the element can only be present
        // in right subarray
        : left = secondMid + 1

    }
    // We reach here when element is not
    // present in array
    return -1;
}

// Driver code 
let secondArr = new Array(2, 3, 4, 10, 40, 50, 120, 512);
let searchElementX = 120;

//  Function call
let secondResult = iterativeBinarySearch(secondArr, searchElementX);

secondResult != -1
? console.log(`iterative Binary Search: Element is present at index ${secondResult}`)
: console.log("iterative Binary Search: Element is not present in array")
