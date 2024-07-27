<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

require("../../php/conn.php");








    $id = $_POST['id'];
    $gallery_name = $_POST['name']; // Renamed to avoid conflict
   // $editor = $_POST['editor'];
   echo $id;
   echo $gallery_name;

    // Update gallery name
    $sql = "UPDATE Gallery SET name='$gallery_name' WHERE id=$id";

    if ($conn->query($sql) !== TRUE) {
        echo "Error updating record: " . $conn->error;
        $conn->close();
        exit(); // Exit to avoid further execution
    }

    if (!empty($_FILES['img']['name'])) {
        $upload_directory = './../../uploads/gallery_img/';
        $file_names = array();

        foreach ($_FILES['img']['name'] as $key => $file_name) {
            $temp_name = $_FILES['img']['tmp_name'][$key];
            $file_name = time() . '_' . $file_name;

            // Validate file type and size before moving
            $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
            $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            if (in_array($file_extension, $allowed_types) && move_uploaded_file($temp_name, $upload_directory . $file_name)) {
                $file_names[] = $file_name;

                // Insert image details into MySQL using prepared statement
                $query = "INSERT INTO Gallery_img (img, Gallery_id) VALUES (?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("si", $file_name, $id);

                if ($stmt->execute()) {
                    echo 'Image uploaded successfully!<br>';
                } else {
                    echo 'Error: ' . $stmt->error . '<br>';
                }
            } else {
                echo 'Error uploading file ' . $file_name . '<br>';
            }
        }

        echo "Gallery updated successfully!";
    }
    $conn->close();
}
?>
