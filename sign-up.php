
<!doctype html>

<?php 
session_start();
$msg=" ";
if(isset($_POST['sign-in']))
{
   
    $email=$_POST['mail_id'];
    $pass=$_POST['password'];
   
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"quadb");
    $qry="insert into login values('$email','$pass')";
    mysqli_query($link,$qry);
    $res=mysqli_affected_rows($link);
                if($res>0)
                {
                    header("location:log-in.php?");
                } 
                else {
                        $msg="<div style='color:red; background-color:pink'>invalid login Credentials !!!</div>";
mysqli_close($link);}}
                        ?>
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
            <div class="col-mb-12">
                <?php include("header.php"); ?>
            </div>
        </div>
            
            
        <div class="row">
            <div class="col-sm-12 box">
        <form class="form-signin" method="POST">
            <h1 class="mb-4 info-head" > Secret Diary </h1>
            <p style="font-size:13px" class="info-last"> <b>Store your thoughts permanently and securely.</b></p>
            <br>
            <p style="font-size:13px" class="info-mid"> Interested? Sign up now.</p>
            <label><?php echo $msg; ?> </label>
 

            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="mail_id" required autofocus>
            <br>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> <span class="info">Stay Logged In</span>
                </label>
            </div>
            <button class="btn btn-sm btn-success " type="submit" id="b1" name="sign-in" >Sign Up!</button>

            <a href="log-in.php" class="mt-5 mb-3 text-muted"><p style="margin:10px;" class="info-last">log in<p></a>
            
        </form>
      </div>
        </div>
            </div>
    </body>
</html>

