<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
<?php
$email=$_GET['id'];
$link=mysqli_connect("localhost","root","","quadb");
$res=mysqli_query($link,"select * from login where mail='$email'");
if(mysqli_num_rows($res)>0)
    echo "<font color='red'>User already exist</div>";
else 
    echo  
    "<font color='green'>Email available</font>";
mysqli_close($link);
?>

