<?php
// Handle form submission and save post details to MySQL

// Assuming you have a database connection established




require("../../php/conn.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post_name = $_POST['post_name'];
    $post_title = $_POST['post_title'];
        $post_editor = $_POST['editor'];

    
    // Insert post details into the database
    // Replace 'post' with your actual table name
    $query = "INSERT INTO post (name, title, date, status, post_info)
    VALUES ('$post_name', '$post_title', '2024-02-12 08:00:00', 1, '$post_editor');
    ";
    // Execute the query
    
    if (mysqli_query($conn, $query)) {
      echo "add post";
    } // Assuming $conn is your database connection
    
    $post_id = mysqli_insert_id($conn); // Get the last inserted post ID
    
    // Handle file upload
    $upload_directory = './../../uploads/post_img/';
    $file_names = array();
    
    foreach ($_FILES['post_images']['name'] as $key => $name) {
        $temp_name = $_FILES['post_images']['tmp_name'][$key];
        $file_name = time() . '_' . $name;
        $file_names[] = $file_name;
        
        move_uploaded_file($temp_name, $upload_directory . $file_name);
        
        // Insert image details into MySQL
        // Replace 'Post_img' with your actual table name
        $query = "INSERT INTO Post_img (img, post_id) VALUES ('$file_name', '$post_id')";
        // Execute the query
        
        
        if (mysqli_query($conn, $query)) {
          // code...
          echo 'add images';
        }
        
        // Assuming $conn is your database connection
    }
    
    echo "Post added successfully!";
}
?>
