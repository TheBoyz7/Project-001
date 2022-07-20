<?php 
//                              username    password    dbname
$conn=new mysqli("localhost", "the_boyz", "Fayokunmi", "prem");
if(mysqli_connect_errno()){
    printf("connect failed: %s\n", mysqli_connect_error());
}
?>