<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <title>Oreder Details</title>
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./globalStyles.css">
  <link rel="stylesheet" href="./components.css">
  <!-- aos library css  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="./about.css">
</head>

<body>
  <!-- Nav Section -->
  <div class="nav">
    <div class="container">
      <div class="nav__wrapper">
        <a href="./index.html" class="logo">
          <div id="image"><img src="./images/logo.jpg" alt="logo" style="width:50px;height:60px;"></div>
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

              <li><a class="btn primary-btn" href="./index.html">Logout</a></li>
             <!--  <li><a class="btn primary-btn" href="./menu.php">Menu</a></li>
             <li><a class="btn primary-btn" href="./about.html">About</a></li>
              <li><a class="btn primary-btn" href="./contact.html">Contact</a></li>-->
              <li><a href="edit_menu.php" class="btn primary-btn">Administration</a></li>
            </div>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- End Nav Section -->
  <!-- Our Story Section -->
  <section id="ourStory" data-aos="fade-up">
    <div class="container">
      <div class="ourStory__wrapper">

       <div class="ourStory__info">
          <h3 class="ourStory__title">
           Order Details
          </h3>
          <p>
         <?php 
            $servername = "localhost";
            $username = "root";
            $password = "Bhavya@hari22";
            $db= "restaurant";
            
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $db);
            //$row = 0;
            $sql= "SELECT * FROM restaurant.booking";
            
            $run = mysqli_query($conn,$sql);       

            while($row=$run->fetch_assoc()){
              $time=$row["ttime"];
              $bd=$row["date1"];
              $v= explode("-",$bd);
              $j= $v[0]."".$v[1]."".$v[2];
              
              //echo $bdate;
              //$bd= strtotime($bdate);

              echo "<br>";

            date_default_timezone_set('Asia/Kolkata'); 
            $cd = date('Y-m-d');
            //$cd=  strtotime($date);
            //echo $cd."--".$bd;

            $n= explode("-",$cd);
              $k= $n[0]."".$n[1]."".$n[2];
              //echo $k;

          $currentTime = date( ' H:i:s A', time () ); 
         // echo $currentTime;

         if ($j==$k){
           
          if($currentTime>=$time){
              $limit=strtotime($currentTime)-strtotime($time);          
          
          $min = strtotime('30:00');

          if ($limit<=$min){
            $querry="UPDATE booking SET  status1='full' where date1=$bd";
           
            $r = mysqli_query($conn,$querry);
            
            }

          else{
            $querry1="UPDATE booking SET  status1='vacant'where date1=$bd";
            $r1 = mysqli_query($conn,$querry1);
            
          }}

          
          else{
            $querry2="UPDATE booking SET  status1='full'where date1='$bd'";
            $r2 = mysqli_query($conn,$querry2);
           
          }

        }
        else if ($j > $k){
         
            $querry3="UPDATE booking SET  status1='full' where date1='$bd'";
            $r3 = mysqli_query($conn,$querry3);
            
        }

        else if ($j < $k){
          
          //exit;
          $querry4="UPDATE booking SET  status1='vacant' where date1='$bd'";
         
          $r4 = mysqli_query($conn,$querry4);
          //mysql_execute($r4);
      }
        
         
             
            echo "-Name: " . $row["firstn"]. " " .$row["lastn"]. "<br>";
            echo "Email: " . $row["email"].  "<br>";
            echo "Guest no: " . $row["guestn"].  "<br>";
            echo "Date: " . $row["date1"].  "<br>";
            echo "Time: " . $row["ttime"].  "<br>";
            echo "Note: " . $row["note"].  "<br>";
            echo "Status: " . $row["status1"]. "<br>";
            echo "<br>";
            echo "<br>";

            $row ++;
          }

        
  

          
   ?>
               </p>
            
            </div>
        </div>
     </div>
   <!-- Footer -->
   <footer>
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__col1">
          <div class="footer__logo">
            <img src="./images/logo.jpg" alt="our restaurant">
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
              <a href="./booking1.php">Book Table</a>
            </li>
            <li>
              <a href="./about.html">About Us</a>
            </li>
            <li>
              <a href="./contact.php">contact Us</a>
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
              <a href="#">Feedback</a>
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
              <a href="#">Raipur,India</a>
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