<?php
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
require 'config.php';
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo 
        "<script> alert('Username or Email Has Already Taken'); </script>";
        
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
            mysqli_query($conn,$query);
            echo 
            "<script> alert('Registration Successfull'); </script>";
           
        }
        else{
            echo 
            "<script> alert('Password Does Not Match'); </script>";
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
  <title>Registration </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <!-- <div class="container-fluid">
            <h1> Registration </h1>
            <form class=""  action="" method="post" autocomplete="off">
                <label for="name"    >Name :</label><br>
                <input type="text" name="name" id="name" value=""  required><br><br>
                <label for="username">Username :</label><br>
                <input type="text" name="username" id="username" value="" required><br><br>
                <label for="email">Email :</label><br>
                <input type="text" name="email" id="email" value="" required><br><br>
                <label for="password">Password :</label><br>
                <input type="password" name="password" id="password" value="" required><br><br>
                <label for="confirmpassword">Confirm Password :</label><br>
                <input type="password" name="confirmpassword" id="confirmpassword" value="" required><br><br>
                
            </form>
    </div> -->


    <form action="" method="POST" autocomplete="off">

      <div class="container register-form" style="padding-top: 20px">
        <h1 class="text-center text-primary">
          Sigup
        </h1>
                      <div class="form-content">
                          <div class="row">
                              <div class="col-md-12 required" >
                                  <div class="form-group required">
                                    <label>Name</label>
                                      <input type="text" class="form-control" placeholder="Your Name *" name="name" value=""/>
                                      
                                  </div>
                                  <div class="form-group required" >
                                    <label>User Name</label>
                                      <input type="email" class="form-control" placeholder="Your Username" name="username" value=""/>
                                      
                                  </div>
                                  <div class="form-group required" >
                                    <label>Email</label>
                                      <input type="email" class="form-control" placeholder="Your Email *" name="email" value=""/>
                                      
                                  </div>
                                  
                              </div>
                              <div class="col-md-12 required">
                                  <div class="form-group required">
                                    <label>Password</label>
                                      <input type="password" class="form-control" placeholder="Your Password *" name="password" value=""/>
                                
                                  </div>
                                  
                                  <div class="form-group required">
                                    <label>Confirm Password</label>
                                      <input type="password" class="form-control" placeholder="Confirm Password *" name="confirmpassword" value=""/>
                                      
                                    </div>
                                  <div class="text-center">
                                    <button class="btn btn-success"  type="submit" name="submit" value="" > Sign up </button>

                                    <a class="btn btn-success" href="login.php" > Login</a>
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