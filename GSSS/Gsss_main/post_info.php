<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HTML</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./css/model.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/post/post.css">
</head>

<body>
  <div class="main">
    <div class="page_1">
      <?php
      require("./conn.php");
      require("./header.php");
      ?>

      <style>
        table {
          border-collapse: collapse;
          width: 100%;
        }
      
        th,
        td {
          border: 1px solid #ddd;
          padding: 10px;
        }
      
        th {
          text-align: left;
          background-color: #f2f2f2;
        }
      
        tbody tr:nth-child(even) {
          background-color: #f2f2f2;
        }
      
        tbody tr:hover {
          background-color: #ddd;
        }
      
        span[style^="font-family:Times New Roman"] {
          font-family: Times New Roman, Times, serif !important;
        }
        #post_info_id{
          font-size: 1vw;
          
        }
      </style>
      <hr>
      
      <!--[if IE]>
        <p>admission form</p>
      <![endif]-->
     
      <?php 
      $id = $_GET['id'];
      $query = "SELECT * FROM post WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
      
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              $post_info_img = 'SELECT * FROM Post_img WHERE post_id = ' . $row["id"];
              $post_img_result = mysqli_query($conn, $post_info_img);
      
              if (mysqli_num_rows($post_img_result) > 0) {
                  while ($row_img = mysqli_fetch_assoc($post_img_result)) {
                      echo "
                      <table border='1' cellpadding='10' cellspacing='3' style='width:100%'>
                          <thead>
                              <tr>
                                  <th scope='col'><span style='font-family:Times New Roman,Times,serif'>Name</span></th>
                                  <th scope='col'>
                                      <p style='text-align:left'><span style='font-family:Times New Roman,Times,serif'><strong>{$row['name']}&nbsp;</strong></span></p>
                                  </th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td><span style='font-family:Times New Roman,Times,serif'>Date&nbsp;</span></td>
                                  <td><span style='font-family:Times New Roman,Times,serif'>{$row['date']}</span></td>
                              </tr>
                              <tr>
                                  <td><span style='font-family:Times New Roman,Times,serif'>Title&nbsp;</span></td>
                                  <td><span style='font-family:Times New Roman,Times,serif'>{$row['title']}</span></td>
                              </tr>
                              <tr>
                                  <td><span style='font-family:Times New Roman,Times,serif'>Post info</span></td>
                                  <td><span id='post_info_id' style='font-family:Times New Roman,Times,serif'>{$row['post_info']}</span></td>
                              </tr>
                              <tr>
                                  <td colspan='2'><img
                                  src='http://0.0.0.0:8081/GSSS/Gsss_admin/uploads/post_img/{$row_img['img']}'
                                  alt='{$row_img['img']}'></td>
                              </tr>
                          </tbody>
                      </table>";
                  }
              }
          }
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

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="main.js"></script>
  <script src="./post.js"></script>
</body>

</html>
