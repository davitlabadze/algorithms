
# Python program for implementation of Selection
# Selection Sort
import sys
arr = [64, 25, 12, 22, 11]

# Traverse through all array elements
for i in range(len(arr)):

    # Find the minimum element in remaining
    # unsorted array
    min_idx = i
    for j in range(i+1, len(arr)):
        if arr[min_idx] > arr[j]:
            min_idx = j

    # Swap the found minimum element with
    # the first element
    arr[i], arr[min_idx] = arr[min_idx], arr[i]

# Driver code to test above
print("Sorted array")
for i in range(len(arr)):
    print("%d" % arr[i], end=" ")


# Time Complexity: The time complexity of Selection Sort is O(N2) as there are two nested loops:

# One loop to select an element of Array one by one = O(N)
# Another loop to compare that element with every other Array element = O(N)
# Therefore overall complexity = O(N)*O(N) = O(N*N) = O(N2)

# Auxiliary Space: O(1) as the only extra memory used is for temporary variable while swapping two values in Array. The good thing about selection sort is it never makes more than O(n) swaps and can be useful when memory write is a costly operation.
