<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
  
   

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'Student'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:welcome.php');

      }elseif($row['user_type'] == 'Faculty'){

         $_SESSION['user_name'] = $row['name'];
         header('location:welcome.php');

      }
     
   }else{
      $error[] = 'Incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body class="body2">
   
<div class="container">

   <form action="" method="post">
      <h2>Login now</h2>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="Login" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>
<!-- <div class="container">
      <div class="header">
        <h1>Colorful Login Page</h1>
      </div>
      <form>
        <input type="text" placeholder="Username" id="username">
        <input type="password" placeholder="Password" id="password">
        <input type="submit" value="Login" id="submit"> -->
      <!-- </form>
    </div> -->