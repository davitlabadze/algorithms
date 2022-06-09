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


// Improve Linear Search Worst-Case Complexity
function worstWaseSearch(worsWaseArr,searchElement){
   
    let left = 0;
    let length = worsWaseArr.length;
    let right = length -1;
    let position = -1;
    
    for(left; left<= right;){

        // If search_element is found with
        // left variable
        if(worsWaseArr[left] == searchElement){
            position = left;
            console.log("Element found in Array at " + 
                (position + 1) + " Position with " +
                (left + 1) + " Attempt");
            break;
        }

        //  If search_element is found with
        //  right variable
        if(worsWaseArr[right] == searchElement){
            position = right;
            console.log("Element found in Array at " + 
                (position + 1) + " Position with " +
                (length - right) + " Attempt");
            break;
        }
        left++;
        right--;
    }
    // If element not found
    if (position == -1) 
        console.log("Not found in Array with " + left + " Attempt")

}


// Driver code
let worsWaseArr = [1,2,3,4,5];
let searchElement = 5;

// Function call
worstWaseSearch(worsWaseArr,searchElement);


// Time Complexity : O(n)

// Auxiliary Space: O(1)
// O(1) describes an algorithm that will always execute in the same time
// (or space) regardless of the size of the input data set.