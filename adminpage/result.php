<?php

include_once '../sign_in_up/config.php'; 
session_start();
include_once 'topbar.php'; include_once 'sidebar.php';

if(!isset($_SESSION['admin_name'])){
   header('location:../sign_in_up/login_form.php');

}

if(isset($_POST['submit'])){
      

      if($_POST['course_']=='null' || $_POST['series']=='null' || $_POST['semester']=='null')
         {
            $error = "please, fill up all the fields!";
         }
         
      else{
      $id = $_POST['id'];
      $course = $_POST['course_'];

      $select = " SELECT stu_id FROM $course
         WHERE stu_id =  '$id' ";

      $result = mysqli_query($conn, $select);

      if(mysqli_num_rows($result) > 0){
         $error = 'marks for this id are already inserted';
      }

      else{
      
         $_SESSION['st_id'] = $id;
         $_SESSION['course'] = $course;
         header('location:add_marks.php');
      }

      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject form</title>

    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

<div class="form-container">

<form method="post">

   <h3>Choose A Course</h3>

   <?php
      if(isset($error)){
            echo '<span class="error-msg">'.$error.'</span>';
      };
   ?>
   <input type="number" name="id" class="id" required placeholder="Enter Student ID">

   <select name='series'>
    <option  value="null">Series</option>
    <option value="series">2018</option>
   </select>

   <select name='semester'>
      <option  value="null">Semester</option>
      <option value="series">1st Semester</option>
   </select>

   <select name='course_'>
      <option value="null">Course_code</option>
      <option value="cse_101">CSE 101</option>
      <option value="cse_102">CSE 102</option>
   </select>
   
   <input type="submit" name="submit" value="Next" class="form-btn">

</form>

</div>
</body>
</html>