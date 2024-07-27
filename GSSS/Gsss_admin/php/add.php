<?php
// Assuming database connection is established

require("../php/conn.php");



$scroller_name = $_POST['scroller_name'];
$scroller_roll = $_POST['scroller_roll'];
$scroller_img = $_FILES['scroller_img']['name'];

// Upload image to server
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["scroller_img"]["name"]);
move_uploaded_file($_FILES["scroller_img"]["tmp_name"], $target_file);

// Insert data into database
$sql = "INSERT INTO Scroller (name, img, roll,status) VALUES ('$scroller_name', '$scroller_img', '$scroller_roll','1')";
if (mysqli_query($conn, $sql)) {
    echo "Scroller added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
