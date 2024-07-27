<?php
require("../../php/conn.php");
$login_username = $_POST['login_username'];
$login_password = md5($_POST['login_password']); // Hash the input password with MD5

$sql = "SELECT * FROM admin WHERE username = '$login_username'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $user_name = $row["username"];
        $user_password = $row['password'];
        if ($login_password == $user_password && $user_name == $login_username) {
            echo "1";
         $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
    
        } else {
            echo "0";
        }
    }
} else {
  
    echo "0";

}
?>
