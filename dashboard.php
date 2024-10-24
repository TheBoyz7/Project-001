<?php
  include('session.php');
  include('dbcon.php');
  $id = 1;
  $sql="SELECT * FROM signup WHERE id='$id'";
  $result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
  $rows=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Meta tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Premier League; 
                                       pl;
                                       Ronaldo;
                                       CR7;
                                       Manchester United; 
                                       Man Utd; 
                                       chelsea; 
                                       man city; 
                                       arsenal; 
                                       fpl; 
                                       fantasy pl; 
                                       fantasy premier league; 
                                       football; 
                                       ucl" />
		<meta name="description" content="">	
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- end of Meta tag -->
        <!-- title tag -->
    <title> <?php echo $session_name ?> || Dashboard</title>
    <!-- favicon tag -->
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <!-- css -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="font-awesome-4.css"> -->
</head>
<body style="background-image: url(images/pl_bg.png); background-repeat: no-repeat; background-size: cover;">
<!-- PRELOADER -->
<div id="preloader">
    <div class="loader_line"></div>
</div>
<!-- /PRELOADER -->
<header>
    <nav>
        <div class="img">
            <img src="./images/icon.png" alt="">
        </div>
        <div class="nav-links" id="nav">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="man_utd.html">MAN UTD</a></li>
                <li><a href="chelsea.html">CHELSEA</a></li>
                <li><a href="arsenal.html">ARSENAL</a></li>
                <li><a href="mancity.html">MAN CITY</a></li>
                <li><a href="Spurs.html">SPURS</a></li>
                <li><a href="liverpool.html">LIVERPOOL</a></li>
                <li><a href="westham.html">WESTHAM</a></li>
                <li><a href="NEWCASTLE.html">NEWCASTLE</a></li>
                <li><a href="NOTTINGHAM.html">NOTTINGHAM</a></li>
                <li><a href="fulham.html">FULHAM</a></li>
                <li><a href="bournemouth.html">BOURNEMOUTH</a></li>
                <li><a href="brentford.html">BRENTFORD</a></li>
                <li><a href="palace.html">CRYSTAL PALACE</a></li>
                    <li><a href="everton.html">EVERTON</a></li>
                    <li><a href="leciester.html">LEICESTER CITY</a></li>
                    <li><a href="southampton.html">SOUTHAMPTON</a></li>
                    <li><a href="astonvilla.html">ASTON VILLA</a></li>
                    <li><a href="wolves.html">WOLVES</a></li>
                    <li><a href="brighton.html">BRIGHTON</a></li>
                    <li><a href="leeds.html">LEEDS UNITED</a></li>
                <li><a href="dashboard.php">DASHBOARD</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
   </header>
   <section class="features">
    <h1>Hey There <?php echo $session_name ?> would you be checking today?</h1>
    <div class="row">
        <div class="features-col">
            <a href="fpl.php"><img src="./images/fpl.jpg" alt=""></a>
            <br>
            <label for="">Fantasy Premier League</label>
        </div>
        <div class="features-col">
            <a href="transfers.php"><img src="./images/transfers.jpg" alt=""></a>
            <br>
            <label for="">Transfer News</label>
        </div>
        <div class="features-col">
            <a href="news.html"><img src="./images/news.jpg" alt=""></a>
            <br>
            <label for="">News</label>
        </div>
        <div class="features-col">
            <a href="stats.html"><img src="./images/stats.jpg" alt=""></a>
            <br>
            <label for="">Player Stats</label>
        </div>
        <div class="features-col">
            <a href="table.html"><img src="./images/Table.jpg" alt=""></a>
            <br>
            <label for="">League Table</label>
        </div>
        <div class="features-col">
           <a href="fan.html"> <img src="./images/Fan Forum.jpg" alt=""></a>
            <br>
            <label for="">Fan Forum</label>
        </div>
        
    </div>
   </section>
 
   <footer>
    <h3>About us</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. olore dolorum similique quam, <br> distinctio aut dolorem quasi alias aspernatur quod soluta. Sit quos quod pariatur id nulla neque, dignissimos consectetur.</p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-twitter"></i>
    </div>
   </footer>
 



<!-- Scripts -->
<script>
     var loader= document.getElementById("preloader")
     window.addEventListener("load", function(){loader.style.display="none";})

     //for menu slide
  var navLinks = document.getElementById("nav")

function showMenu(){
navLinks.style.right = "0"
}

function hideMenu(){
navLinks.style.right = "-200px"
}
////end of code for menu slide
</script>





</body>
</html>