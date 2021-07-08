<?php
    //including the header (includes/header.php)
    include_once("includes/header.php");
    
    if(isset($_POST["submit"])){
        
    }

?>   

    <div class="container " id="login-form">
    
        <form action="" method="post" class="col-lg-6 col-sm-8 col-xs-12 col-lg-offset-3 col-sm-offset-2 jumbotron">
            
            <p class="text-center" id="heading">Hospital Register</p><br>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Email" name="email">
            </div>

            <div class="form-group">
                <input type="password" name="" id="" class="form-control" placeholder="Enter Password" name="password">
            </div>

            <div class="form-group">
                <input type="password" name="" id="" class="form-control" placeholder="Confirm Password" name="confirmPassword">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Address" name="address">
            </div>


            <br><input type="submit" value="Register" class="btn btn-info btn-lg center-block" name="submit"> 
            <hr>

            <a href="registerReceiver.php" class="btn btn-warning btn-lg center-block">Register as Receiver</a><br>
            
            <p class="text-center" id="or">-----or-----</p>
            <a href="loginHospital.php" class="btn btn-danger center-block">Login</a><br>
             
        </form>
    
    </div>

<?php 

    //including footer (includes/footer.php)
    include_once("includes/footer.php");

?>