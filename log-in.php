<?php 
  session_start();
  $msg="";

if(isset($_POST['continue']))
{
 $email=$_POST['mail_id'];
 $password=$_POST['password'];
 $link=mysqli_connect("localhost","root","");
 mysqli_select_db($link,"quadb");
 $res=mysqli_query($link,"select * from login where mail='$email' and psswd='$password'" );

 if(mysqli_num_rows($res)>0)
 {
     $_SESSION['email_sess']=$email;
     header("location:textpage.php");
    
 }
else{
  
   header("location:log-in.php?invalid= Please enter correct username and password");
}
}
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="style.css">
        <title>Secret Diary</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">


        <link href="style.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php include("header.php"); ?>
            </div>
        </div>
            <div class="row">
                <div class="col-sm-12 box">
        <form class="form-signin" method="POST">
            <h1 class="mb-4 info-head"> Secret Diary </h1>
            <p style="font-size:13px" class="info-last"> <b>Store your thoughts permanently and securely.</b></p>
            <br>
            <p style="font-size:13px" class="info-mid"> Interested? Sign up now.</p>

            <?php
            if(@$_GET['invalid']==true)
            {            
            ?>
            <div class="alert-light text-danger text-center py-3" style="background-color:pink;padding:8px;margin-bottom:10px;"><?php echo $_GET['invalid']   ?></div>
            <?php } ?>     
                <div class="sucess">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="mail_id" required autofocus>
            <br>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> <span class="info">Stay Logged In</span>
                </label>
            </div>
            <button class="btn btn-sm btn-success " type="submit" id="b1" name="continue" >Log in!</button>
           
            <a href="sign-up.php" class="mt-5 mb-3 text-muted"><p style="margin:10px" class="info-last">Sign up<p></a>
                </div>
        </form>
                </div>
            </div>
        </div>
    </body>
</html>

