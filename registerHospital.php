<?php
    //including the header (includes/header.php)
    include_once("includes/header.php");
    $error = "";
    if(isset($_POST["submit"])){
        
        //defining a function for validation(Email, name, password etc...) Good from protection from SQL injection
        function validateData($data){

            $textPattern = "/^[a-zA-Z0-9!@#$%^&*\.\s&\-]*$/";
            return preg_match($textPattern, $data);

        }
        
        if(validateData($_POST["name"])){
            $name = $_POST["name"];
        }
        else{
            $error = "Name is not Valid";
        }

        if(validateData($_POST["email"])){
            $email = $_POST["email"];
        }
        else{
            $error = "Email is not Valid";
        }

        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        if(validateData($password) and validateData($confirmPassword) and $password === $confirmPassword){
            $password = password_hash($password, PASSWORD_BCRYPT);
        }
        else{
            $error = "Password is not Valid";
        }

        if(validateData($_POST["address"])){
            $address = $_POST["address"];
        }
        else{
            $error = "Address is not Valid";
        }

        if(!$error){

            //this is object is from CRUD.php. All classes in that file is written by me from scratch
            $query = new query();
            $query->addData("hospitals", array("name"=>$name, "password"=>$password, "email"=>$email, "address"=>$address));

        }


    }

?>   

    <div class="container " id="login-form">

        <?php if($error != "") echo "<div class='alert alert-danger'>$error</div>" ?>

        <form action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>' method="post" class="col-lg-6 col-sm-8 col-xs-12 col-lg-offset-3 col-sm-offset-2 jumbotron">
            
            <p class="text-center" id="heading">Hospital Register</p><br>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
            </div>

            <div class="form-group">
                <input type="password" id="" class="form-control" placeholder="Confirm Password" name="confirmPassword" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Address" name="address" required>
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