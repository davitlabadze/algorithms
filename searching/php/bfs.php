<?php

//  Algorithm:
//  There are basically two functions in this method.
//  One is to print all nodes at a given level (printCurrentLevel),
//  and the other is to print the level order traversal of the tree (printLevelorder).
//  printLevelorder makes use of printCurrentLevel to print nodes at all
//  levels one by one starting from the root.

class Node
{
    public function __construct($key)
    {
        $this->data = $key;
        $this->left = NULL;
        $this->right = NULL;
    }
}

function printLevelOrder($root)
{
    $height = height($root);
    for ($i = 1; $height + 1 > $i; $i++) {
        printCurrentLevel($root, $i);
    }
}

function printCurrentLevel($root, $level)
{
    if ($root == null) return;
    if ($level == 1) echo $root->data;
    elseif ($level > 1) {
        printCurrentLevel($root->left, $level - 1);
        printCurrentLevel($root->right, $level - 1);
    }
}


//  Compute the height of a tree--the number of nodes
//  along the longest path from the root node down to
//  the farthest leaf node

function height($node)
{
    if ($node === null) return 0;
    else {
        $leftHeight = height($node->left);
        $rightHeight = height($node->right);
        if ($leftHeight > $rightHeight) return $leftHeight + 1;
        else return $rightHeight + 1;
    }
}

//Driver code
$root              = new Node(1);
$root->left        = new Node(2);
$root->right       = new Node(3);
$root->left->left  = new Node(4);
$root->left->right = new Node(5);

echo "Level order traversal of binary tree is: ";
printLevelOrder($root);
echo "\n";


// Time Complexity: O(n^2) in worst case. For a skewed tree, printGivenLevel() takes O(n) time where n is the number of nodes in the skewed tree. 
//  So time complexity of printLevelOrder() is O(n) + O(n-1) + O(n-2) + .. + O(1) which is O(n^2). 
// Auxiliary Space:  O(n) in the worst case. For a skewed tree, printGivenLevel() uses O(n) space for call stack. For a Balanced tree,
//  the call stack uses O(log n) space, (i.e., the height of the balanced tree). 



class SecondNode
{
    //  A utility function to create a new node
    public function __construct($key)
    {
        $this->data = $key;
        $this->left = null;
        $this->right = null;
    }
}

function printLevelOrderSecond($secondRoot)
{
    if ($secondRoot == null) return;

    $queue = [];
    array_push($queue, $secondRoot);

    while (count($queue) > 0) {
        // Print front of queue and
        // remove it from queue
        echo $queue[0]->data;
        $node = array_shift($queue);

        // Enqueue left child
        if ($node->left != null) array_push($queue, $node->left);

        // Enqueue right child
        if ($node->right != null) array_push($queue, $node->right);
    }
}


# Driver code
$secondRoot              = new SecondNode(1);
$secondRoot->left        = new SecondNode(2);
$secondRoot->right       = new SecondNode(3);
$secondRoot->left->left  = new SecondNode(4);
$secondRoot->left->right = new SecondNode(5);

echo "second Level Order Traversal of binary tree is: ";
printLevelOrderSecond($secondRoot);

# Time Complexity: O(n) where n is the number of nodes in the binary tree
# Auxiliary Space: O(n) where n is the number of nodes in the binary tree
