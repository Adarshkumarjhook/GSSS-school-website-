<?php
require("../../php/conn.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gallery_name = $_POST['gallery_name'];
    
    // Insert gallery details into the database
    $query = "INSERT INTO Gallery (name, date, status)
              VALUES ('$gallery_name', '2024-02-12 08:00:00', 1)";
    
    if (mysqli_query($conn, $query)) {
        $gallery_id = mysqli_insert_id($conn); // Get the last inserted gallery ID
        
        // Handle file upload
        $upload_directory = './../../uploads/gallery_img/';
        $file_names = array();
        
        foreach ($_FILES['gallery_images']['name'] as $key => $name) {
            $temp_name = $_FILES['gallery_images']['tmp_name'][$key];
            $file_name = time() . '_' . $name;
            $file_names[] = $file_name;
            
            if (move_uploaded_file($temp_name, $upload_directory . $file_name)) {
                // Insert image details into MySQL
                $query = "INSERT INTO Gallery_img (img, Gallery_id) VALUES ('$file_name', '$gallery_id')";
                
                if (mysqli_query($conn, $query)) {
                    echo 'Image uploaded successfully!<br>';
                } else {
                    echo 'Error: ' . mysqli_error($conn) . '<br>';
                }
            } else {
                echo 'Error uploading file ' . $name . '<br>';
            }
        }
        
        echo "Gallery added successfully!";
    } else {
        echo 'Error: ' . mysqli_error($conn) . '<br>';
    }
}
?>
