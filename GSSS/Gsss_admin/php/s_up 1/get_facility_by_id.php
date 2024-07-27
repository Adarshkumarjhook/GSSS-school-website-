<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$database = "girl_school";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = $conn->real_escape_string($_POST['id']);
    $query = "SELECT * FROM facility WHERE id = '$id'";
              
//SELECT img FROM facility_img WHERE facility_id = {your_facility_id};

    
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '
                 <link rel="stylesheet" href="https://elusiveicons.com/assets/elusive-icons/css/elusive-icons.css">
                <div class="modal-body">
                    <form id="edit_facility_model_form_id"  method="post" enctype="multipart/form-data">
                        <!-- Input fields -->
                        <input type="hidden" value="' . $row["id"] . '" class="form-control" id="facilityId" name="facilityId">
                        <div class="mb-3">
                            <label for="name" class="form-label c_black">facility Name</label>
                            <input type="text" value="' . $row["name"] . '" class="form-control" id="name" name="name" placeholder="Enter facility name">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label c_black">Roll</label>
                            <input type="text" value="' . $row["title"] . '" class="form-control" id="title" name="title" placeholder="Enter facility title">
                        </div>
                                                <div class="mb-3">
                                                    <label for="roll" class="form-label c_black">Roll</label>
                                                    <input type="text" value="' . $row["roll"] . '" class="form-control" id="roll" name="roll" placeholder="Enter facility roll">
                                                </div>
                        <div class="mb-3">
                            <label for="img" class="form-label c_black">facility Image</label>
                                <div class="container_box card">
                                  <textarea id="rrr">
                                  </textarea>
                               </div>
                            

                        </div>
                        <div class="mb-3">
                          <label for="img" class="form-label c_black">facility Image</label>
                          <input type="file" class="form-control" id="img" name="facility_images">
                        </div>
                                                <div class="mb-3">
                                                      <img src="./uploads/facility_img/' . $row["img"] . '" class="form-control">

                                                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>';
                    
        echo ' </div>
                
                
                <script>
                                     CKEDITOR.replace("rrr");
                                      var textrich_1 = CKEDITOR.instances["rrr"];
                                           var newData = `'. $row['info'] . '`;

                                        setTimeout(() => {
                                                 textrich_1.setData(newData);
                                                 
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
