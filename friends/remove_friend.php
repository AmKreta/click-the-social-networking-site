<?php session_start(); ?>

<?php
 
 $friend_id=$_POST['user_id'];

 $user_id=$_SESSION['user_id'];

 include('../include/php/include.php');

 $sql="delete from friend_request_information where(friend_request_sender_id='$user_id' and friend_request_receiver_id='$friend_id') or (friend_request_sender_id='$friend_id' and friend_request_receiver_id='$user_id')";
 
  $result=mysqli_query($conn,$sql);

  if($result)  
      header('LOCATION:friend_list.php');
?>
