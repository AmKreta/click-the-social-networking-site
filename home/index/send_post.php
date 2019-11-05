<?php session_start();  ?>

<?php

var_dump($_POST);

include('../../include/php/include.php');

 $sql="select count(*) from post_likes where post_likes_post_id='$post_id' and post_likes_user_id='$user_id'";//checking if already liked
                           
$user_id=$_SESSION['user_id'];
$receiver_id=$_POST['friend_id'];
$post_id=$_POST['post_id'];
$post_user_name=$_POST['post_user_name'];

echo $receiver_id.' '.$post_id;
$chat_text="<form action='../home/index/single_post.php' method='post' style='float:left'>
            <input type='hidden' id='post_id' name='post_id' value='$post_id'></input>
            <button type='submit' style='border-radius:25px;'>check out this post by <b>$post_user_name</b></button>
            </form>";

$sql="insert into click.chat (chat_sender_id,chat_receiver_id,chat_text,type) values('$user_id','$receiver_id',\"$chat_text\",'post')";
$result=mysqli_query($conn,$sql);
if($result)
  echo "sent";
else
  echo "error";
?>
