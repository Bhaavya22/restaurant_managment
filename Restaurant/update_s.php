<?php 

   $servername = "localhost";
$user = "root";
$pwd = "Bhavya@hari22";
$db= "restaurant";



$conn = new mysqli($servername, $user, $pwd, $db);

   
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST["dish"];
        $price=$_POST["price"];

        $query = "update our_specials set price=$price where dish ='$name'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:edit_menu.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Menu</title>

    <link rel="stylesheet" href="style.css">

    
</head>

<body>

    <div class="container">
        <dive class="formWraper">

            <div class="form">
                <form action="#" method="post">
                    <h2>Update Menu</h2>
                    <p>into our specials</p>
                    <div class="formGroup">
                        <i class="far fa-user"></i>
                        <input type="text" name="dish" id="name" placeholder="Dish Name">
                    </div>
                    <div class="formGroup">
                        <i class="fas fa-lock"></i>
                        <input type="number" name="price" id="price" placeholder="Price">
                    </div>
                    

                    <div class="checkBox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <span class="text">I Agree with Term & Conditions.</span>
                    </div>
                    <button class="btn">Update</button>

              
                </form>
            </div>



        </div>
    </div>

    </body>

</html>