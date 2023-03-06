<?php

include_once '../sign_in_up/config.php'; 
session_start();
include_once 'topbar.php'; //include_once 'sidebar.php';

if(!isset($_SESSION['admin_name'])){
   header('location:../sign_in_up/login_form.php');
}
?>

 <?php
  if(isset($_POST['submit'])){

    $ct1 = $_POST['ct_1'];
    $ct2 = $_POST['ct_2'];
    $ct3 = $_POST['ct_3'];
    $ct4 = $_POST['ct_4'];

    $attendance = $_POST['attendance'];

    $a = $_POST['part_a'];
    $b = $_POST['part_b'];

    $course = $_SESSION['course'];
    $id = $_SESSION['st_id'];
    $insert = "INSERT INTO $course (stu_id, ct_1, ct_2, ct_3, ct_4, attendance,	part_a,	part_b) 
               VALUES('$id', '$ct1','$ct2','$ct3','$ct4','$attendance', '$a', '$b')";

    mysqli_query($conn, $insert);
    header('location:result.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Marks</title>
    <link rel="stylesheet" href="css/marks.css">
</head>
<body>
     <div class="marks_container">
         <form method="post">
            <h3>Add Result</h3>
              <div class="add_marks">
                        <?php  echo '<span class="rc"> Student ID: '.'<span style="text-transform: uppercase">'.$_SESSION['st_id'].'</span>'.'</span>' ?>
                        <?php  echo '<span class="rc"> Course Code: '.'<span style="text-transform: uppercase">'.$_SESSION['course'].'</span>'.'</span>' ?>

                       <p><span>CT Marks: </span><input type="number"  step="0.01" name="ct_1" required placeholder="CT-1">
                       <input type="number"  step="0.01" name="ct_2" required placeholder="CT-2">
                       <input type="number"  step="0.01" name="ct_3" required placeholder="CT-3">
                       <input type="number"  step="0.01" name="ct_4" required placeholder="CT-4"></p>

                      <p><span>Attendance Marks: </span><input type="number"  step="0.01" name="attendance" required placeholder="Attendance"></p>

                       <p><span>Semester Final Marks: </span><input type="number"  step="0.01" name="part_a" required placeholder="Part-A">
                       <input type="number"  step="0.01" name="part_b" required placeholder="Part-B"></p>

                       <input type="submit" name="submit" value="INSERT" class="form-btn">
               </div>
         </form>
     </div>
</body>
</html>
