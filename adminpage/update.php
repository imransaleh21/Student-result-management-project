<?php
include_once '../sign_in_up/config.php'; 
session_start();
include_once 'topbar.php';

if(!isset($_SESSION['admin_name'])){
   header('location:../sign_in_up/login_form.php');
}
   $id = $_GET['id'];
   $bool = 0;
   if($_GET['course']) {$course = $_GET['course'];}
   else {$course = $_SESSION['course'];}

   $sql = "SELECT * FROM $course WHERE stu_id='$id'"; //query for collection from table
   $result = mysqli_query($conn, $sql);
   $info = $result->fetch_assoc();

   // insert into table
   if(isset($_POST['update'])){

      $ct1 = $_POST['ct_1'];
      $ct2 = $_POST['ct_2'];
      $ct3 = $_POST['ct_3'];
      $ct4 = $_POST['ct_4'];
  
      $attendance = $_POST['attendance'];
  
      $a = $_POST['part_a'];
      $b = $_POST['part_b'];
  
      $update = "UPDATE $course 
                 SET ct_1='$ct1',ct_2='$ct2',ct_3='$ct3',ct_4='$ct4',attendance='$attendance',part_a='$a',part_b='$b' 
                 WHERE stu_id='$id'";

      $check = mysqli_query($conn, $update);
      if($check){
         if($_GET['course']) { header('location:studentview.php');}
         else{header('location:viewresult.php');}
       }
  };
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update</title>
   <link rel="stylesheet" href="css/marks.css">
</head>
<body>
    <div class="marks_container">
         <form method="post">
            <h3>Update Result</h3>
              <div class="add_marks">
                        <?php  echo '<span class="rc"> Student ID: '.'<span style="text-transform: uppercase">'.$id.'</span>'.'</span>' ?>
                        <?php  echo '<span class="rc"> Course Code: '.'<span style="text-transform: uppercase">'.$course.'</span>'.'</span>' ?>

                       <p><span>CT Marks: </span> <input type="number"  step="0.01" name="ct_1" value="<?php echo "{$info['ct_1']}"; ?>">
                       <input type="number"  step="0.01" name="ct_2" value="<?php echo "{$info['ct_2']}"; ?>">
                       <input type="number"  step="0.01" name="ct_3" value="<?php echo "{$info['ct_3']}"; ?>">
                       <input type="number"  step="0.01" name="ct_4" value="<?php echo "{$info['ct_4']}"; ?>"></p>

                      <p><span>Attendance Marks: </span><input type="number"  step="0.01" name="attendance" value="<?php echo "{$info['attendance']}"; ?>"></p>

                       <p><span>Semester Final Marks: </span><input type="number"  step="0.01" name="part_a" value="<?php echo "{$info['part_a']}"; ?>">
                       <input type="number"  step="0.01" name="part_b" value="<?php echo "{$info['part_b']}"; ?>"></p>

                       <input type="submit" name="update" value="UPDATE" class="form-btn">
               </div>
         </form>
     </div>
</body>
</html>