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
 <link rel="stylesheet" href="./css/model.css">
 
  <link rel="stylesheet" href="./css/page_2.css">
  <link rel="stylesheet" href="./css/page_3.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/page_1-5.css">
</head>

<body>
  <div class="main">
    <div class="page_1">
      
<!-- header -->
<?php
require("./conn.php");
require("./header.php");
?>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <?php 
          $sql = "SELECT * FROM Scroller WHERE status = 1 ORDER BY roll DESC";
          $result = mysqli_query($conn, $sql);
          
          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  echo "<div class='swiper-slide'><img src='../Gsss_admin/uploads/{$row['img']}'></div>";
                  
              }
          }
          ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>


      </div>

      <hr>
      <div class="box_a">
        <div class="bax_a_a">
          Bullet-In
        </div>
        <div class="box_a_b">
          <div class="box_a_b_a">
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
          </div>
          <div class="box_a_b_a">
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
          </div>
          <div class="box_a_b_a">
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
            <h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
          </div>

        </div>

      </div>
      <div class="walcome_info">
        <div class="info">
          <h1>Welcome to Our School</h1>
          <div class="line"></div>
          <p class="info_p">
            Rao Pahlad Singh (RPS) Sr. Sec. School, Khatod Mohindergarh, spread over 10 acres of open land in the lap of nature, is a school that was founded on the vision of spreading value-based education to every corner of the country. The vision spearheaded by Dr. O. P. Yadav, a well known advocate and educationist, is also committed passionately to the cause of quality education. This vision takes shape under the dynamism of its Chairperson Dr. Pavitra Rao and in the forth coming future the institute would be a model of quality education throughout the length and breadth of the state. Infact the school has been rooting records of its achievements for the last 23 years.
          </p>
          <div class="read_more">
            <div class="read_more_btn">
              Read More
            </div>
          </div>

        </div>
      </div>
      <div class="box_X">
        <div class="box_X_">
          <div class="box_box">
            <div class="img_box">
              <img src="./img/top_log/logo_1.png" alt="">
            </div>
            <li>NEET</li>
          </div>
          <div class="box_box">
            <div class="img_box">
              <img src="./img/top_log/logo_2.png" alt="">
            </div>
            <li>NEET</li>
          </div>
          <div class="box_box">
            <div class="img_box">
              <img src="./img/top_log/logo_3.png" alt="">
            </div>
            <li>NEET</li>
          </div>
          <div class="box_box">
            <div class="img_box">
              <img src="/icone/doctor.png" alt="">
            </div>
            <li>NEET</li>
          </div>
          <div class="box_box">
            <div class="img_box">
              <img src="/icone/doctor.png" alt="">
            </div>
            <li>NEET</li>
          </div>
          <div class="box_box">
            <div class="img_box">
              <img src="/icone/doctor.png" alt="">
            </div>
            <li>NEET</li>
          </div>
          <div class="box_box">
            <div class="img_box">
              <img src="/icone/doctor.png" alt="">
            </div>
            <li>NEET</li>
          </div>
          <div class="box_box">
            <div class="img_box">
              <img src="/icone/doctor.png" alt="">
            </div>
            <li>NEET</li>
          </div>

        </div>

      </div>
    </div>
    <div class="page_1-5_">
         <div class="page_1-5">
      <div class="box_1">
         <h1 class="box_1_h h">
            <span>F</span>
            <span>A</span>
            <span>C</span>
            <span>I</span>
            <span>L</span>
            <span>I</span>
            <span>T</span>
            <span>Y</span>

         </h1>
      </div>
      <div class="box_2">
       <div class="swiper faslity mySwiper_1">
          <div class="swiper-wrapper">
                      <?php 
                      $sql = "SELECT * FROM facility WHERE status = 1 ORDER BY roll DESC";
                      $result = mysqli_query($conn, $sql);
                      
                      if (mysqli_num_rows($result) > 0) {
                          while ($row_1 = mysqli_fetch_assoc($result)) {
                              echo "  <div class='swiper-slide'>
                                             <div class='swiper-slide_box'>
                                            <div class='top_'>
                                              <img src='../Gsss_admin/uploads/facility_img/{$row_1['img']}' alt=''>
                                            </div>
                                            <div class='bottom_'>
                                                              <h3>{$row_1['name']}</h3>
                                                              <h4>{$row_1['title']}</h4>
                                              <p>
                                            {$row_1['info']}

                                              </p>
                                            </div>
                                          </div>
                              
                                          </div>
                            ";
                          }
                      }
                      ?>
          </div>
        </div>

      </div>

      <div class="box_3">
         <h1 class="box_3_h h">
            <span>F</span>
            <span>A</span>
            <span>C</span>
            <span>I</span>
            <span>L</span>
            <span>I</span>
            <span>T</span>
            <span>Y</span>
         </h1>
      </div>
   </div>

    </div>
    <div class="page_2">
      <div class="box_Y">
        <div class="box_y_info">
          <h1>Admission Open</h1>
          <p>Life @ Rai Bahadur MMM GSSS Mahender Garh is characterized by an unwavering commitment to embracing the finest aspects of our diverse cultural heritage. Our curriculum is meticulously crafted to foster holistic development among our students. At the heart of our mission lies the aspiration to ignite creativity, urging each student to uncover their inherent talents and passions.</p>
          <button>Admissions Open</button>
        </div>
      </div>
      <div class="box_Z">
        <div class="left">
          <div class="left_info">
            <h1>Life @  GSSS Mahender Garh</h1>
            <p>Rai Bahadur MMM GSSS Mahender Garh: A prestigious school fostering holistic development and academic excellence in Mahender Garh.</p>
          </div>
          <div class="scoller_2">
            <!-- add scoller_2 ❌❌ -->
          </div>
        </div>
        <div class="right">
          <img src="./img/student/student_1.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="page_3">
      <div class="box_teacher_info">
        <div class="box_teacher_info_hading">
          <h1>Meet Our Mentors</h1>
          <div class="line_2"></div>
        </div>
        <div class="box_teacher_box">
          <div class="left">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                          <?php 
                          $sql = "SELECT * FROM Teachers WHERE status = 1 ORDER BY roll DESC";
                          $result = mysqli_query($conn, $sql);
                          
                          if (mysqli_num_rows($result) > 0) {
                              while ($row_2 = mysqli_fetch_assoc($result)) {
                                  echo "
                                                  <div class='swiper-slide'>
                                                    <div class='info_box_xyz'>
                                                      <div class='info_box_xyz_img'>
                                                        <img src='../Gsss_admin/uploads/teacher_img/{$row_2['img']}' alt=''>
                                                      </div>
                                                      <h2>{$row_2['name']}</h2>
                                                      <li>{$row_2['title']}</li>
                                  
                                                      <p>
                                                      {$row_2['info']}
                                                      </p>
                                                    </div>
                                                  </div>
                                  
                                  
                                  
                                  
                                  ";
                              }
                          }
                          ?>
                

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="right">
            <div class="right_box_x">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/0o1aJkP-a9c" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="right_box_y">
              <div class="right_box_y_1">CEO Window</div>
              <div class="right_box_y_2">CEO Window</div>
            </div>

          </div>
        </div>

      </div>

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
  <script type="text/javascript" src="cdn_modules/Swiper@11.0.5/swiper-bundle.min.js"></script>
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
   <script>
          var swiper = new Swiper(".mySwiper_1", {
            effect: "cards",
            grabCursor: true,
          });
        </script>




   <script type="text/javascript" src="cdn_modules/gsap@3.12.5/gsap.min.js"></script>
   <script type="text/javascript" src="cdn_modules/gsap@3.12.5/ScrollTrigger.min.js"></script>
   <script src="./js/page_1-5.js"></script>
  <script src="main.js"></script>
  <script src="./yo.js/jquery.js"></script>
  <script src="./_.js"></script>
</body>

</html>