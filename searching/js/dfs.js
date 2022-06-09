// Depth-first search is often compared with breadth-first search.

// Advantages:
// Depth-first search on a binary tree generally requires less memory than breadth-first.
// Depth-first search can be easily implemented with recursion.
// Disadvantages

// A DFS doesn't necessarily find the shortest path to a node, while breadth-first search does.

// Class containing left and right child of current
// node and key value

class Node {
    constructor(val) {
        this.key = val;
        this.left = null;
        this.right = null;
    }
}
 
// Root of Binary Tree
var root = null;

  

/* Given a binary tree, print its nodes in inorder */
function printInorder(node) {
    if (node == null)
        return;

    //First recur on left child
    printInorder(node.left);

    // Then print the data of node
    console.log(node.key + " ");

    //Now recur on right child
    printInorder(node.right);
}



// A function to do postorder tree traversal
function printPostorder(node) {
    if (node == null)
        return;

     // First recur on left child
    printPostorder(node.left);

    // The recur on right child
    printPostorder(node.right);

    // now deal with the node
    console.log(node.key + " ");
}



/* Given a binary tree, print its nodes in preorder */
function printPreorder(node) {
    if (node == null)
        return;

    // First print the data of node
    console.log(node.key + " ");

    // Then recur on left child
    printPreorder(node.left);

    // now recur on right child
    printPreorder(node.right);
    
}
 
 
 
// Driver code
root            = new Node(1);
root.left       = new Node(2);
root.right      = new Node(3);
root.left.left  = new Node(4);
root.left.right = new Node(5);

console.log("Preorder traversal of binary tree is:");
printPreorder(root);

console.log("Inorder traversal of binary tree is:");
printInorder(root);

console.log("Postorder traversal of binary tree is:");
printPostorder(root);
 


