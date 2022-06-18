<?php
$servername = "localhost";
$username = "root";
$password = "Bhavya@hari22";
$db= "restaurant";


$fname=$_POST["First"];
$lname=$_POST["Last"];
$email=$_POST["Email"];
$guestn=$_POST["Guest"];
$date=$_POST["Date"];
$time=$_POST["Time"];
$note=$_POST["Note"];


// Create connection
$conn = new mysqli($servername, $username, $password, $db);


$sql= "insert into booking (firstn,lastn,email,guestn,date1, ttime,note,status1) values ('$fname','$lname','$email',$guestn,'$date','$time','$note' ,'Ocupied')";
 
$sql1 ="select max(booking_id) from booking   ";

$run = mysqli_query($conn,$sql);
$run1 = mysqli_query($conn,$sql1);
$row = $run1 -> fetch_row();
echo $row[0];

$t=$row[0];

if ($run!="")
{
   $v=$row[0];
}
else
{
    $v=0;
}


if($v==$row[0])
{
    $x= "Table booked";
}
else{
    $x= "Tabel cannot be booked";
}

header ("Location: booking1.php?msg=$x&obj=$v &time=$time");



/*
if($fname !='' && $lname !=''&&  $email !='' && $guestn!='' && $date !='' && $time !='' && $note !='')
{
    echo "submitted";

header("Location:booking.html");
}
else{
echo "Please fill all fields.....!!!!!!!!!!!!";
}
*/
?>