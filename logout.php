<?php session_start(); ?>

<?php
 include('include/php/include.php');
 $user_id=$_SESSION['user_id'];
 $sql="update click.user_list set user_status='offline' where user_id='$user_id'";
 $res=mysqli_query($conn,$sql);
 session_destroy();

 header('location:signup/signup_form.php');

?>



