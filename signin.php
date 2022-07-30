<?php
	require('dbcon.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){

		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email2 = mysqli_real_escape_string($conn,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['pass']);
		$password = mysqli_real_escape_string($conn,$password);



	//Checking is user existing in the database or not
        $query = "SELECT * FROM `signup` WHERE email='$email' AND pass=PASSWORD('$password')";
		$result = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['email'] = $email;
			echo '<script type="text/javascript"> window.open("dashboard.php","_self");</script>'; // Redirect user to index.php
            }else{
    echo "<script>alert('Invalid Email & Password ')</script>";
   }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <section>
            <div id="outer">
                <div id="inner">
                      <h1>The Boys Sports</h1>
                      <form method="post">
                            <input type="email" name="email" id="email" placeholder="Email" required>
                            <input type="password" name="pass" id="pas" placeholder="Password" required >
                            <button type="submit" id="l">Log in</button>
                            <p><a href="">Forgotten Password?</a></p>
                        </form>
                     <a href="index.php" id="c">Create New Account</a>
                      
                      <!-- 
                      <p style="margin-left: 20px; color: gray;"> <a href="">Create a page</a> for a celebrity, brand or business</p> -->
                </div>
            </div>    
    </section>
    
</body>
</html>