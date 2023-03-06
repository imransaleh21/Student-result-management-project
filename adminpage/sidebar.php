
<?php
if(isset($_POST['course'])){

   if($_POST['course']=='CSE-101')
    {  
      $c = "cse_101";
       $_SESSION['course'] = $c;
    }

    elseif($_POST['course']=='CSE-102')
    {  $c = "cse_102";
       $_SESSION['course'] = $c;
    }
    header('location:viewresult.php');
}

elseif(isset($_POST['view'])){
   $ID = $_POST['ID'];

   $select = " SELECT stu_id
   FROM cse_101
   WHERE cse_101.stu_id=$ID
   UNION
   SELECT stu_id
   FROM cse_102
   WHERE cse_102.stu_id=$ID";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $_SESSION['Roll'] = $ID;
      header('location: studentview.php');
   }
   else{
      $error= 'marks of this id are not added yet to the database!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin.css">
</head>
<body>
     <aside>
       <ul type='none' class='ul-1'>

           <li>
            <a href="result.php">Add Result</a>
          </li>

           <li class='view'>
            <a href="#">View Result</a>
    
            <!-- 1st division -->
              <ul  type='none' class='sub-1'>  
                <li class='view2'>
                  <a href="#">Course View</a>
                  
                  <!-- 2nd division -->
                   <ul type='none' class='sub-2'>
                     <form  method="post">
                        <li>
                           <input type="submit" name='course' value="CSE-101">
                        </li>
                        <li>
                           <input type="submit" name='course' value="CSE-102">
                        </li>
                     </form>
                   </ul>
                </li>

                <li class='view3'>
                   <a href="#">Student View</a>
                   <!-- 2nd division stu view-->
                   <ul type='none' class='sub-3'>
                     <form  method="post">
                           <li>
                              <input type="number" name="ID" required placeholder="Enter Student ID">
                              <input type="submit" name='view' value="VIEW" id='view'>
                           </li>
                     </form>
                   </ul>
                </li>
              </ul>

          </li>

       </ul>
     </aside>

</body> 
</html>