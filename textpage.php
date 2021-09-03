<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
isset($_SESSION['email_sess']);

?>


<html>
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


        <link href="textarea.css" rel="stylesheet">
        
        <script>
        $(document).ready(function(){
        function autoSave(){
            var txt = $('#txt').val();
            var post_id = $('#post_id').val();
            
            if(txt != ''){
                $.ajax({
                    url: "save.php",
                     method: "POST",
                     data:{txtdata:txt,postId:post_id},
                     dataType:"text",
                     success:function(data){
                         if(data !=''){
                             $('#post_id').val(data);
                         }
                         
                           $('#autoSave').text("Post save as draft"); 
                           setInterval(function(){
                               $('#autoSave').text('');
                           },10000);
                       }
                           });
                         }
                           }
                       }
                       setInterval(function(){
                           autoSave();
                       },10000);
                   });
        </script>
            
    </head>
    
    <body class="text-center " id="cover">
     
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <?php include("header.php") ?>
                </div>
            </div>
           
 
            <div class="row">
       <div class="col-sm-12 box">
        <form class="form-signin" method="POST" id="myform">
            
            <textarea class="area" row="100" column="100" name="txt" id="txt" style="height:400px; width:400px; margin:-10px;"> </textarea>
        <input type="hidden" name="post_id" id="post_id">
        <div id="autoSave" style="background-color: greenl;"></div>
        </form>
           
        </div>
        </div>
        </div> 
    </body>
</html>
