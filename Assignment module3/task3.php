<?php

$grades = array(85, 92, 78, 88, 95);

// Function to sort grades in descending order
function sortGradesDescending($arr) {
    // Use arsort to sort the array in descending order
    arsort($arr);
    return $arr;
}

// Call the function and print the sorted grades
$sortedGrades = sortGradesDescending($grades);
print_r($sortedGrades);
?>