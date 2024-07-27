<?php
// Assuming you have already established a database connection

require("../php/conn.php");




if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $who = $_POST['who'];

    // Query to fetch the current status
    $query = "SELECT status FROM $who WHERE id = $id";
    $result = mysqli_query($conn, $query);
    
    if($result) {
        $row = mysqli_fetch_assoc($result);
        $currentStatus = $row['status'];
        
        // Toggle the status
        $newStatus = ($currentStatus == 1) ? 0 : 1;
        
        // Update the status in the database
        $updateQuery = "UPDATE $who SET status = $newStatus WHERE id = $id";
        $updateResult = mysqli_query($conn, $updateQuery);
        
        if($updateResult) {
            echo "Status updated successfully.";
        } else {
            echo "Error updating status: " . mysqli_error($conn);
        }
    } else {
        echo "Error fetching current status: " . mysqli_error($conn);
    }
} else {
    echo "ID not provided.";
}
?>
