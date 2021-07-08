<?php
    //including the header (includes/header.php)
    include_once("includes/header.php") 
?>   

    <div class="container " id="login-form">
    
        <form action="" method="post" class="col-lg-6 col-sm-8 col-xs-12 col-lg-offset-3 col-sm-offset-2 jumbotron">
            
            <p class="text-center" id="heading">Receiver Register</p><br>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <input type="password" name="" id="" class="form-control" placeholder="Enter Password">
            </div><br>
            <input type="submit" value="Register" class="btn btn-info btn-lg center-block"> 
            <hr>

            <a href="registerHospital.php" class="btn btn-warning btn-lg center-block">Register as Hospital</a><br>
            
            <p class="text-center" id="or">-----or-----</p>
            <a href="index.php" class="btn btn-danger center-block">LogIn</a><br>
             
        </form>
    
    </div>

<?php 

    //including footer (includes/footer.php)
    include_once("includes/footer.php")

?>