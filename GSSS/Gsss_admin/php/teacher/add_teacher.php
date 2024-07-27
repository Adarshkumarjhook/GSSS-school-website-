<?php
// Assuming database connection is established

require("../../php/conn.php");




$teacher_name = $_POST['teacher_name'];
$teacher_title = $_POST['teacher_title'];
$teacher_roll = $_POST['teacher_roll'];
$editor = $_POST['editor'];
$teacher_img = $_FILES['teacher_images']['name'];

// Upload image to server
    $target_dir = './../../uploads/teacher_img/';
$target_file = $target_dir . basename($_FILES["teacher_images"]["name"]);
move_uploaded_file($_FILES["teacher_images"]["tmp_name"], $target_file);

// Insert data into database
$sql = "INSERT INTO Teachers (name,title,img, roll,status,info) VALUES ('$teacher_name', '$teacher_title', '$teacher_img','$teacher_roll','1','$editor')";
if (mysqli_query($conn, $sql)) {
    echo "teacher added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
