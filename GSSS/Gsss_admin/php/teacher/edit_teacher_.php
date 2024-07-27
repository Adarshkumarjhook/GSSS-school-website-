<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

require("../../php/conn.php");



    // Get the form data
    $id = $_POST['teacherId'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $roll = $_POST['roll'];
    $editor = $_POST['editor'];



    // Check if a new image was uploaded
    if (!empty($_FILES['teacher_images']['name'])) {
        $img = $_FILES['teacher_images']['name'];
            $targetDir = './../../uploads/teacher_img/';

        $targetFilePath = $targetDir . basename($img);
        move_uploaded_file($_FILES['teacher_images']['tmp_name'], $targetFilePath);
    } else {
        // If no new image was uploaded, keep the existing one
        $sql = "SELECT img FROM Teachers WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $img = $row['img'];
    }

    // Update the record in the database
    $sql = "UPDATE Teachers SET name='$name', img='$img', roll=$roll,title='$title',info='$editor' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
