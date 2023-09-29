<?php


$studentGrades = array(
    'student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'student3' => array('Math' => 75, 'English' => 80, 'Science' => 85)
);

// Function to calculate and print average grades for each student
function calculateAverageGrades($grades) {
    foreach ($grades as $student => $subjectGrades) {
        // Calculate the average grade for each student
        $averageGrade = array_sum($subjectGrades) / count($subjectGrades);

        // Print the average grade for each student
        echo "Average grade for $student: $averageGrade\n";
    }
}

// Call the function to calculate and print average grades
calculateAverageGrades($studentGrades);