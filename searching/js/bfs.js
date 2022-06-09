// Recursive javascript program for level
// order traversal of Binary Tree
 
// Class containing left and right child of current
// node and key value
class Node {
    constructor(val){
        this.data = val;
        this.left = null;
        this.right = null;
    }
}
 // Root of the Binary Tree
var root = null;

function printLevelOrder() {
    var h = height(root);
    for (var i = 1; i <= h; i++)
        printCurrentLevel(root, i);
}

//  Compute the "height" of a tree -- the number of nodes along the longest path
//   from the root node down to the farthest leaf node.
     
function height(root) {
    if (root == null)
        return 0;
    else {
        // compute height of each subtree
        var leftHeight = height(root.left);
        var rightHeight = height(root.right);

        // use the larger one 
        if (leftHeight > rightHeight)
            return (leftHeight + 1);
        else
            return (rightHeight + 1);
    }
}

// Print nodes at the current level 
function printCurrentLevel(root , level) {
    if (root == null)
        return;
    if (level == 1)
        console.log(root.data + " ");
    else if (level > 1) {
        printCurrentLevel(root.left, level - 1);
        printCurrentLevel(root.right, level - 1);
    }
}

// Driver code
root            = new Node(1);
root.left       = new Node(2);
root.right      = new Node(3);
root.left.left  = new Node(4);
root.left.right = new Node(5);

console.log("Level order traversal of  binary tree is: ");
printLevelOrder();

// Time Complexity: O(n^2) in worst case. For a skewed tree, printGivenLevel() takes O(n) time where n is the number of nodes in the skewed tree. 
//  So time complexity of printLevelOrder() is O(n) + O(n-1) + O(n-2) + .. + O(1) which is O(n^2). 
// Auxiliary Space:  O(n) in the worst case. For a skewed tree, printGivenLevel() uses O(n) space for call stack. For a Balanced tree,
//  the call stack uses O(log n) space, (i.e., the height of the balanced tree). 
