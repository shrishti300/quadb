<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$msg1="";
$msg="";
if($_POST["postId"] != ''){
     $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"quadb");
    $qry="UPDATE data SET text='".$_POST["txtdata"]."' WHERE post_id='".$_POST["postId"]."'";
    mysqli_query($link,$qry);
    $res=mysqli_affected_rows($link);
                if($res>0)
                {
                   $msg1="<div style='color:green;'>Submitted!!!</div>";
                } 
                else {
                        echo "nothing happened";
mysqli_close($link);}
}else
{
   
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"quadb");
    $qry="INSERT INTO data (text) VALUES('".$_POST["txtdata"]."')";
    mysqli_query($link,$qry);
    $res=mysqli_affected_rows($link);
                if($res>0)
                {
                   $msg1="<div style='color:green;'>Submitted!!!</div>";
                } 
                else {
                        echo "invalid attempt !!!";
mysqli_close($link);}}
?>
