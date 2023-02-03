<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
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
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/regstyle.css" type="text/css">
    <link rel="stylesheet" href="../styles/fontstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Register </title>
   </head>
<body style=" background: url('../assets/BG.jpg') no-repeat center center fixed; background-size: cover; ">
	<img src="../assets/logo1.png" class="logo" style="width: auto; height: auto;">
  <h3 style="font-size: 60px; margin-top: 100px; padding-top: 100px;">Ramen Noodle Shop</h3>
  <div class="login-card">
    <h1>Register</h1><br>
  <form class="" action="" method="post" autocomplete="off">
  	<h2>Name: </h2>
    <input type="text" name="name" placeholder="Name" required>
    <h2>Username: </h2>
    <input type="text" name="username" placeholder="Username" required>
  	<h2>Email: </h2>
    <input type="text" name="email" placeholder="Email">
    <h2>Password: </h2>
    <input type="password" name="password" placeholder="Password" required>
    <br>
    <h2>Confirm Password: </h2>
    <input type="password" name="confirmpassword" placeholder="Confirm Password" required>
    <br>
  
    <br>
    <br>
    <button type="submit" name="submit" class="action_btn submit" id="button1" > Register</button>
    <a href="login.php"><input type="button" name="login" class="action_btn submit" id="button2" value="Login"></a>
  </form>
<br>
  
    
</div>
    </div>
    </div>
    </div>
  </div>
<div>
	<h1 class="greet">Have a taste of our 
    <br><hr>own signature<br><hr>Ramen Noodles</h1>

</div>
</body>
</html>

