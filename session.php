<?php
include('dbcon.php');
session_start();
$user_check=$_SESSION['email'];

$sql = mysqli_query($conn,"SELECT * FROM signup WHERE email='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$email=$row['email'];
  $session_name =$row['names'];
// $session_uin = $row['uin'];
// $session_phone = $row['phone'];
// $session_station = $row['station'];
// $session_designation = $row['designation'];
// $session_passport = $row['passport'];
 
if(!isset($user_check))
{
header("Location: ../");
}
?>




