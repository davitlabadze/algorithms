//  Problem: Given a sorted array arr[] of n elements,
//  write a function to search a given element x
//  in arr[] and return the index of x in array.

// Binary Search
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
