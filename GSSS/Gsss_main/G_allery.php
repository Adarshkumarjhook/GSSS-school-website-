<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HTML</title>

  <!-- HTML -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/gallery/G_allery.css">

</head>

<body>
  <div class="main">
    <div class="page_1">
<?php
require("./conn.php");
require("./header.php");
?>


      <!-- main page start -->
      <!--  -->
      <div class="card-container">

          <?php 
        //  $sql = "SELECT * FROM Gallery WHERE status = 1 ORDER BY id DESC";
        //  $result = mysqli_query($conn, $sql);
          
          
          $limit = 10; // Number of records per page
          $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number
          $startFrom = ($page - 1) * $limit;
          $sql = "SELECT * FROM Gallery WHERE status = 1 ORDER BY id DESC LIMIT $startFrom, $limit";
          $result = $conn->query($sql);
          
          
          
          
          
          
          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                
                   echo  " <div class='card'>
                          <a href='gallery.php?id={$row['id']}'> ";
                          
                                        $sql_1="SELECT *
                                        FROM Gallery_img
                                        WHERE Gallery_id ={$row['id']} LIMIT 1";
                        $result_1 = mysqli_query($conn, $sql_1);
                        
                        
                        
                        if (mysqli_num_rows($result_1)>0) {
                               while ($row_1 = mysqli_fetch_assoc($result_1)) {

                              echo "<img src='../Gsss_admin/uploads/gallery_img/{$row_1['img']}' alt='Image 1'>";

                        }
                        }
                    
                     echo " <div class='card-name'>{$row['name']}</div>
                         </a>
                        </div>
                ";
              }
          }
          ?>
        <!-- Add more cards here -->
      </div>

<?php
      $sqlTotal = "SELECT COUNT(id) AS total FROM Gallery WHERE status = 1";
      $resultTotal = $conn->query($sqlTotal);
      $rowTotal = $resultTotal->fetch_assoc();
      $totalPages = ceil($rowTotal['total'] / $limit);
      
      if ($totalPages>1) {
           echo "<tr><td colspan='7'>
           <div class='pagination'>";
    for ($i = 1; $i <=$totalPages; $i++) {
       // code...
      echo "<a href='G_allery.php?page={$i}'data-id='{$i}' id='page_id' class='page'>{$i}</a>";
    }  
       echo "</div>
         <input type='hidden' value='{$page}' id='carrent_page'>
       </td></tr>";
      }
    


?>




    </div>
    <section class="footer">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Info</h4>
          <ul class="links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Compressions</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Collection</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Explore</h4>
          <ul class="links">
            <li><a href="#">Free Designs</a></li>
            <li><a href="#">Latest Designs</a></li>
            <li><a href="#">Themes</a></li>
            <li><a href="#">Popular Designs</a></li>
            <li><a href="#">Art Skills</a></li>
            <li><a href="#">New Uploads</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Legal</h4>
          <ul class="links">
            <li><a href="#">Customer Agreement</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">GDPR</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Media Kit</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Newsletter</h4>
          <p>
            Subscribe to our newsletter for a weekly dose
            of news, updates, helpful tips, and
            exclusive offers.
          </p>
          <form action="#">
            <input type="text" placeholder="Your email" required>
            <button type="submit">SUBSCRIBE</button>
          </form>
          <div class="icons">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-github"></i>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  <script src="main.js"></script>
  <script src="./yo.js/jquery.js"></script>
  <script src="./_.js"></script>
</body>

</html>