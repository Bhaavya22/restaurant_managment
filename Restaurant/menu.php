<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <title>Menu</title>
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./globalStyles.css">
  <link rel="stylesheet" href="./components.css">
  <!-- aos library css  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Add your custom css -->
  <link rel="stylesheet" href="./menu.css">
</head>

<body>

  <!-- Nav Section -->
  <div class="nav">
    <div class="container">
      <div class="nav__wrapper">
        <a href="./index.html" class="logo">
          <img src="./images/logo.jpg" alt="logo" style="width: 50px; height: 60px ;">
        </a>
        <nav>
          <div class="nav__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-menu">
              <line x1="3" y1="12" x2="21" y2="12" />
              <line x1="3" y1="6" x2="21" y2="6" />
              <line x1="3" y1="18" x2="21" y2="18" />
            </svg>
          </div>
          <div class="nav__bgOverlay"></div>
          <ol class="nav__list">
            <div class="nav__close">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
              </svg>
            </div>
            <div class="nav__list__wrapper">

             <!-- <li><a class="nav__link" href="./index.html">Home</a></li>
              <li><a class="nav__link" href="./menu.php">Menu</a></li>
              <li><a class="nav__link" href="./about.html">About</a></li>
              <li><a class="nav__link" href="./contact.html">Contact</a></li>-->
         <?php

?>
             
              <?php
               
            $servername = "localhost";
            $username = "root";
            $password = "Bhavya@hari22";
            $db= "restaurant";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $db);
            


            $usertype="";
            $username="";
            if(isset($_GET['usertype'])){
                                    $usertype=$_GET['usertype'];
                                    
            }
            if(isset($_GET['username'])){

                                    $username=$_GET['username'];
                                    $_SESSION['username'] = $username;
                                 
            }
            
                                                       //echo $username."----".$usertype;
                  
                  if(trim($usertype) == 'admin')
                  {
                    //echo $usertype."dfffffff";
              ?>

                <li><a href="./edit_menu.php" class="btn primary-btn">Administration</a></li>
                <li><a href="./order.php" class="btn primary-btn">bookings</a></li>
                <li><a href="./index.html" class="btn primary-btn">Logout</a></li>
            
              <?php }else 
              if (trim($usertype) =='customer'){
              ?>
              <li><a href="./index.html" class="btn primary-btn">Logout</a></li>
              <li><a href="./booking1.php" class="btn primary-btn">Book Table</a></li>
              
               <?php
              } else{

              
              ?>
              <li><a href="./index.html" class="btn primary-btn">Home</a></li>
              <li><a href="./about.html" class="btn primary-btn">About</a></li>
              <li><a href="./contact.html" class="btn primary-btn">Contact</a></li>
              <li><a href="./login.php" class="btn primary-btn">Login</a></li>
              <?php }
              ?>
            </div>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- End Nav Section -->
  <!-- page Title -->
<?php
      
      
      if($usertype!="")
      {
        echo"<Center><font size='+2' color= 'green'>user:$username</font></center>";
      }
      else {
       
      }
