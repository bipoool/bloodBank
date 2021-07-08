<?php
    //including the header (includes/header.php)
    include_once("includes/header.php") 
?>   

    <div class="container " id="login-form">
    
        <form action="" method="post" class="col-lg-6 col-sm-8 col-xs-12 col-lg-offset-3 col-sm-offset-2 jumbotron">
            
            <p class="text-center" id="heading">Receiver Login</p><br>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
                <input type="password" name="" id="" class="form-control" placeholder="Enter Password" required>
            </div><br>
            <input type="submit" value="LogIn" class="btn btn-info btn-lg center-block"> 
            <hr>
            
            <a href="loginHospital.php" class="btn btn-warning btn-lg center-block">Login as Hospital</a><br>

            <p class="text-center" id="or">-----or-----</p>
            <a href="registerReceiver.php" class="btn btn-danger center-block">Register</a><br>
             
        </form>
    
    </div>


<?php 

    //including footer (includes/footer.php)
    include_once("includes/footer.php")

?>