<?php
include_once '../sign_in_up/config.php'; 
session_start();
include_once 'topbar.php';

if(!isset($_SESSION['admin_name'])){
   header('location:../sign_in_up/login_form.php');

}

?>
<?php
//   calculation with SQL
    $course = $_SESSION['course'];

    $select = "SELECT $course.*, user_form.name
    from $course,user_form
    where user_form.id = $course.stu_id";

    $result = mysqli_query($conn, $select);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result View</title>
    <link rel="stylesheet" href="css/marks.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

    <div  style='padding: 10px'>  
      
         <div style='padding-bottom: 5px'><?php  echo '<span class="course">Course Code: '.'<span style="text-transform: uppercase">'.$_SESSION['course'].'</span>'.'</span>' ?></div>
         <h3>semester result</h3>

     <table class="table table-striped table-dark" style="text-align: center">
      
     <thead>
            <tr >
                <th>ID</th>
                <th>Name</th>
                <th>CT</th>
                <th>Attendance</th>
                <th>Part-A</th>
                <th>Part-B</th>
                <th>Total-Marks</th>
                <th>Grade</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
             while($row = $result->fetch_assoc()){

                // average CT marks calculation
                $CT=($row["ct_1"] + $row["ct_2"] + $row["ct_3"] + $row["ct_4"]);
                $CT = $CT - min($row["ct_1"],$row["ct_2"],$row["ct_3"],$row["ct_4"]);
                $CT/=3;
                
                // grade calculation
                $total = $row["attendance"]+$row["part_a"]+$row["part_b"]+$CT;
                if($total>=80) {$grade = 4.0; $lg='(A+)';}
                else if($total>=75 && $total<80) {$grade = 3.75; $lg='(A)';}
                else if($total>=70 && $total<75) {$grade = 3.50; $lg='(A-)';}
                else if($total>=65 && $total<70) {$grade = 3.25; $lg='(B+)';}
                else if($total>=60 && $total<65) {$grade = 3.0;  $lg='(B)';}
                else if($total>=55 && $total<60) {$grade = 2.75; $lg='(B-)';}
                else if($total>=50 && $total<55) {$grade = 2.50; $lg='(C+)';}
                else if($total>=45 && $total<50) {$grade = 2.25; $lg='(C)';}
                else if($total>=40 && $total<45) {$grade = 2.0; $lg='(D)';}
                else {$grade = 0.0; $lg='(F)';}

              echo "<tr>
                        <td>".$row["stu_id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".round($CT,2)."</td>
                        <td>".$row["attendance"]."</td>
                        <td>".$row["part_a"]."</td>
                        <td>".$row["part_b"]."</td>
                        <td>".round($total,2)."</td>
                        <td>".$grade." ".$lg."</td>
                        <td>
                        <a href='update.php?id={$row["stu_id"]}&course=0' class='btn btn-outline-success'><b>Update</b></a>
                        <a onclick=\" javascript:return confirm('Are you sure to Delete it?');\" href='delete.php?id={$row["stu_id"]}&course=0'class='btn btn-outline-danger'><b>Delete</b></a>
                        </td>
            </tr>";
            }
            ?>
        </tbody>

    </table>
    </div>
</body>
</html>