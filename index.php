<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <title>The Prem Bros</title>
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css
    ">

</head>
<body>
    <!-- PRELOADER -->
<div id="preloader">
    <div class="loader_line"></div>
</div>
<!-- /PRELOADER -->
        <header>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <h1>Sign up Form</h1>
        </header>
        <section>
            
            <div id="entire">
                <div id="create">
                    <!-- <span class="dot1"></span>
                    <span class="dot2"></span>
                    <span class="dot3"></span> -->
                    <form action="dashboard.html" method="post" >
                    <h2>Create Account</h2>
                    <input type="text" placeholder="Name" id="name" autofocus required>
                    <input type="email" placeholder="Email" id="email" required>
                    <input type="password" placeholder="password" id="password" required>
                    <input type="submit" value="SIGN UP" class="btn" required> 
                    </form>
                    <div>
                        <p>Already have an account?</p>
                        <a href="signin.html">Click here</a>
                    </div>
                    
                </div>
            </div>
        </section>
    

<!-- Scripts -->

      <!-- signup scripts -->
<!-- <script>
         var f= document.querySelector('#signup');
         f.addEventListener('submit', e =>{e.preventDefault()})

    fetch('/signin', {
        method:'POST',
        body: new FormData(e.target),
        credentials:'include'
    })
     .then((res) => {
        if(res.status== 200) {
            return Promise.resolve()
        }else{
            return Promise.reject('Sign-in faild');
        }
     })
    .then((profile) => {
        if(window.PasswordCredential) {
            var c = new PasswordCredential(e.target);
           return navigator.credentials.store(c);
     } else {
        return Promise.resolve(profile)
     }
    })
    .then((profile) =>{
        if(profile){
            updateUI(profile);
        }
    }) 
    .catch((error) =>{
        showError ('Sign-in Failed');
    }) -->
<!-- </script> -->




<!-- Preloader Scripts -->
    <script>
        var loader= document.getElementById("preloader")
        window.addEventListener("load", function(){loader.style.display="none";})
        //alert("Click okay if you want to be one of the boys");
   
   </script>




</body>
</html>