# PHP Foreach Loop Pass-by-Reference Bug

This repository demonstrates a subtle but common error in PHP related to pass-by-reference in `foreach` loops.  Incorrect handling of references can lead to unintended side effects, especially when modifying array elements within the loop.

The `bug.php` file showcases the problematic code.  The `bugSolution.php` file provides a corrected version.

**Bug:** The original code intends to increment each element of the array by 1. However, due to the use of `&$value`, modifications persist after the loop completes affecting the original array in unexpected ways.

**Solution:** The solution demonstrates how to correctly handle the reference to avoid this issue by using `$value` instead of `&$value` inside the foreach loop or making a copy of the array before processing it. 