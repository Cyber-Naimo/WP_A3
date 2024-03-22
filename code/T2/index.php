<?php
//Task 1 - Create an empty array to store student records
$students = [];

//Task 2 - Add at least 5 sample student records to the array
$student1 = ['name' => 'Ali', 'age' => 20, 'grade' => 85];
$student2 = ['name' => 'Jilan', 'age' => 19, 'grade' => 76];
$student3 = ['name' => 'Mubashir', 'age' => 25, 'grade' => 92];
$student4 = ['name' => 'Rizwan', 'age' => 39, 'grade' => 66];
$student5 = ['name' => 'Irfan', 'age' => 31, 'grade' => 32];
array_push($students, $student1);
array_push($students, $student2);   
array_push($students, $student3); 
array_push($students, $student4);
array_push($students, $student5);

function showStudents($students) {
   //Task 3 - Function to display all student records with their details
   echo "Student Details" ."<br>";
   echo "Name | Age | Grade" . "<br>";
    foreach($students as $student) {
         echo $student['name'] . " | " . $student['age'] . " | " . $student['grade'] . "<br>";
    }   
}

showStudents($students);
echo "\n\n";
function avgGrade($students) {
    //Task 4 - Function to calculate and display the average grade of all students
    $total = 0;
    foreach($students as $student) {
        $total += $student['grade'];
    }
    $average = $total / count($students);
    echo "Average Grade: " . $average . "<br>";
}
avgGrade($students);
echo "\n\n";
function searchStudent($students, $name) {
    //Task 5 - Function to search for a student by name in array and display their complete details
    foreach($students as $student) {
        if($student['name'] == $name) {
            echo "Student Name: " . $student['name'] . "<br>";
            echo "Student Age: " . $student['age'] . "<br>";
            echo "Student Grade: " . $student['grade'] . "<br>";
            return;
        }
    }
    echo "Student not found!";
}
searchStudent($students, "Muhammad");
?>
