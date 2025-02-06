# PHP Foreach and unset() Bug

This repository demonstrates an uncommon bug in PHP related to the interaction between the `foreach` loop and the `unset()` function when working with arrays passed by value.

The bug occurs when attempting to remove elements from an array within a `foreach` loop.  While this generally works fine, the behavior can be unpredictable, particularly when dealing with associative arrays or when the array is passed by value (the default in PHP).

## Bug Description

The `unset()` function removes an element from an array. If used within a foreach loop iterating over an array passed by value, it might not remove elements as expected.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`.
3. Observe the unexpected output, particularly with the associative array.