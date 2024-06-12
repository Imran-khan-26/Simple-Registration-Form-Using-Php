<?php
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
require 'config.php';
if(isset($_POST['submit'])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username ='$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }
        else{
            echo"<script>alert('Wrong Password'); </script>";
        }
    }
    else{
        echo"<script>alert('User Not Registered'); </script>";
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h2> Login </h2>
    <form class="" action="" method="Post" autocomplete="auto">
    <label for="username">Username or Email : </label><br>
    <input type="text" name="usernameemail" id = "usernameemail" required value=""><br><br>
    <label for="password">Password :</label><br>
    <input type="password" name="password" id = "password" required value=""><br><br>
    <button type="submit" name="submit"> Registra </button>        
    </form>
    <br>
    <a href="registration.php">Registration</a>   
    
    

</body>
</html> -->


<!doctype html>
<html lang="en">
  <head>
  <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <form action="" method="POST" autocomplete="off">

        <div class="container register-form" style="padding-top: 20px;">
            <h1 class="text-center text-primary">
                Sigup
            </h1>
                            <div class="form-content">
                                <div class="row">
                                    <div class="col-md-12 required" >
                                        
                                        <div class="form-group required" >
                                        <label>Username or Email</label>
                                            <input type="text" class="form-control" placeholder="Your Username Or Email" name="usernameemail" value=""/>
                                            
                                        </div>                           
                                    </div>
                                    <div class="col-md-12 required">
                                        <div class="form-group required">
                                        <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Your Password *" name="password" value=""/>
                                    
                                    </div> 
                                    <div class="text-center">
                                            <button class="btn btn-success" type="submit" name="submit" value="" > Login </button>

                                            <a class="btn btn-success" href="registration.php" > Signup</a>
                                            </div>    
                                    </div>
                                           
                </div>
            </div>   
                            
        </form>
            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>