<?php



require("../../php/conn.php");




if(isset($_POST['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = $conn->real_escape_string($_POST['id']);
    $query = "SELECT * FROM post WHERE id = '$id'";
              
//SELECT img FROM Post_img WHERE post_id = {your_post_id};

    
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '
                 <link rel="stylesheet" href="https://elusiveicons.com/assets/elusive-icons/css/elusive-icons.css">
                <div class="modal-body">
                    <form id="edit_post_model_form_id"  method="post" enctype="multipart/form-data">
                        <!-- Input fields -->
                        <input type="hidden" value="' . $row["id"] . '" class="form-control" id="postId" name="postId">
                        <div class="mb-3">
                            <label for="name" class="form-label c_black">Post Name</label>
                            <input type="text" value="' . $row["name"] . '" class="form-control" id="name" name="name" placeholder="Enter post name">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label c_black">title</label>
                            <input type="text" value="' . $row["title"] . '" class="form-control" id="title" name="title" placeholder="Enter post title">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label c_black">Post information</label>
                                <div class="container_box card">
                                  <textarea id="post_editor_rrr">
                                  </textarea>
                               </div>
                            

                        </div>
                        <div class="mb-3">
                          <label for="img" class="form-label c_black">Post Image</label>
                          <input type="file" class="form-control" id="img" name="post_images[]" multiple>
     
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>';
                    
              $post_id = $row["id"];  
              $query = "SELECT * FROM Post_img WHERE post_id = '$post_id'";
              $result = mysqli_query($conn, $query);
              if ($result) {
                  // Check if any images are found
                  if (mysqli_num_rows($result) > 0) {
                      // Loop through each row to display the images
                      while ($row_1 = mysqli_fetch_assoc($result)) {
                        echo' <div class="mb-3 post_img">
                          <label for="img" class="form-label c_black">Post Image</label>
                                                    ';
                          $img_src = $row_1['img'];
                          echo '<img src="./uploads/post_img/' . $img_src . '"   class="img-fluid"  alt="Post Image">
                          <button class="btn btn-danger m-3" id="delete_btn_post_edit_model_img" data-id="'.$row_1['id'].'">delete </button>
                             </div>

                          <br>';
                      }
                  } else {
                      echo "No images found for this post.";
                  }
              } else {
                  echo "Error: " . mysqli_error($conn);
              }
         
                    
        echo ' </div>
                
                
                <script>
                                     CKEDITOR.replace("post_editor_rrr");
                                      var textrich_1rrr = CKEDITOR.instances["post_editor_rrr"];
                                        setTimeout(() => {
                                                 var newData_1 = `'. $row['post_info'] . '`;
                                                 textrich_1rrr.setData(newData_1);
                                                 
                                        },500)
                                        
                </script>
                

            ';
        }
    } else {
        echo "0 results";
    }
} else {
    echo json_encode(array('error' => 'ID parameter is missing'));
}
?>
