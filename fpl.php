<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantsy Premier League</title>
    <link rel="stylesheet" href="css/fpl2.css">
    <link rel="shortcut icon" href="images/stats.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url(./images/fpldaily/<?php echo date("d")?>.JPG);">
    <header>
        <nav>
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
                    <li><a href="dashboard.html">DASHBOARD</a></li>
                </ul>
                    </li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h2>Welcome</h2>
            <p>Login Here</p>
            <a href="https://fantasy.premierleague.com/"><input type="button" value="Login" id="btn"></a>
        </div>
    </header>
    <script>
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