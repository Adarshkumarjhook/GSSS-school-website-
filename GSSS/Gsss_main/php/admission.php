<?php
// Database connection parameters
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$database = "girl_school";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = $_POST['student_name'];
    $fatherName = $_POST['father_name'];
    $motherName = $_POST['mother_name'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $class = $_POST['class'];
    $gender = $_POST['gender'];

$sql = "INSERT INTO `student_admission` (`name`, `fname`, `Mname`, `dob`, `address`, `status`, `class`, `date`, `gander`, `age`) VALUES ('$studentName', '$fatherName', '$motherName', '2024-02-13', 'Addder', '0', '12th', current_timestamp(), 'Male ', '18');";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    // If the request method is not POST, return an error
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
