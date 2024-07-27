<?php
// Include your database connection file
require("../php/conn.php");
// Check if ID is provided
if(isset($_POST['id'])) {
    // Sanitize the ID to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $who = mysqli_real_escape_string($conn, $_POST['who']);

    // Query to delete the record
    $query = "DELETE FROM $who WHERE id = $id";

    // Execute the query
    if(mysqli_query($conn, $query)) {
        // If deletion was successful
        echo json_encode(array('success' => true, 'message' => 'Record deleted successfully'));
    } else {
        // If an error occurred
        echo json_encode(array('success' => false, 'message' => 'Error deleting record'));
    }
} else {
    // If ID is not provided
    echo json_encode(array('success' => false, 'message' => 'ID not provided'));
}
?>
