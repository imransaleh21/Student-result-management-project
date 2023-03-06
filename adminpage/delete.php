<?php
include_once '../sign_in_up/config.php'; 
session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:../sign_in_up/login_form.php');
}

?>

<?php
   if($_GET['course']) {$course = $_GET['course'];}
   else {$course = $_SESSION['course'];}

  if($_GET['id']){
    $id = $_GET['id'];
    $sql ="DELETE FROM $course WHERE stu_id='$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        if($_GET['course']) { header('location:studentview.php');}
         else {header('location:viewresult.php');}
    }
  }
?>