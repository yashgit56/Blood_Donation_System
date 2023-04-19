<?php

  @include 'config.php' ;
  if(isset($_POST['submit'])){
      $username = mysqli_real_escape_string($conn,$_POST['username']) ;
      $fullname = mysqli_real_escape_string($conn , $_POST['fullname']) ;
      $email = mysqli_real_escape_string($conn , $_POST['email']) ;
      $pass = mysqli_real_escape_string($conn ,$_POST['pass']);
      $cpass = mysqli_real_escape_string($conn , $_POST['cpass']);
      $phoneno = mysqli_real_escape_string($conn , $_POST['mobileno']);

      $query = "SELECT * FROM users_db WHERE  username = '$username' && email ='$email' ";

      $result = mysqli_query($conn, $query) ; 
      
      if(mysqli_num_rows($result) > 0){
          echo '<script> alert("User already exist with that username") </script>' ;
      }
      else{

          if($pass != $cpass){
              echo '<script> alert("Password and confirm password are not matched") </script>' ;
          }
          else{
              $insert = "INSERT INTO `users_db`(`username`, `fullname`, `email`, `password`, `phoneno`) VALUES ('$username','$fullname','$email','$pass','$phoneno')" ;
              mysqli_query($conn,$insert) ;
              echo '<script> alert("now you can login to the system") </script>' ;
          }   
      }
  }   
?>
<script>
  
  function checkPass(){
    pass = document.getElementById('pass').value;
    apass = document.getElementById('cpass').value;
    if(pass != apass){
      document.getElementById("pmessage").classList.add("success");

      document.getElementById("pmessage").classList.remove("error");

    }else{
      document.getElementById("pmessage").classList.add("error");

      document.getElementById("pmessage").classList.remove("success");
    }
  }
</script>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="reg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration Form</title>
     <style>
          .error{
            display:none;
          }
          .success{
            color: red ;
            display:block;
          }
  </style>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" pattern="[0-9]{10}" placeholder="Enter your number" name="mobileno" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="pass" id="pass" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="cpass" id="cpass" onInput="checkPass()" required>
          </div>
          <div>
            <p class='error' id='pmessage'>please enter same password</p>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div> 
        <div class="button">
          <input type="submit" value="Register" name="submit">
        </div>
        <p>Already have an account? <a href="login_form.php">Login</a></p>
      </form>
    </div>
  </div>
</body>
</html>


