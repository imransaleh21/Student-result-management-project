<?php

include_once '../sign_in_up/config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../sign_in_up/login_form.php');
}

?>
<?php
//   calculation with SQL
    $id = $_SESSION['Roll']; 
    $select = "SELECT *,'CSE_101'as name
               from cse_101
               WHERE stu_id=$id
               UNION
               SELECT *,'CSE_102'as name
               from cse_102
               WHERE stu_id=$id";

    $result = mysqli_query($conn, $select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>student page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../sign_in_up/css/style.css">
   <link rel="stylesheet" href="../adminpage/css/marks.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<div class="container">

   <div class="content">
      <h3>Hi, <span>Student</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <a href="../sign_in_up/logout.php" class="btn">logout</a>
   </div>
</div>

<div style='padding: 20px'>  
      
         <div><?php  echo '<span class="course">Student ID: '.'<span style="text-transform: uppercase">'.$_SESSION['Roll'].'</span>'.'</span>' ?></div>
         <div style='padding-bottom: 5px'><?php  echo '<span class="course">Student Name: '.'<span style="text-transform: uppercase">'.$_SESSION['user_name'].'</span>'.'</span>' ?></div>
         <h3>semester result</h3>

     <table class="table table-striped table-dark" style="text-align: center">
      
     <thead>
            <tr >
                <th>Course_Code</th>
                <th>CT</th>
                <th>Attendance</th>
                <th>Part-A</th>
                <th>Part-B</th>
                <th>Total-Marks</th>
                <th>Grade</th>
            </tr>
        </thead>

        <tbody>
            <?php
               while($row = $result->fetch_assoc()){
                   // average CT marks calculation
                   $CT=($row["ct_1"] + $row["ct_2"] + $row["ct_3"] + $row["ct_4"]);
                   $CT = $CT - min($row["ct_1"],$row["ct_2"],$row["ct_3"],$row["ct_4"]);
                   $CT/=3;
                   //grade calculation
                    $total = $row["attendance"]+$row["part_a"]+$row["part_b"]+$CT;
                    if($total>=80) {$grade = 4.0; $lg='(A+)';}
                    else if($total>=75 && $total<80) {$grade = 3.75; $lg='(A)';}
                    else if($total>=70 && $total<75) {$grade = 3.50; $lg='(A-)';}
                    else if($total>=65 && $total<70) {$grade = 3.25; $lg='(B+)';}
                    else if($total>=60 && $total<65) {$grade = 3.0;  $lg='(B)';}
                    else if($total>=55 && $total<60) {$grade = 2.50; $lg='(C+)';}
                    else if($total>=45 && $total<50) {$grade = 2.75; $lg='(B-)';}
                    else if($total>=50 && $total<55) {$grade = 2.25; $lg='(C)';}
                    else if($total>=40 && $total<45) {$grade = 2.0; $lg='(D)';}
                    else {$grade = 0.0; $lg='(F)';}

                echo "<tr>
                            <td>".$row["name"]."</td>
                            <td>".round($CT,2)."</td>
                            <td>".$row["attendance"]."</td>
                            <td>".$row["part_a"]."</td>
                            <td>".$row["part_b"]."</td>
                            <td>".round($total,2)."</td>
                            <td>".$grade." ".$lg."</td>
                     </tr>";
                }
            ?>
            

        </tbody>

    </table>
    </div>

</body>
</html>