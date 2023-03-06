<?php

include_once 'config.php';

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $id = mysqli_real_escape_string($conn, $_POST['id']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
   $check = " SELECT * FROM user_form WHERE id = '$id'";

   $result = mysqli_query($conn, $select);
   $result1 = mysqli_query($conn, $check);

   if(mysqli_num_rows($result1) > 0){
      $error[] = 'you enter the same ID!';
   }

   else if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }
   else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }
      else{
         $insert = "INSERT INTO user_form(id, name, email, password, user_type) VALUES('$id','$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="form-container">

   <form method="post">
      <h3>register now</h3>
      <!-- for error message -->
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <!-- form start -->
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="number" name ="id" required placeholder="enter your ID"> 
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">student</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php"><b>login now</b></a></p>
   </form>

</div>
</body>
</html>