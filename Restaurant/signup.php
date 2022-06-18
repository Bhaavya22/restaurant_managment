<?php
$servername = "localhost";
$user = "root";
$pwd = "Bhavya@hari22";
$db= "restaurant";



$conn = new mysqli($servername, $user, $pwd, $db);

if($_SERVER["REQUEST_METHOD"]=="POST"){
$username=$_POST["username"];
$password=$_POST["password"];
  

#$sql="select * from login where username= '".$username."' AND password= '".$password."'";
$sql="insert into login (username, password, usertype) values ('$username','$password','cUstomer')";

$run = mysqli_query($conn,$sql);


header ("Location:login.php");

}
?>















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-in</title>

    <link rel="stylesheet" href="style.css">

    
</head>

<body>

    <div class="container">
        <dive class="formWraper">

            <div class="form">
                <form action="#" method="post">
                    <h2>sign-up</h2>

                    <p class="text">Create a new account</p>

                    <div class="formGroup">
                        <i class="far fa-user"></i>
                        <input type="text" name="username" id="name" placeholder="UserName">
                    </div>
                    <div class="formGroup">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    

                    <div class="checkBox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <span class="text">I Agree with Term & Conditions.</span>
                    </div>
                    <button class="btn">Sign-up</button>

              
                </form>
            </div>



        </dive>
    </div>

    
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