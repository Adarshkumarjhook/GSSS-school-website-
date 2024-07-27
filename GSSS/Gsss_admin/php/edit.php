<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

require("../php/conn.php");

    // Get the form data
    $id = $_POST['scrollerId'];
    $name = $_POST['name'];
    $roll = $_POST['roll'];

    // Check if a new image was uploaded
    if (!empty($_FILES['img']['name'])) {
        $img = $_FILES['img']['name'];
        $targetDir = "../uploads/";
        $targetFilePath = $targetDir . basename($img);
        move_uploaded_file($_FILES['img']['tmp_name'], $targetFilePath);
    } else {
        // If no new image was uploaded, keep the existing one
        $sql = "SELECT img FROM Scroller WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $img = $row['img'];
    }

    // Update the record in the database
    $sql = "UPDATE Scroller SET name='$name', img='$img', roll=$roll WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
