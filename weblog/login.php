<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="../styles/regstyle.css" type="text/css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   </head>
<body style=" background: url('../assets/BG.jpg') no-repeat center center fixed; background-size: cover; ">
<img src="../assets/logo1.png" class="logo" style="width: auto; height: auto;">
  <h3 style="font-size: 60px; margin-top: 100px; padding-top: 100px;">Ramen Noodle Shop</h3>
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form class="" action="" method="post" autocomplete="off">
  	<h2>Username or Email: </h2>
    <input type="text" name="usernameemail" placeholder="Username or Email">
    <h2>Password: </h2>
    <input type="password" name="password" placeholder="Password">
    <br>
    <br>
    <input type="submit" name="submit" class="action_btn submit" id="button1" value="Log in" style="width: 100%; " >
    <a href="registration.php"><input type="button" name="submit" class="action_btn submit" id="button2" value="Register" ></a>
</form>
    
    <br>
  <div class="login-help">
    <a href="#">Forgot Password?</a>
  </div>
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
