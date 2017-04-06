<?php 
    // $pageTitle = "Dashboard";
    
    $ip = $_SERVER["REMOTE_ADDR"];
    //echo $ip;

    require_once("phpscripts/init.php");

    if(isset($_POST['submit'])) {
        //echo "Congrats, you're a good clicker";
        $username = trim($_POST['username']); //trim is to take out any spaces from doing a copy and paste
        $password = trim($_POST['password']);

        if($username != "" && $password != "") {
            $result = logIn($username, $password, $ip);
            $message = $result;
            //echo "All Good!";
        }else {
            $message = "Please fill in the required fields";
        }
    }


 ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in | Chantry Island</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/slicknav.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <section class="row panel">
    <h1 class="hidden">Chantry Island</h1>
    <div class="row">
      <div class="large-12 columns">
        <h1 class="text-center">Chantry Island CMS Login</h1>
        <?php 
           date_default_timezone_set('America/Toronto');

           function headerImage(){
               if(date("H")< 17){
                   echo "<img src='images/day-header.jpg' alt='MHS logo'";

               }elseif (date("H")> 18){
                   echo "<img src='images/night-header.jpg' alt='MHS logo'";
        
                }
           }
           
          echo headerImage();
        ?> 

        <?php
                if(!empty($message)) {echo $message;}
         ?>
        <form action="admin_login.php" method="post">
        <div class="row">
        <div class="small-10 medium-offset-4 medium-4 large-offset-4 large-4 columns">
        <label>Username
        <input type="text" name="username" value="" placeholder="Please enter your username">
        </label>
        <label>Password
        <input type="password" name="password" value="" placeholder="Please enter your password">
        </label>
        <input type="submit" name="submit" value="Login" class="button tiny button">
        <button class="button tiny button round">Forget password</button><br>
        <a href="../index.php">Back to main site</a>
        </div>
        </div>
        </form>
      </div>
    </div>

    </section>
    
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/start.js"></script>
  </body>
</html>
