<?php
require("../php/conn.php");



$limit = 3; // Number of records per page
$page = isset($_POST['id']) ? $_POST['id'] : 1; // Current page number
$startFrom = ($page - 1) * $limit;
$sql = "SELECT * FROM Scroller ORDER BY id DESC LIMIT $startFrom, $limit";
$result = $conn->query($sql);


?>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $status = $row["status"];
                echo '
                    <div class="col">
                        <div class="card">
                            <img src="./uploads/' . $row["img"] . '" class="card-img-top" alt="' . $row["name"] . '">
                            <div class="card-body">
                                <div class="">
                                    <h5 class="card-title">NAME<span class="c_crimson"> ' . $row["name"] . '</span></h5>
                                    <h5 class="card-title">Date<span class="c_crimson"> ' . $row["date"] . '</span></h5>
                                    <h5 class="card-title">ROLL<span class="c_crimson"> ' . $row["roll"] . '</span></h5>
                                </div>
                                <div class="s-b">
                                <div class="dropup-center dropup">
                                    <button class="btn btn-secondary dropdown-toggle m-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Centered dropup
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li data-bs-toggle="modal" data-bs-target="#edit_SWIPER"><a data-id="' . $row["id"] . '" id="edit_btn_swaiper" class="dropdown-item" href="#">edit</a></li>
                                        <li><a data-id="' . $row["id"] . '" id="delete_btn_swaiper" class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>';
        
                if ($status == 1) {
                    echo '<button data-id="' . $row["id"] . '" id="_0_1_btn_swaiper" type="button" class="btn btn-success">Active</button>';
                } else {
                    echo '<button data-id="' . $row["id"] . '" id="_0_1_btn_swaiper" type="button" class="btn btn-danger">Inactive</button>';
                }
                
                echo '
                            </div>
                            </div>

                        </div>
                    </div>';
            }
        } else {
            echo "0 results";
        }
        
          $sqlTotal = "SELECT COUNT(id) AS total FROM Scroller";
          $resultTotal = $conn->query($sqlTotal);
          $rowTotal = $resultTotal->fetch_assoc();
          $totalPages = ceil($rowTotal['total'] / $limit);
          
          if ($totalPages>1) {
               echo "<tr><td colspan='7'>
               <div class='pagination'>";
        for ($i = 1; $i <=$totalPages; $i++) {
           // code...
          echo "<a href='#'data-id='{$i}' id='page_id' class='page'>{$i}</a>";
        }  
           echo "</div>
             <input type='hidden' value='{$page}' id='carrent_page'>
           </td></tr>";
          }
        
        $conn->close();
        
        
        ?>
        