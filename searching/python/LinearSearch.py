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


# Improve Linear Search Worst-Case Complexity
def worst_wase_search(worst_wase_arr, search_Element):
    left = 0
    length = len(worst_wase_arr)
    position = -1
    right = length - 1

    # Run loop from 0 to right
    for left in range(0, right, 1):

        # If search_element is found with
        # left variable
        if (worst_wase_arr[left] == search_Element):
            position = left
            print("Element found in Array at ", position +
                  1, " Position with ", left + 1, " Attempt")
            break

        # If search_element is found with
        # right variable
        if (worst_wase_arr[right] == search_Element):
            position = right
            print("Element found in Array at", position + 1,
                  "Position with", length - right, "Attempt")
            break
        left += 1
        right -= 1

    # If element not found
    if (position == -1):
        print("Not found in Array with", left, "Attempt")


# Driver code
worst_wase_arr = [1, 2, 3, 4, 5]
search_element = 5

# Function call
worst_wase_search(worst_wase_arr, search_element)


# Time Complexity : O(n)

# Auxiliary Space: O(1)
# O(1) describes an algorithm that will always execute in the same time
# (or space) regardless of the size of the input data set.
