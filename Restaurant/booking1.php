
<?php
session_start();//include("menu.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <title>Booking</title>
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./globalStyles.css">
  <link rel="stylesheet" href="./components.css">
  <!-- aos library css  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
<?php
$username="";
//echo $username."jjjjjj";
/*$user="";
echo "hhhhhhhh".isset($_GET['book']);
if(isset($_GET['book']))
{
  $user = $_GET['book'];
  echo "ffffffff".$user;
}*/
//require_once"index.html";
if (isset($_SESSION['username'])!=""){
             $username=$_SESSION['username'];
}           
if($username !=""){
     
?>
              <li><a class="btn primary-btn" href="./index.html">Logout</a></li>
              <?php
             // echo "inside if condition....";
              //session_destroy();
              
            }
              else{  
              //echo "inside else part";
                //if($username != "")
                //{
                //session_destroy();
                //}
                ?>
                <li><a class="btn primary-btn" href="./index.html">Home</a></li>
                <?php   }
              ?>

             <!-- <li><a class="btn primary-btn" href="./about.html">About</a></li>
              <li><a class="btn primary-btn" href="./contact.html">Contact</a></li>-->
             <!-- <li><a href="./booking1.php" class="btn primary-btn">Book Table</a></li>-->
            </div>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- End Nav Section -->
  <!-- Booking Section -->
  <p  style =font:arial; font-size:25px; >
<?php
/*$z = $_GET['x'];
echo $z;
$y = explode("--",$z);
echo $y;
$yy = $y[0];
$yyy = $y[1];*/


//isset($_GET['obj']);
$time = isset($_GET['time']);
$runi= isset($_GET['obj']);


if($runi!=""){

echo "<p style=font: 'arial' font-size:25px ;><Center><font size='+2'color='blue' >".$_GET['msg'].":". $_GET['obj']."</font></center>"; 
?><p  style =font:arial; font-size:25px ; >
<?php
echo"<Center><font size='+2' color= 'blue'>Table booked will be automatically discarded after 30 mins of your arival time</font></center>" ;
echo"<br>";
echo"<Center><font size='+2' color= 'blue'></font></center>" ;

/*
$time1 = strtotime($time);
$endTime = date("H:i", strtotime('+30 minutes', $time1));
echo "<br>";
echo "Time limit";

echo $endTime;*/
/*
           $servername = "localhost";
            $username = "root";
            $password = "Bhavya@hari22";
            $db= "restaurant";
            
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $db);

$querry="UPDATE booking SET endtime = $endTime ";
echo $querry;
$run = mysqli_query($conn,$querry);
mysql_execute($run);
*/
//$row= mysqli_fetch_array($run);

/*date_default_timezone_set('Asia/Kolkata'); 
$currentTime = date( ' H:i:s A', time () ); 
echo $currentTime;*/
}if($username !=""){
  echo"<Center><font size='+2' color= 'green'>user:$username</font></center>";
}
?></p>

<section id="form" data-aos="fade-up">
    <div class="container">
      <h3 class="form__title">Book Table</h3>
      <div class="form__wrapper">
        <form action="booking.php" name="booking" method="POST"  >
          <div class="form__group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="First" required>
          </div>
          <div class="form__group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="Last" required>
          </div>
          <div class="form__group">
            <label for="email">Email</label>
            <input type="email" id="email" name="Email" required>
          </div> 
          <div class="form__group">
            <label for="guestNumber">Guest Number</label>
            <input type="number" id="guestNumber" name="Guest"  required>
          </div>
          <div class="form__group">
            <label for="date">Date</label>
            <input type="date" id="date" name="Date" required>
          </div>
          <div class="form__group">
            <label for="time">time</label>
            <input type="time" id="time" name="Time" required>
          </div>
          <div class="form__group form__group__full">
            <label for="note">Note</label>
            <textarea name="Note" id="note" rows="4"></textarea>
          </div>
          <?php 
         
          if($username !=""){?>  
          <button type="submit" class="btn primary-btn" name="book" id="book" value="Book Table">Book Table</button>
            <?php } else {
              ?>
              <button type="submit" class="btn primary-btn" value="<?php $username ="";?>" >Submit</button>
<?php            }?>
        </form>
      </div>
    </div>
  </section>
  <!-- End Booking Section -->
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__col1">
          <div class="footer__logo">
            <img src="./images/logo.jpg" alt="logo">
          </div>
          <p class="footer__desc">
            Fresh and delicious traditional food to delight the whole family.
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
              <a href="./booking.html">Book Table</a>
            </li>
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
              <a href="#">webcifar@gmail.com</a>
            </li>
            <li>
              <a href="#">Raipur ,India</a>
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

  <!-- aos scripts -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- custom scripts -->
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