<?php
require("../php/conn.php");


if(isset($_POST['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = $_POST['id'];
    $sql = "SELECT * FROM Scroller WHERE id = $id";
} else {
    echo json_encode(array('error' => 'ID parameter is missing'));
}

$result = $conn->query($sql);
?>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '

                <div class="modal-body">
                    <form id="edit_scroller_model_form" action="process_form.php" method="post" enctype="multipart/form-data">
                        <!-- Input fields -->
                        <input type="hidden" value="' . $row["id"] . '" class="form-control" id="scrollerId" name="scrollerId" placeholder="Enter scroller ID">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label c_black">Scroller name</label>
                            <input type="text" value="' . $row["name"] . '" class="form-control" id="name" name="name" placeholder="Enter scroller name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label c_black">Roll</label>
                            <input type="number" value="' . $row["roll"] . '" class="form-control" id="roll" name="roll" placeholder="Enter scroller roll">
                        </div>
                        <div class="mb-3">
                            <label for="model_img_pre" class="form-label c_black">Scroller img</label>
                            <input type="file" class="form-control" id="img" name="img" placeholder="Enter scroller image">
                        </div>
                        <div class="mb-3">
                            <img src="./uploads/' . $row["img"] . '" class="img-fluid" id="edit_model_img_pr" alt="...">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
        ';
    }
} else {
    echo "0 results";
}
?>
