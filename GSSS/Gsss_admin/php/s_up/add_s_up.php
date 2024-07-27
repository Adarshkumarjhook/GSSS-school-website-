<?php
// Assuming database connection is established
require("../../php/conn.php");

$s_up_username = $_POST['s_up_username'];
$s_up_password = md5($_POST['s_up_password']); // Hash the password using MD5

// Insert data into database
$sql = "INSERT INTO admin (username,password) VALUES ('$s_up_username', '$s_up_password')";
if (mysqli_query($conn, $sql)) {
    echo "facility added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
