<?php session_start();  ?>

<?php

var_dump($_POST);

$receiver_id=$_POST['receiver_id'];
$message=$_POST['message'];
$user_id=$_SESSION['user_id'];

if(strcmp($receiver_id,'nil')!=0 && strcmp($message,'')!=0)
  {
    include('../include/php/include.php');
   
    $sql="insert into click.chat (chat_sender_id,chat_receiver_id,chat_text) values('$user_id','$receiver_id','$message')";
    $result=mysqli_query($conn,$sql);
  }
?>
