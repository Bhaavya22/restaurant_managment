<?php
$servername = "localhost";
$username = "root";
$password = "Bhavya@hari22";
$db= "restaurant";



$fname=$_POST["First"];
$lname=$_POST["Last"];
$email=$_POST["Email"];
$msg=$_POST["Message"];


// Create connection
$conn = new mysqli($servername, $username, $password, $db);

$sql= "insert into contact (firstn,lastn,email,msg) values ('$fname','$lname','$email','$msg')";

$run = mysqli_query($conn,$sql);


header ("Location: contact.html?msg=$x&obj=$v");

