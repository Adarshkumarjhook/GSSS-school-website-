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
    <div class="loader_upload_img" id="loader_upload_img_id" style="width:100vw; height:100vh;backdrop-filter: 15px; background:#8181819E;  position: absolute;z-index: 90000; display:flex;align-items: center;
      display: none;

    justify-content: center;">
      
      <div class="loader_" style="width: 40vw;
      height: 2vw;
      background: #A1A1A1;
      overflow: hidden;
      border-radius: 50px;">
        <div class="loader__" style="width: 15%;
        height: 100%;
        background: #FF0092;
        border-radius: 15px;
        animation: loader__ 2s linear infinite ;

        "></div>
        
      </div>
      
      
      
    </div>
    
    <style>
      .loader__{
  animation-name: loader__;
  animation-duration: 1.5s;
  animation-iteration-count: infinite;
  animation-play-state: linear;
  bottom: 2px solid black;
}



@-webkit-keyframes loader__{
  from {
        transform: translateX(0vw);

  }
  to {  
    transform: translateX(40vw);
    
    
  }
}


    </style>
    
    
    
    
    
    
    <div class="page_1">
      
            <?php 
            require("./header.php");
            ?>
      
      <h1>gallery <span class="c_crimson"> <i class="fa-solid fa-plus" data-bs-toggle="modal" data-bs-target="#add_gallery_Model"></i></span></h1>
      <section>
        <div class="container_1">
          <table class="table custom-table">
            <thead>
              <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="gallery_show">
              <!-- More rows can be added here -->
            </tbody>
          </table>
        </div>


      </section>

    </div>
  </div>
  <div class="modal fade" id="add_gallery_Model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">ADD gallery</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="add_gallery" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="mb-3">
              <label for="name" class="form-label c_black">gallery Name</label>
              <input type="text" class="form-control" id="name" name="gallery_name" placeholder="Enter gallery Name">
            </div>
            <div class="mb-3">
              <label for="img" class="form-label c_black">gallery Image</label>
              <input type="file" class="form-control" id="img" name="gallery_images[]" multiple>
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
  <div class="modal  fade" id="edit_gallery">
    <div class="modal-dialog">
      <div class="modal-content" id="show_edit_gallery">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

      </div>

    </div>
  </div>






  <!-- Full Screen Modal -->
  <div class="modal fade" id="fullScreenModal" tabindex="-1" aria-labelledby="fullScreenModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="fullScreenModalLabel">Full Screen Modal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="show_all_img_model">




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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
  <script src="main.js" defer></script>
  <script src="./js/gallery.js" defer></script>
</body>

</html>