<?php



require("../../php/conn.php");


$limit = 10; // Number of records per page
$page = isset($_POST['id']) ? $_POST['id'] : 1; // Current page number
$startFrom = ($page - 1) * $limit;
$sql = "SELECT * FROM post ORDER BY id DESC LIMIT $startFrom, $limit";
$result = $conn->query($sql);



// Fetch posts from the database
//$query = "SELECT * FROM post";
//$result = $conn->query($query);

if ($result->num_rows > 0) {
  
    $num=$startFrom+1;

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
      $status=$row['status'];
        echo "<tr>";
        echo "<td>" . $num . "</td>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>". $row['title'] . "</td>"; // Assuming images are stored in 'uploads' directory
       echo "<td>" . $row['date'] . "</td>";

        echo "<td>";
                        if ($status == 1) {
                            echo '<button data-id="' . $row["id"] . '" id="_0_1_btn_post" type="button" class="btn btn-success">Active</button>';
                        } else {
                            echo '<button data-id="' . $row["id"] . '" id="_0_1_btn_post" type="button" class="btn btn-danger">Inactive</button>';
                        }
                  
        echo '<button data-bs-toggle="modal" data-bs-target="#edit_POST"  id="post_edit_" data-id="'. $row['id'] . '"  class="btn btn-success m-3">EDIT</button>';
        echo "<button data-id='". $row['id'] . "' id='delete_post'class='btn btn-danger'>Delete</button>";
        echo "</td>";
        echo "</tr>";
        $num=$num+1;
        //  
    }
    
} else {
    echo "<tr><td colspan='7'>No posts found</td></tr>";
}

  $sqlTotal = "SELECT COUNT(id) AS total FROM post";
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
