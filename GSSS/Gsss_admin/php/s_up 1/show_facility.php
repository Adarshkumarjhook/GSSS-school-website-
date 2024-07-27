<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$database = "girl_school";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch facility from the database
$query = "SELECT * FROM facility";
$result = $conn->query($query);

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
       echo "<td>" . $row['roll'] . "</td>";

        echo "<td>";
                        if ($status == 1) {
                            echo '<button data-id="' . $row["id"] . '" id="_0_1_btn_facility" type="button" class="btn btn-success">Active</button>';
                        } else {
                            echo '<button data-id="' . $row["id"] . '" id="_0_1_btn_facility" type="button" class="btn btn-danger">Inactive</button>';
                        }
                  
        echo '<button data-bs-toggle="modal" data-bs-target="#edit_facility"  id="facility_edit_" data-id="'. $row['id'] . '"  class="btn btn-success m-3">EDIT</button>';
        echo "<button data-id='". $row['id'] . "' id='delete_facility'class='btn btn-danger'>Delete</button>";
        echo "</td>";
        echo "</tr>";
        $num=$num+1;
        //  
    }
    
} else {
    echo "<tr><td colspan='7'>No facility found</td></tr>";
}

$conn->close();
?>
