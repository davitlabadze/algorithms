# Problem: Given a sorted array arr[] of n elements,
# write a function to search a given element x
# in arr[] and return the index of x in array.

# Recursive implementation of Binary Search:
def binarySearch(arr, left, right, x):

    # Check base case
    if right >= left:

        mid = left + (right - left) // 2

        # If element is present at the middle itself
        if arr[mid] == x:
            return mid

        # If element is smaller than mid, then it
        # can only be present in left subarray
        elif arr[mid] > x:
            return binarySearch(arr, left, mid-1, x)

        # Else the element can only be present
        # in right subarray
        else:
            return binarySearch(arr, mid + 1, right, x)

    else:
        # Element is not present in the array
        return -1


# Driver Code
arr = [2, 3, 4, 10, 40, 50, 120, 512]
x = 10

# Function call
result = binarySearch(arr, 0, len(arr)-1, x)

if result != -1:
    print("Element is present at index % d" % result)
else:
    print("Element is not present in array")


# Iterative implementation of Binary Search:
def iterativeBinarySearch(arr, left, right, searchElementX):

    while left <= right:

        mid = left + (right - left) // 2

        # Check if searchElementX is present at mid
        if arr[mid] == searchElementX:
            return mid

        # If searchElementX is greater, ignore left half
        elif arr[mid] < searchElementX:
            left = mid + 1

        # If searchElementX is smaller, ignore right half
        else:
            right = mid - 1

    # If we reach here, then the element
    # was not present
    return -1


# Driver Code
arr2 = [2, 3, 4, 10, 40]
searchElementX = 10

# Function call
result = iterativeBinarySearch(arr2, 0, len(arr2)-1, searchElementX)

if result != -1:
    print("iterative Binary Search: Element is present at index % d" % result)
else:
    print("iterative Binary Search: Element is not present in array")
