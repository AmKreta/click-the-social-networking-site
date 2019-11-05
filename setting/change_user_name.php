<?php session_start(); ?>

<?php
     
  $user_id=$_SESSION['user_id'];
  include("../include/php/include.php");
 
 //pending request sent

  $user_id=$_SESSION['user_id'];
  $new_user_name=$_POST["user_name"];

  $sql="update user_list set user_user_name='$new_user_name' where user_id='$user_id'";
  $result=mysqli_query($conn,$sql);
  if($result)
     echo 'changed';
  else
     echo mysqli_error($conn);
?>
