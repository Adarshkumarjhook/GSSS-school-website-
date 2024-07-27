<?php
// Assuming you have established a database connection

require("../../php/conn.php");
$gallery_id = $_POST['id']; // Assuming you're passing the gallery ID through POST, adjust as needed
$limit = 10; // Number of records per page
$page = isset($_POST['page']) ? $_POST['page'] : 1; // Current page number
$startFrom = ($page - 1) * $limit;
//$sql = "SELECT * FROM Gallery_img WHERE gallery_id = $gallery_id ORDER BY id DESC LIMIT $startFrom, $limit";
//$sql = "SELECT * FROM Gallery_img WHERE gallery_id = $gallery_id";
//$sql = "SELECT * FROM Gallery_img  WHERE gallery_id = $gallery_id";
$sql="SELECT *
FROM Gallery_img
WHERE Gallery_id = $gallery_id
LIMIT $startFrom, $limit;";
//$sql = "SELECT * FROM Gallery_img WHERE gallery_id = $gallery_id LIMIT $startFrom, $limit";
$result = $conn->query($sql);
// Prepare and execute SQL query to retrieve images by gallery ID
//$sql = "SELECT * FROM Gallery_img WHERE gallery_id = $gallery_id";
//$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Array to store image URLs
echo '<div class="gallery" id="gallery">';
    // Fetch image URLs from the result set
    while($row = $result->fetch_assoc()) {
        echo '
            <div class="mb-3 pics animation all 2" data-id="'.$row['id'].'">
              <img class="img-fluid" src="./uploads/gallery_img/'.$row['img'].'" alt="Card image cap">
              <button id="delete_gallery_img" data-id="'.$row['id'].'">DELETE</button>
        ';
echo '</div>';
    }
} else {
    // No images found for the given gallery ID
    echo json_encode(array('' => 'No images found for the gallery ID{$startFrom}'.$startFrom."------".$gallery_id));
}
  $sqlTotal = "SELECT COUNT(id) AS total FROM Gallery_img WHERE Gallery_id = $gallery_id";
  $resultTotal = $conn->query($sqlTotal);
  $rowTotal = $resultTotal->fetch_assoc();
  $totalPages = ceil($rowTotal['total'] / $limit);
  
  if ($totalPages>1) {
       echo "<tr><td colspan='7'>
       <div class='pagination'>";
for ($i = 1; $i <=$totalPages; $i++) {
   // code...
  echo "<a href='#'data-id='{$i}'  data-gallery_id_='{$gallery_id}' id='page_id_' class='page'>{$i}</a>";
}  
   echo "</div>
     <input type='hidden' value='{$gallery_id}' id='gallery_id__'>
   </td></tr>";
  }




// Close the database connection
$conn->close();
?>
