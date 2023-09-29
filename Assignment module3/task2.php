<?php


$numbers = range(1, 10);

// Function to remove even numbers from the array
function removeEvenNumbers($arr) {
    // Use array_filter to keep only odd numbers
    $filteredArray = array_filter($arr, function ($num) {
        return $num % 2 != 0;
    });

    return $filteredArray;
}

// Call the function and print the resulting array
$result = removeEvenNumbers($numbers);
print_r($result);
?>