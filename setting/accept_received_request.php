<?php session_start();  ?>

<?php
  
  $id1=$_POST["user_id"];
  $id2=$_SESSION["user_id"];
  
  include("../include/php/include.php");

  $sql="update click.friend_request_information
        set friend_request_response='friends',friend_request_response_time=CURRENT_TIMESTAMP
        where (friend_request_sender_id='$id1'and friend_request_receiver_id='$id2') or (friend_request_sender_id='$id2' and friend_request_receiver_id='$id1')";

  if(mysqli_query($conn,$sql))
     header('location:setting.php');
  else
    echo mysqli_error($conn);

?>
