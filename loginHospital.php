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

        if(validateData($_POST["email"])){
            $email = $_POST["email"];
        }
        else{
            $error = "Email is not Valid";
        }

        if(validateData($_POST["password"])){
            $password = $_POST["password"];
        }
        else{
            $error = "Password is not Valid";
        }

        if(!$error){

            //this is object is from CRUD.php. All classes in that file is written by me from scratch
            $query = new query();
            $result = $query->getData("hospitals","password", array("email"=>$email));

            if($result){
                $hashPassword = $result[0][0];
                
                if(password_verify($password, $hashPassword)){
                    echo "success";
                }
            }

            else{
                $error = "Entered Email or Password was wrong!!";
            }

        }

    }
?>   

    <div class="container " id="login-form">

        <?php if($error != "") echo "<div class='alert alert-danger'>$error</div>" ?>

        <form action = '<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>' method="post" class="col-lg-6 col-sm-8 col-xs-12 col-lg-offset-3 col-sm-offset-2 jumbotron">
            
            <p class="text-center" id="heading">Hospital Login</p><br>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
            </div><br>
            <input type="submit" value="Register" class="btn btn-info btn-lg center-block" name="submit"> 
            <hr>

            <a href="index.php" class="btn btn-warning btn-lg center-block">Login as Receiver</a><br>
            
            <p class="text-center" id="or">-----or-----</p>
            <a href="registerHospital.php" class="btn btn-danger center-block">Register</a><br>
             
        </form>
    
    </div>

<?php 

    //including footer (includes/footer.php)
    include_once("includes/footer.php");

?>