<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HTML</title>
  <link rel='stylesheet' href='https://elusiveicons.com/assets/elusive-icons/css/elusive-icons.css'>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="main">
    <div class="page_1">
  
      <?php 
      require("./header.php");
      ?>
      <h1>s_up <span class="c_crimson"> <i class="fa-solid fa-plus" data-bs-toggle="modal" data-bs-target="#add_S_UP"></i></span></h1>
      <section>
        <div class="container_1">
          <table class="table custom-table">
            <thead>
              <tr>
                <th>#</th>
                <th>ID</th>
                <th>username</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="s_up_show">
              <!-- More rows can be added here -->
            </tbody>
          </table>
        </div>


      </section>

    </div>
  </div>
  <div class="modal fade" id="add_S_UP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">ADD s_up </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="add_s_up_" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="mb-3">
              <label for="username" class="form-label c_black"> username</label>
              <input type="text" class="form-control" id="username" name="s_up_username" placeholder="Enter   username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label c_black">password</label>
              <input type="text" class="form-control" id="password" name="s_up_password" placeholder="Enter password">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  </div>
  <div class="modal fade" id="edit_s_up">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" id="show_edit_s_up_">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

      </div>

    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- cke ckeditor -->
  <script src='https://cdn.ckeditor.com/4.7.0/full/ckeditor.js'></script>
  <script src="./cke_aditer/script.js"></script>
  <link rel="stylesheet" href="./cke_aditer/style.css">
  <!-- ///////cke ckeditor -->



  <script type="text/javascript" src="cdn_modules/jquery@3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="./main.js" defer></script>
  <script src="./js/s_up.js" defer></script>
</body>

</html>