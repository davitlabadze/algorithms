#  Problem: Given an array arr[] of n elements,
#  write a function to search a given element x in arr[].

# simple approach a linear search
def search(arr, n, x):
    for i in range(0, n):
        if(arr[i] == x):
            return i
    return -1


# Driver code
arr = [2, 3, 4, 10, 40]
x = 4
n = len(arr)

# Function call
result = search(arr, n, x)
if(result == -1):
    print("Element is not present in array")
else:
    print("Element is present at index", result)

#  The time complexity of the above algorithm is O(n).
#  O(N) describes an algorithm whose performance will grow linearly and
#  in direct proportion to the size of the input data set.
