 <?php

include_once '../sign_in_up/config.php';

session_start();

include_once 'topbar.php'; include_once 'sidebar.php';

if(isset($error)){
      echo '<span class="error">'.$error.'</span>';
};

if(!isset($_SESSION['admin_name'])){
   header('location:../sign_in_up/login_form.php');
}
?> 