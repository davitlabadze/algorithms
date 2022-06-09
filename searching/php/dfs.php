<?php

// Depth-first search is often compared with breadth-first search.

// Advantages:
// Depth-first search on a binary tree generally requires less memory than breadth-first.
// Depth-first search can be easily implemented with recursion.
// Disadvantages

// A DFS doesn't necessarily find the shortest path to a node, while breadth-first search does.

// Class containing left and right child of current
// node and key value

class Node
{
    public function __construct($key)
    {
        $this->left = NULL;
        $this->right = NULL;
        $this->val = $key;
    }
}

// A function to do inorder tree traversal
function printInorder($root)
{
    if ($root) {

        // First recur on left child
        printInorder($root->left);

        // Then print the data of node
        echo $root->val;

        // Now recur on right subtree
        printInorder($root->right);
    }
}

// A function to do postorder tree traversal
function printPostorder($root)
{
    if ($root) {

        // First recur on left child
        printPostorder($root->left);

        // The recur on right child
        printPostorder($root->right);

        // Now print the data of node
        echo $root->val;
    }
}

// A function to do preorder tree traversal
function printPreorder($root)
{
    if ($root) {

        // First print the data of node
        echo $root->val;

        // Then recur on left child
        printPreorder($root->left);

        // Finally recur on right child
        printPreorder($root->right);
    }
}

// Driver code
$root              = new Node(1);
$root->left        = new Node(2);
$root->right       = new Node(3);
$root->left->left  = new Node(4);
$root->left->right = new Node(5);

echo ("Preorder traversal of binary tree is: ");
printPreorder($root);

echo ("\nInorder traversal of binary tree is: ");
printInorder($root);

echo ("\nPostorder traversal of binary tree is: ");
printPostorder($root);
echo "\n";
