<?php session_start(); ?>

<?php

$receiver_id=$_POST['chat_id'];


include('../include/php/include.php');

$sql="select * from click.user_list where user_list.user_id='$receiver_id'";

$result=mysqli_query($conn,$sql);  

//var_dump($result);

if($result)
  {
    $result=mysqli_fetch_assoc($result);
    $user_full_name=$result['user_first_name'].' '.$result['user_middle_name'].' '.$result['user_last_name'];
    $user_name=$result['user_user_name'];
    $user_profile_pic=$result['user_profile_pic'];

    echo "<div class='user_info' id='$receiver_id' style='width:10%;height:100%;float:left'>
             <img src='../database/$user_profile_pic' style='width:100%;height:100%;border-radius:50%'>
          </div>

          <div class='user_info' id='$receiver_id' style='width:85%;height:100%;padding:5px'>
                 <p style='font:25px impact;color:white;'>$user_name<br><small><small>($user_full_name)</small></small></p>
                 
          </div>";
  }
else
 echo mysqli_error($conn);

?>
