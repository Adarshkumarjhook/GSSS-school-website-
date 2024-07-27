<?php

require("../../php/conn.php");



if(isset($_POST['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = $conn->real_escape_string($_POST['id']);
    $query = "SELECT * FROM admin WHERE id = '$id'";
              
//SELECT img FROM s_up_img WHERE s_up_id = {your_s_up_id};

    
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '
                 <link rel="stylesheet" href="https://elusiveicons.com/assets/elusive-icons/css/elusive-icons.css">
                <div class="modal-body">
                    <form id="edit_s_up_model_form_id"  method="post" enctype="multipart/form-data">
                        <!-- Input fields -->
                        <input type="hidden" value="' . $row["id"] . '" class="form-control" id="s_upId" name="s_upId">
                        <div class="mb-3">
                            <label for="username" class="form-label c_black">s_up username</label>
                            <input type="text" value="' . $row["username"] . '" class="form-control" id="username" name="username" placeholder="Enter s_up username">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>';
                    
        echo ' </div>

            ';
        }
    } else {
        echo "0 results";
    }
} else {
    echo json_encode(array('error' => 'ID parameter is missing'));
}
?>
