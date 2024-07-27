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
      
      <h1>swiper <span class="c_crimson"> <i class="fa-solid fa-plus" data-bs-toggle="modal" data-bs-target="#add_SWIPER"></i></span></h1>
      <section>
      <div class="row row-cols-1 row-cols-md-3 g-4" id="show_swiper">
        
      </div>

      </section>

    </div>

    <!-- moder ❌ -->
    <!-- Modal -->
    <div class="modal fade" id="add_SWIPER" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="add_scoller_model_form" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="scroller_name" class="form-label c_black">Scroller Name</label>
        <input type="text" class="form-control" id="scroller_name" name="scroller_name" placeholder="Enter Scroller Name">
    </div>
    <div class="mb-3">
        <label for="scroller_roll" class="form-label c_black">Roll</label>
        <input type="number" class="form-control" id="scroller_roll" name="scroller_roll" placeholder="Enter Scroller Roll">
    </div>
    <div class="mb-3">
        <label for="scroller_img" class="form-label c_black">Scroller Image</label>
        <input type="file" class="form-control" id="scroller_img" name="scroller_img">
    </div>
    <div class="mb-3">
        <img src="/img/q1.jpg" class="img-fluid" id="image_preview" alt="Preview Image">
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
  </div>

  </div>
  <div class="modal fade" id="edit_SWIPER" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
                  <div class="modal-content" id="show_edit_swiper" >
                      <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      
         </div>

  </div>
  </div>



  <script type="text/javascript" src="cdn_modules/jquery@3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="main.js" defer></script>
  <script src="./js/slider.js" defer></script>
</body>
</html>