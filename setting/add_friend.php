<?php session_start(); ?>

<?php
  

  $request_sender_id=$_SESSION['user_id'];
  $request_receiver_id=$_POST['user_id'];
 
  include("../include/php/include.php");

  $sql="insert into click.friend_request_information(friend_request_sender_id,friend_request_receiver_id) values('$request_sender_id','$request_receiver_id')";
  $result=mysqli_query($conn,$sql);
 
  if($result)
    {
     //add notifications also..
     header('location:setting.php');
    }
  else
   echo mysqli_error($conn);
?>
