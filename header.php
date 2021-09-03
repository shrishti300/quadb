<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="row" style="background-color:black;">
      <div class="col-sm-12">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
                 <a class="navbar-brand" href="#">Secret Diaries</a> </li>
        </div>
            <ul class="nav navbar-nav navbar-right">
               
                    
                    <?php 
                    if(isset($_SESSION['email_sess']))
                    {
                    echo "<li><a href='log-in.php'><i class='glyphicon glyphicon-log-out'> Logout</i></a></li>";
                    }
                    else{
                        echo "<li><a href='log-in.php'><i class='glyphicon glyphicon-log-in'> Login</i></a></li>";
                    }
                    ?>
                                        
                    
            </ul>
    </nav>     
</div>
</div>

