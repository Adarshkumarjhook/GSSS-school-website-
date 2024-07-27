<?php


require("../../php/conn.php");


if(isset($_POST['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = $conn->real_escape_string($_POST['id']);
    $query = "SELECT * FROM student_admission WHERE id = '$id'";
              
//SELECT img FROM student_img WHERE student_id = {your_student_id};

    
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '
                 <link rel="stylesheet" href="https://elusiveicons.com/assets/elusive-icons/css/elusive-icons.css">
                <div class="modal-body">
                    <form id="edit_student_model_form_id"  method="post" enctype="multipart/form-data">
                        <!-- Input fields -->
                        <input type="hidden" value="' . $row["id"] . '" class="form-control" id="studentId" name="studentId">
                        <div class="mb-3">
                            <label for="name" class="form-label c_black">student Name</label>
                            <input type="text" value="' . $row["name"] . '" class="form-control" id="name" name="name" placeholder="Enter student name">
                        </div>
                        <div class="mb-3">
                            <label for="roll" class="form-label c_black">fname</label>
                            <input type="text" value="' . $row["fname"] . '" class="form-control" id="fname" name="fname" placeholder="Enter student fname">
                        </div>
                        
                                                <div class="mb-3">
                                                    <label for="Mname" class="form-label c_black">Mname</label>
                                                    <input type="text" value="' . $row["Mname"] . '" class="form-control" id="Mname" name="Mname" placeholder="Enter student Mname">
                                                </div>
                                                                        <div class="mb-3">
                                                                            <label for="dob" class="form-label c_black">dob</label>
                                                                            <input type="date" value="' . $row["dob"] . '" class="form-control" id="dob" name="dob" placeholder="Enter student dob">
                                                                        </div>
                                                                       <div class="mb-3">
                                                                           <label for="address" class="form-label c_black">address</label>
                                                                           <input type="text" value="' . $row["address"] . '" class="form-control" id="address" name="address" placeholder="Enter student address">
                                                                       </div>
                                                                                               <div class="mb-3">
                                                                                                   <label for="roll" class="form-label c_black">class</label>
                                                                                                   <input type="text" value="' . $row["class"] . '" class="form-control" id="class" name="class" placeholder="Enter student class">
                                                                                               </div>
                                                                                                                       <div class="mb-3">
                                                                                                                           <label for="gender" class="form-label c_black">gender</label>
                                                                                                                           <input type="text" value="' . $row["gander"] . '" class="form-control" id="gander" name="gander" placeholder="Enter student gander">
                                                                                                                       </div>
                                                                                                                                               <div class="mb-3">
                                                                                                                                                   <label for="age" class="form-label c_black">age</label>
                                                                                                                                                   <input type="text" value="' . $row["age"] . '" class="form-control" id="age" name="age" placeholder="Enter student age">
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
