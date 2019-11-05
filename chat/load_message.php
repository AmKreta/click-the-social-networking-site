<?php session_start(); ?>

<?php

$receiver_id=$_POST['chat_id'];
$user_id=$_SESSION['user_id'];


include('../include/php/include.php');

$sql="select * from chat where (chat_sender_id='$user_id' and chat_receiver_id='$receiver_id') or (chat_sender_id='$receiver_id' and chat_receiver_id='$user_id')";
$result=mysqli_query($conn,$sql);



while($row=mysqli_fetch_assoc($result))
     {
       $float='left';
       
       if($row['chat_sender_id']==$user_id)
         $float='right';

       $message=$row['chat_text'];
       $chat_id=$row['chat_id'];

      echo "<div style='width:auto;height:auto;float:$float;background-color:rgb(230,255,238);border-radius:25px;padding:10px'>

           $message
            </div><br><br><br>";
      $sql="update chat set chat_status='read' where chat_id='$chat_id'";
      $res=mysqli_query($conn,$sql);
     }

?>
