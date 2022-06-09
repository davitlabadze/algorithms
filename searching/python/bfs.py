# Algorithm:
# There are basically two functions in this method.
# One is to print all nodes at a given level (printCurrentLevel),
# and the other is to print the level order traversal of the tree (printLevelorder).
# printLevelorder makes use of printCurrentLevel to print nodes at all
# levels one by one starting from the root.

class Node:

    # A utility function to create a new node
    def __init__(self, key):
        self.data = key
        self.left = None
        self.right = None


# Function to  print level order traversal of tree
def printLevelOrder(root):
    h = height(root)
    for i in range(1, h+1):
        printCurrentLevel(root, i)


# Print nodes at a current level
def printCurrentLevel(root, level):
    if root is None:
        return
    if level == 1:
        print(root.data, end=" ")
    elif level > 1:
        printCurrentLevel(root.left, level-1)
        printCurrentLevel(root.right, level-1)


""" Compute the height of a tree--the number of nodes
    along the longest path from the root node down to
    the farthest leaf node
"""


def height(node):
    if node is None:
        return 0
    else:
        # Compute the height of each subtree
        lheight = height(node.left)
        rheight = height(node.right)

        # Use the larger one
        if lheight > rheight:
            return lheight+1
        else:
            return rheight+1


# Driver Code
root = Node(1)
root.left = Node(2)
root.right = Node(3)
root.left.left = Node(4)
root.left.right = Node(5)

print("Level order traversal of binary tree is: ")
printLevelOrder(root)

# Time Complexity: O(n^2) in worst case. For a skewed tree, printGivenLevel() takes O(n) time where n is the number of nodes in the skewed tree.
#  So time complexity of printLevelOrder() is O(n) + O(n-1) + O(n-2) + .. + O(1) which is O(n^2).
# Auxiliary Space:  O(n) in the worst case. For a skewed tree, printGivenLevel() uses O(n) space for call stack. For a Balanced tree,
#  the call stack uses O(log n) space, (i.e., the height of the balanced tree).


# Algorithm:
# For each node, first, the node is visited and then it’s child nodes are put in a FIFO queue.

# printLevelorder(tree)
# 1) Create an empty queue q
# 2) temp_node = root /*start from root*/
# 3) Loop while temp_node is not NULL
#     a) print temp_node->data.
#     b) Enqueue temp_node’s children
#       (first left then right children) to q
#     c) Dequeue a node from q.
# order traversal using Queue
# A node structure
class SecondNode:
    # A utility function to create a new node
    def __init__(self, key):
        self.data = key
        self.left = None
        self.right = None

# Iterative Method to print the
# height of a binary tree


def printLevelOrder(secondRoot):
    # Base Case
    if secondRoot is None:
        return

    # Create an empty queue
    # for level order traversal
    queue = []

    # Enqueue secondRoot and initialize height
    queue.append(secondRoot)

    while(len(queue) > 0):

        # Print front of queue and
        # remove it from queue
        print(queue[0].data)
        node = queue.pop(0)

        # Enqueue left child
        if node.left is not None:
            queue.append(node.left)

        # Enqueue right child
        if node.right is not None:
            queue.append(node.right)


# Driver code
secondRoot = SecondNode(1)
secondRoot.left = SecondNode(2)
secondRoot.right = SecondNode(3)
secondRoot.left.left = SecondNode(4)
secondRoot.left.right = SecondNode(5)

print("Level Order Traversal of binary tree is:")
printLevelOrder(secondRoot)

# Time Complexity: O(n) where n is the number of nodes in the binary tree
# Auxiliary Space: O(n) where n is the number of nodes in the binary tree
