<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
 $email = $_POST["email"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $gender=$_POST["gender"];
  $duplicate = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $cpassword){
      $query = "INSERT INTO register VALUES('','$username','$firstname','$lastname','$email','$password','$gender')";
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

		
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION FORM</title>
<link rel="stylesheet" href="Css/style.css">
</head>
<body>
<div class="wrapper" style="background-image: url('images/black1.jpg');">
<div class="inner">
<div class="image-holder">
<img src="images/art1.jpg" alt="image">
</div>
<form method="POST">
<h3>Registration Form</h3>
<div class="form-group">
<input type="text" placeholder="First Name" class="form-control" name="firstname" required>
<input type="text" placeholder="Last Name" class="form-control" name="lastname" required>
</div>
<div class="form-wrapper">
<input type="text" placeholder="Username" class="form-control" name="username" required>
 
</div>
<div class="form-wrapper">
<input type="text" placeholder="Email Address" class="form-control" name="email" required>
 
</div>
<div class="form-wrapper">
<select class="form-control" name="gender" value="gender">
<option value="male" name="gender">Male</option>
<option value="female" name="gender">Female</option>
</select>
</div>
<div class="form-wrapper">
<input type="password" placeholder="Password" class="form-control" name="password">
</div>
<div class="form-wrapper">
<input type="password" placeholder="Confirm Password" name="cpassword" class="form-control">
 
</div>
<button type="submit" name="submit">Submit</button>
</form>
<a href="login.php">Login</a>
</div>
</div>

</body>
</html>