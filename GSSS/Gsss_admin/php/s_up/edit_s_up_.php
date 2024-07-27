<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

require("../../php/conn.php");

    // Get the form data
    $id = $_POST['s_upId'];
    $username = $_POST['username'];



    // Check if a new image was uploaded
        // If no new image was uploaded, keep the existing one

    // Update the record in the database
    $sql = "UPDATE admin SET username='$username' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
