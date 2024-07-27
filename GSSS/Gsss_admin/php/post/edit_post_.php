<?php
// Handle form submission and update post details in the database


require("../../php/conn.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post_id = $_POST['postId'];
    $post_name = $_POST['name'];
    $post_title = $_POST['title'];
    $post_info = $_POST['editor'];

    
    // Update post details
    $query = "UPDATE post SET name='$post_name', title='$post_title', post_info='$post_info' WHERE id='$post_id'";

    if (mysqli_query($conn, $query)) {
        // Handle image upload
            $upload_directory = './../../uploads/post_img/';

        
        foreach ($_FILES['post_images']['name'] as $key => $name) {
            $temp_name = $_FILES['post_images']['tmp_name'][$key];
            $file_name = time() . '_' . $name;
            
            if (move_uploaded_file($temp_name, $upload_directory . $file_name)) {
                // Insert image details into MySQL
                $query = "INSERT INTO Post_img (img, post_id) VALUES ('$file_name', '$post_id')";
                
                mysqli_query($conn, $query);
            }
        }
        
        echo "Post updated successfully!";
    } else {
        echo "Error updating post: " . mysqli_error($conn);
    }
}
?>