?>

  <section id="page__title" data-aos="fade-up">
    <div class="container">
      <h2 class="page__title__text">
        Explore Our Menu
      </h2>
    </div>
  </section>
  <!-- Our Specials -->
  <section id="ourSpecials" data-aos="fade-up">
    <div class="container">
      <h3 class="ourSpecials__title">Our Specials</h3>
      <div class="ourSpecials__wrapper">
        <div class="ourSpecials__item">
          <div class="ourSpecials__item__img">
            <img src="./images/food-3.png" alt="food img">
          </div>
          <div class="ourSpecials__item__info">
           
          
         
           <?php
            $sql= "SELECT dish FROM restaurant.our_specials where sno='1'";
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>
            <h3 class="ourSpecials__item__title">
               <?php
                echo $row[0];                                             
              ?>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.our_specials where sno='1'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h4 class="ourSpecials__item__price">Rs 
              <?php
                echo $row1[0];                                             
              ?></h4>
            <div class="ourSpecials__item__stars">
              <img style=size:25px src="./images/3star.png" alt="3 stars">
            </div>
          </div>
        </div>
        <div class="ourSpecials__item">
          <div class="ourSpecials__item__img">
            <img src="./images/food-1.png" alt="food img">
          </div>
          <div class="ourSpecials__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.our_specials where sno='2'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="ourSpecials__item__title">
              <?php
                echo $row[0];                                             
              ?>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.our_specials where sno='2'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h4 class="ourSpecials__item__price">Rs 
              <?php
                echo $row1[0];                                             
              ?>
              </h4>
            <div class="ourSpecials__item__stars">
              <img src="./images/3star.png" alt="3 stars">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Specials -->
  <!-- Top Dishes -->
  <section id="dishGrid" data-aos="fade-down">
    <div class="container">
      <h2 class="dishGrid__title">
        Top Dishes
      </h2>
      <div class="dishGrid__wrapper">
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/whopper-burger-1024x1024.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
          <?php
            $sql= "SELECT dish FROM restaurant.top_dish where sno='1'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>
            <h3 class="dishGrid__item__title">
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.top_dish where sno='1'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h3 class="dishGrid__item__price">Rs 
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/pizza.jpeg" alt="food img">
          </div>
          <div class="dishGrid__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.top_dish where sno='2'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="dishGrid__item__title">
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.top_dish where sno='2'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h3 class="dishGrid__item__price">Rs  
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/corn.jpeg" alt="food img">
          </div>
          <div class="dishGrid__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.top_dish where sno='3'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="dishGrid__item__title">
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.top_dish where sno='3'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>

            <h3 class="dishGrid__item__price">Rs  
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Top Dishes -->
  <!-- Breakfast Dishes -->
  <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title">
        Breakfast
      </h2>
      <div class="dishGrid__wrapper">
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/sandwich.jpeg" alt="food img">
          </div>
          <div class="dishGrid__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.breakfast where sno='1'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="dishGrid__item__title">
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.breakfast where sno='1'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h3 class="dishGrid__item__price">Rs  
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/corn.jpeg" alt="food img">
          </div>
          <div class="dishGrid__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.breakfast where sno='2'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="dishGrid__item__title">
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.breakfast where sno='2'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h3 class="dishGrid__item__price">Rs  
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/pizza.jpeg" alt="food img">
          </div>
          <div class="dishGrid__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.breakfast where sno='3'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="dishGrid__item__title">
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.breakfast where sno='3'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h3 class="dishGrid__item__price">Rs  
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/whopper-burger-1024x1024.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.breakfast where sno='4'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="dishGrid__item__title">
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.breakfast where sno='4'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h3 class="dishGrid__item__price">Rs  
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/Masala-Papad-1-3.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.breakfast where sno='5'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="dishGrid__item__title">
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.breakfast where sno='5'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>

            <h3 class="dishGrid__item__price">Rs  
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- End Breakfast Dishes -->
  <!-- Lunch Dishes -->
  <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title">
        Lunch & Dinner
      </h2>
      <div class="dishGrid__wrapper">
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/biriyani.jpeg" alt="food img">
          </div>
          <div class="dishGrid__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.lnd where sno='1'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="dishGrid__item__title" >
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.lnd where sno='1'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h3 class="dishGrid__item__price">Rs 
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/paneer-butter-masala-1.webp" alt="food img">
          </div>
          <div class="dishGrid__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.lnd where sno='2'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="dishGrid__item__title">
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.lnd where sno='2'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h3 class="dishGrid__item__price">Rs  
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/Mushroomtomatocurry.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.lnd where sno='3'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="dishGrid__item__title">
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.lnd where sno='3'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h3 class="dishGrid__item__price">Rs  
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/biriyani.jpeg" alt="food img">
          </div>
          <div class="dishGrid__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.lnd where sno='4'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="dishGrid__item__title">
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.lnd where sno='4'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h3 class="dishGrid__item__price">Rs 
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/naan.jpeg" alt="food img">
          </div>
          <div class="dishGrid__item__info">

          <?php
            $sql= "SELECT dish FROM restaurant.lnd where sno='5'";
            
            $run = mysqli_query($conn,$sql);
            $row = $run -> fetch_row();
            ?>

            <h3 class="dishGrid__item__title">
            <?php
                echo $row[0];                                             
              ?>
            </h3>
            </h3>
            <?php
            $sql1= "SELECT price FROM restaurant.lnd where sno='5'";
            $run1 = mysqli_query($conn,$sql1);
            $row1 = $run1 -> fetch_row();
            ?>
            <h3 class="dishGrid__item__price">Rs  
              <?php
                echo $row1[0];                                             
              ?>
              </h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Lunch Dishes -->
  <!-- Dinner Dishes -->
  
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__col1">
          <div class="footer__logo">
            <img src="./images/logo.jpg" alt="logo">
          </div>
          <p class="footer__desc">
            Fresh and delicious traditional  food to delight the whole family.
          </p>
          <div class="footer__socials">
            <h4 class="footer__socials__title">Follow us</h4>
            <ol class="footer__socials__list">
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-facebook">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-instagram">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-twitter">
                    <path
                      d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                  </svg>
                </a>
              </li>
            </ol>
          </div>
        </div>
        <div class="footer__col2">
          <h3 class="footer__text__title">
            Links
          </h3>
          <ol class="footer__text">
            <li>
              <a href="./index.html">Home</a>
            </li>
            <li>
              <a href="./menu.php">Menu</a>
            </li>
            <li>
              <a href="./booking1.php">Book Table</a>
            </li>
            <?php 
                 if(trim($usertype)=="admin")
             { ?>
             <li><a href="./order.php">Order Details</a></li>
            <?php }
           ?>
            <li>
              <a href="./about.html">About Us</a>
            </li>
            <li>
              <a href="./contact.html">contact Us</a>
            </li>
            <li>
              <a href="#">Privacy Policy</a>
            </li>
          </ol>
        </div>
        <div class="footer__col3">
          <h3 class="footer__text__title">
            Support
          </h3>
          <ol class="footer__text">
            <li>
              <a href="#">Contact</a>
            </li>
            <li>
              <a href="#">Support Center</a>
            </li>
            <li>
              <a href="enquiry.php">Feedback</a>
            </li>
          </ol>
        </div>
        <div class="footer__col4">
          <h3 class="footer__text__title">
            Contact
          </h3>
          <ol class="footer__text">
            <li>
              <a href="#">+91 9638527415</a>
            </li>
            <li>
              <a href="#">vegan@gmail.com</a>
            </li>
            <li>
              <a href="#">Raipur India</a>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </footer>
  <div id="copyright">
    <div class="container">
      <p class="copyright__text">
        © copyright 2021 restaurant | All rights reserved
      </p>
    </div>
  </div>
  <!-- End Footer -->
  <!-- aos script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- custom script -->
  <script src="./main.js"></script>

  
  <div class="alan-btn"></div>
    <script type="text/javascript"
     src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
    <script>
      var alanBtnInstance = alanBtn({
        key: "f49dd2343aa07df0acc4fe12f1a71eca2e956eca572e1d8b807a3e2338fdd0dc/stage",
        onCommand: function (commandData) {
          if (commandData.command === "go:back") {
            //call client code that will react on the received command
          }
          if (commandData.command === "scrolldown") {
              window.scrollTo(500, 800);
          }
          if (commandData.command === "scrollup"){
              window.scrollTo(500,800);
          }
          if (commandData.command === "homePage") {
              window.location.replace("index.html");
          }
          if (commandData.command === "contactpage") {
              window.location.replace("contact.html");
          }
          if (commandData.command === "aboutpage") {
              window.location.replace("about.html");
          }
          if (commandData.command === "bookingpage") {
              window.location.replace("booking1.php");
          }
          if (commandData.command === "menupage") {
              window.location.replace("menu.html");
          }
          if (commandData.command === "feedbackpage") {
              window.location.replace("enquiry.html");
          }
          
        },
        rootEl: document.getElementById("alan-btn"),
      });
    </script>
</body>

</html>