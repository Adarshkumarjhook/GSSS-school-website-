<?php
// Handle form submission and update post details in the database
require("../../php/conn.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $studentId = $_POST['studentId'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $Mname = $_POST['Mname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $gander = $_POST['gander'];
    $age = $_POST['age'];

    
    // Update post details
    
    $query = "UPDATE student_admission 
              SET name='$name', 
                  fname='$fname', 
                  Mname='$Mname', 
                  dob='$dob', 
                  address='$address', 
                  class='$class', 
                  gander='$gander', 
                  age='$age' 
              WHERE id='$studentId'";
    
    
   // $query = "UPDATE student_admission SET name='$name', fname='$fname', Mname='$Mname', dob='$dob', address='$address', class='$class', gender='$gender', age='$age', WHERE id='$studentId'";

    if (mysqli_query($conn, $query)) {
        
        echo "Post updated successfully!";
    } else {
        echo "Error updating post: " . mysqli_error($conn);
    }
}
?>
